<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\taskUpdateRequest;
use App\Models\Task;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Gate;

class taskController extends Controller
{
    public function index()
    {
        Gate::allows('isAdmin') ? Response::allow() : abort(403);
        $task = Task::paginate(10);//where('user_id',auth()->id())->latest()->paginate(10);
//        $this->authorize('project_protector', [$project, $something]);
        return view('backend.page.task.list',compact('task'));
    }

    public function create()
    {
        $taskCategory = auth()->user()->taskCategorys;
        $task = auth()->user()->tasks()->get();
        return view('backend.page.task.create',compact('taskCategory','task'));
    }

    public function store(TaskRequest $request)
    {
        if ($request->category === 'Select a category'){
            return redirect()->back()->with('empty_category_errors','Please select a category');
        }
        if(!$request->important){
            $request->important = 0 ;
        }
        auth()->user()->tasks()->create([
            'taskCategory_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'important' => $request->important,
        ]);
        return redirect(route('dashboard.tasks.index'))->with('create_task','Task created successfully!');

    }

    public function show(Task $task)
    {
//        ddd($task);
        $response = Gate::inspect('view', $task);

        if ($response->allowed()) {
            return view('backend.page.task.view',compact('task'));
        } else {
            echo $response->message();
        }

//        $fsdg = Gate::allows('check_user', $task);
//        if ($fsdg) {
//            abort(403);
//        }
//        $this->allows('check_user', $task);
//        if ($task->can('view', $task)) {
//            abort(403);
//        }
    }

    public function edit(Task $task)
    {
        $taskCategory = auth()->user()->taskCategorys;
        return view('backend.page.task.update',compact('task','taskCategory'));
    }

    public function update(taskUpdateRequest $request,Task $task)
    {
        if(!$request->important){
            $request->important = 0 ;
        }
        $task->update([
            'taskCategory_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'important' => $request->important,
        ]);
        return redirect(route('dashboard.tasks.index'))->with('update_task','Task update successfully!');
    }

    public function importantTask(Request $request,Task $task)
    {
        if($request->isimportent == 1){
            $task->update([
                'important' => '0'
            ]);
            return back()->with('isImportent_task','Task remove from important');
        }elseif ($request->isimportent == 0){
            $task->update([
                'important' => '1'
            ]);
            return back()->with('isImportent_task','Task set in important');
        }
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return back()->with('delete_task','Task deleted');
    }
}
