<?php

namespace App\Http\Controllers\api\v1;

use App\Exceptions\global\generalException;
use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\taskStoreApiRequest;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\api\v1\taskApiResource;

class taskApiController extends Controller
{
    public function index()
    {
        $userId = request('user');
        $item = request('item') ?? 15;
        $data = Task::where('user_id', $userId)->paginate($item);
        return taskApiResource::collection($data);
    }

    public function store(taskStoreApiRequest $request)
    {
        DB::transaction(function () use ($request){
            $data = Task::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);
            $data->user()->sync($request->user_id);
            return $data;
        }):

        if($data){
            return new taskApiResource($data);
        }else{
            return 'data is not stored';
        }
    }

    public function show(Task $task)
    {
        $userId = request('user');

        if($userId == $task->user_id)
        {
            return new taskApiResource($category);
        }else{
            throw new generalException('You are not authorize to show this item',300);
        }
    }

    public function update(Request $request, Task $task)
    {
        $userId = request('user');
        if($userId == $task->user_id) {
            DB::transaction(function () use ($request) {
                $data = $task->update([
                    'name' => $request->name,
                    'description' => $request->description,
                ]);
                $data->user()->sync($request->user_id);
                return $data;
            }):

            if ($data) {
                return new taskApiResource($data);
            } else {
                return new JsonResponse([
                    'errors' => 'Could not update this item',
                ],400);
            }
        }else{
            throw new generalException('You are not authorize to update this item',300);
        }
    }

    public function destroy(Task $task)
    {
        $userId = request('user');
        if($userId == $task->user_id) {
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
            throw new generalException('You are not authorize to update this item',300);
        }
    }
}
