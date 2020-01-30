<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Task;
use App\Status;
use App\Privacy;
use App\Priority;
use Auth;
use Session;
class TaskController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $task = new Task();
        $getAllTask = $task->getAllTask();
        return view('pages.task.list')->with("tasks", $getAllTask);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $statuses= Status::pluck("name","id");
        $priority= Priority::pluck("name","id");
        return view('pages.task.create')->with("priorties",$priority)
        ->with("statuses",$statuses);
    }

    //400.000

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $start_end_task = explode(" - ", $request->get("start_end_task"));

        $task = new Task();
        $task->subject = $request->get("subject");
        $task->priority = $request->get("priority");
        $task->status_id = $request->get("status");
        $task->privacy_id = $request->get("privacy_id");

        $task->description = $request->get("description");
        $task->start_date = date("Y-m-d H:i:s", strtotime($start_end_task[0]));
        $task->end_date = date("Y-m-d H:i:s", strtotime($start_end_task[1]));
        $task->user_id = Auth::id();
        $task->save();
                Session::flash('message', 'Se ha creado con Éxito');

        return redirect()->to("tasks");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        dd("ssss");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $task = Task::find($id);
        $statuses= Status::pluck("name","id");
        $priority= Priority::pluck("name","id");
        $privacies= Privacy::pluck("name","id");

        return view('pages.task.edit')
        ->with("privacies",$privacies)
        ->with("priorties",$priority)
        ->with("statuses",$statuses)
                ->with("task", $task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $start_end_task = explode(" - ", $request->get("start_end_task"));

        $task = Task::find($id);
        $task->subject = $request->get("subject");
        $task->priority = $request->get("priority");
        $task->status_id = $request->get("status");
        $task->privacy_id = $request->get("privacy_id");
        $task->description = $request->get("description");
        $task->start_date = date("Y-m-d H:i:s", strtotime($start_end_task[0]));
        $task->end_date = date("Y-m-d H:i:s", strtotime($start_end_task[1]));
        $task->save();
                Session::flash('message', 'Se ha actualizado con Éxito');

        return redirect()->to("tasks");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        // delete
        $nerd = Task::find($id);
        if($nerd){
            Session::flash('message', 'Se ha borrado con Éxito');
            $nerd->delete();
        }else{
            Session::flash('error', 'Ha ocurrido un problema intenta de nuevo');
        }

        // redirect
        return redirect()->to("tasks");
    }

}
