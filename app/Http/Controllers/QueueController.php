<?php


namespace App\Http\Controllers;

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
}
