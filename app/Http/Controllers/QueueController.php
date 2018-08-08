<?php


namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Queue;
use Illuminate\Http\Request;
use App\Http\Requests ;
use App\Http\Controllers\Controller; 

class QueueController extends Controller
{
    //

    public function index($id = null) {
        if($id == null){
            return Queue::orderBy('id','asc')->get();
        } else {
            return $this->show($id);
        }

        return response()->json(['success'=>'Show all queue OR something!!']);
    }

    public function show($id){
        return Queue::find($id);
    }

    public function store(Request $request){

        $queue = new Queue ; 
        $queue->queueNum = $request->input('queue') ;  // increment of new day
        $queue->name = $request->input('name');
        $queue->beds = $request->input('bed');
        $queue->start = Carbon::now()->format('Y-m-d H:i:s'); 
        $queue->end = Carbon::now()->format('Y-m-d H:i:s');
        $queue->userId = 1 ; 
        $queue->save();

        return "Queue record successfully queue id : " . $queue->id ; 
    }
}
