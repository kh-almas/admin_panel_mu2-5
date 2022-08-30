<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\taskCategoryStoreApiRequest;
use App\Http\Resources\api\v1\taskCategoryApiResourch;
use App\Models\Taskcategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class taskCategoryApiController extends Controller
{
    public function index()
    {
        //get user id by query parameter
        $userId = request('user');
        $data = Taskcategory::where('user_id', $userId)->paginate('15');
        return taskCategoryApiResourch::collection($data);
    }

    public function store(taskCategoryStoreApiRequest $request)
    {
        DB::transaction(function() use ($request) {
            $data = Taskcategory::create([
                'name' => $request->name,
                'description' => $request->description,
                'user_id' => $request->user_id,
            ]);
            return $data;
        });


        if($data){
            return new taskCategoryApiResourch($data);
        }else{
            return 'data is not stored';
        }
    }

    public function show(Taskcategory $category)
    {
        //get user id by query parameter
        $userId = request('user');

        if($userId == $category->user_id)
        {
            return new taskCategoryApiResourch($category);
        }else{
            return new JsonResponse([
                'errors' => 'You are not authorize to update this item',
            ],400);
        }
    }

    public function update(Request $request, Taskcategory $category)
    {
        $userId = request('user');
        if($userId == $category->user_id)
        {
            $data = $category->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
            if($data)
            {
                return new taskCategoryApiResourch($data);
            }else{
                return 'data is not updated';
            }
        }else{
            return new JsonResponse([
                'errors' => 'You are not authorize to update this item',
            ],400);
        }

    }

    public function destroy(Taskcategory $category)
    {
        $userId = request('user');
        if($userId == $category->user_id)
        {
            $data = $category->delete();
            if($data)
            {
                return new JsonResponse([
                    'errors' => 'Could not delete this item',
                ],400);
            }else{
                return new JsonResponse([
                    'data' => 'success',
                ],200);
            }
        }else{
            return new JsonResponse([
                'errors' => 'You are not authorize to update this item',
            ],400);
        }
    }
}
