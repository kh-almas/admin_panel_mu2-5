<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\taskUpdateRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class taskController extends Controller
{
    public function index()
    {
        $this->authorize('task');
        $task = Task::where('user_id',auth()->id())->latest()->paginate(10);
        return view('backend.page.task.list',compact('task'));
    }

    public function create()
    {
        $this->authorize('task');
        $taskCategory = auth()->user()->taskCategorys;
        $task = auth()->user()->tasks()->get();
        return view('backend.page.task.create',compact('taskCategory','task'));
    }

    public function store(TaskRequest $request)
    {
        $this->authorize('task');
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
        $this->authorize('task');
        if(auth()->id() !== $task->user_id)
        {
            abort('403');
        }
        return view('backend.page.task.view',compact('task'));

    }

    public function edit(Task $task)
    {
        $this->authorize('task');
        if(auth()->id() !== $task->user_id)
        {
            abort('403');
        }
        $taskCategory = auth()->user()->taskCategorys;
        return view('backend.page.task.update',compact('task','taskCategory'));
    }

    public function update(taskUpdateRequest $request,Task $task)
    {
        $this->authorize('task');
        if(auth()->id() !== $task->user_id)
        {
            abort('403');
        }
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
        $this->authorize('task');
        if(auth()->id() !== $task->user_id)
        {
            abort('403');
        }
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
        $this->authorize('task');
        if(auth()->id() !== $task->user_id)
        {
            abort('403');
        }
        $task->delete();
        return back()->with('delete_task','Task deleted');
    }
}
