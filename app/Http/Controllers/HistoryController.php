<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queue ; 
use Carbon\Carbon ; 
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    //
    public function index(){
        $histories = Queue::select(DB::raw('count(id) as queue, DATE(created_at) as date'))->orderBy('date','asc')->groupBy('date')->get();
        return $histories ; 
    }

    public function selectHistory($date){
        $histories = Queue::orderBy('created_at', 'asc')->whereDate('created_at', $date)->get();
        return $histories ;
    }
}
