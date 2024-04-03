<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function admin_task_view(){
        $tasks = Task::all();
        return view('admin.task_view', compact('tasks'));
    }

    public function task_add(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $url_slug = strtolower($request->name);
        $label_slug= preg_replace('/\s+/', '-', $url_slug);
        $task = new Task;
        $task->name = $request->name;
        $task->task_url = $label_slug;
        $task->save();
        $notification = array(
            'message' => 'Task Successfully saved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function task_delete($id){
        Task::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Task Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function task_edit($id){
        $task = Task::findOrFail($id);
        $tasks = Task::all();
        return view('admin.task_edit', compact('task', 'tasks'));
    }



    public function task_update(Request $request, $id){
        $task_update = Task::findOrFail($id);
        $url_slug = strtolower($request->name);
        $label_slug= preg_replace('/\s+/', '-', $url_slug);
        $task_update->name = $request->name;
        $task_update->task_url = $label_slug;
        $task_update->save();
        $notification = array(
            'message' => 'Task Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.task.view')->with($notification);
    }
}
