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
            return Queue::orderBy('beds','asc')->whereDate('created_at', Carbon::today())->get();
        } else {
            return $this->show($id);
        }
        return response()->json(['success'=>'Show all queue OR something!!']);
    }

    public function show($id){
        return Queue::find($id);
    }

    public function showQueue($id){
        return Queue::orderBy('id', 'asc')->whereDate('created_at', Carbon::today())->where('queueNum',$id)->get();
    }

    public function store(Request $request){
    
        if (Queue::where('beds', '=', $request->input('bed'))->whereDate('created_at', Carbon::today())->where('queueNum', '=', $request->input('queue'))->exists()) {
            return "Beds  or Queue Exists !!!" ; 
        }

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

    public function showByRow($size){
        $new_new_queue = [] ; 
        for($i = 1 ; $i <= $size ; $i++){
            $queue = Queue::orderBy('queueNum', 'asc')->where('beds', $i)->whereDate('created_at', Carbon::today())->get();
            $queue = $this->getSubData($queue);
            $new_new_queue[$i] = $queue ; 
        }
        
        return $new_new_queue ;
    }

    function getSubData($queue){

        $new_queue = [] ; 
        $chk = false   ; 

        for ($i = 0 ; $i < 4 ; $i++){
            for( $j = 0 ; $j < sizeof($queue) ; $j++){

                if($queue[$j]["queueNum"] == $i+1){
                    $new_queue[$i] = $queue[$j] ; 
                    $chk = true ; 
                }
            }
            if($chk){
    
            }else {
                $new_queue[$i] = new Queue ; 
            }

            $chk = false ; 
        }
        return $new_queue ; 
    }
}
