<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\taskCategoryRequest;
use App\Models\Taskcategory;
use Illuminate\Http\Request;

class taskCategoryController extends Controller
{
    public function index()
    {
        $this->authorize('task_category');
        $taskCategory = Taskcategory::where('user_id', auth()->id())->latest()->paginate('10');
        return view('backend.page.task.category',compact('taskCategory'));
    }

    public function store(taskCategoryRequest $request)
    {
        $this->authorize('task_category');
        auth()->user()->taskCategorys()->create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return back()->with('create_category','Item created successfully!');
    }

    public function update(taskCategoryRequest $request, Taskcategory $category)
    {
        $this->authorize('task_category');
        if (!auth()->id() === $category->user_id)
        {
            abort('403');
        }
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return back()->with('category_update', 'Item update successfully!');
    }

    public function destroy(Taskcategory $category)
    {
        $this->authorize('task_category');
        if (!auth()->id() === $category->user_id)
        {
            abort('403');
        }
        foreach ($category->tasks as $tasks){
            $tasks->delete();
        }
        $category->delete();
        return back()->with('category_delete', 'Item successfully deleted!');
    }
}
