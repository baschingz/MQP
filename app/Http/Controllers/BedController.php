<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bed ; 

class BedController extends Controller
{
    //
    public function index($id = null) {
        if($id == null){
            return Bed::orderBy('id','asc')->get();
        } else {
            return $this->show($id);
        }
        
        return response()->json(['success'=>'Show all Bed OR something!!']);
    }

    public function bedEnable(){

        echo Bed::orderBy('id', 'asc')->where('status','0')->get();

    }

    public function show($id){
        return Bed::find($id);
    }
}
