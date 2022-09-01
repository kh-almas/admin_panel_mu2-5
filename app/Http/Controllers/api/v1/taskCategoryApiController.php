<?php

namespace App\Http\Controllers\api\v1;

use App\Exceptions\global\generalException;
use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\taskCategoryStoreApiRequest;
use App\Http\Requests\api\v1\taskCategoryUpdateApiRequest;
use App\Http\Resources\api\v1\taskCategoryApiResourch;
use App\Models\Taskcategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class taskCategoryApiController extends Controller
{
    public function index()
    {
        //get user id and item by query parameter
        $userId = request('user');
        $item = request('item') ?? 15;
        $data = Taskcategory::where('user_id', $userId)->paginate($item);
        return taskCategoryApiResourch::collection($data);
    }

    public function store(taskCategoryStoreApiRequest $request)
    {
        DB::transaction(function() use ($request) {
            $data = Taskcategory::create([
                'name' => data_get($request, 'name', 'this is title'),
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

//        throw_if($userId != $category->user_id,generalException::class, 'You are not authorize to update this item');

        if($userId == $category->user_id)
        {
            return new taskCategoryApiResourch($category);
        }else{
            throw new generalException('You are not authorize to show this item',300);
        }
    }

    public function update(taskCategoryUpdateApiRequest $request, Taskcategory $category)
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
            throw new generalException('You are not authorize to update this item',300);
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
            throw new generalException('You are not authorize to delete this item',300);
        }
    }
}
