<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\taskCategoryStoreApiRequest;
use App\Models\Taskcategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class taskCategoryApiController extends Controller
{
    public function index()
    {
        //get user id by query parameter
        $userId = request('user');
        $data = Taskcategory::where('user_id', $userId)->paginate('15');
        return $data;
    }

    public function store(taskCategoryStoreApiRequest $request)
    {
        $data = Taskcategory::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);

        if($data){
            return new JsonResponse([
                'data' => $data,
            ]);
        }else{
            return 'data is not stored';
        }
    }

    public function show(Taskcategory $task_category)
    {
        //get user id by query parameter
        $userId = request('user');

        if($userId == $task_category->user_id)
        {
            return new JsonResponse([
                'data' => $task_category,
            ]);
        }else{
            return 'You are not authorize to access this item';
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
