@extends('main')

@section('body')
<div ng-controller="HistoryController">
    <div class="container">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>แสดงประวัติการใช้งาน</h2>
            </div>
            <div class="panel-body">
                <div class="form-group w30">
                <select ng-change="select()" ng-model='selection' class="form-control form-control-sm">
                    <option value="" disabled selected hidden>เลือกวันเวลาย้อนหลัง</option>
                    <option value=""  ></option>
                    
                </select>
                </div>
            </div>
        </div>
    </div>
    <div>
    <!-- ส่วนที่เอาออกมาแสดงผลโยน object มา จะเอาออกมาแบบไหนบอกกู -->
    </div>
    <div  class="right_p">
        <button type="button" ng-click="load()" class="btn btn-primary right_p">download</button>
    </div>  
</div>

@endsection

@section('JS')
<script src="{{asset('js/HistoryQueueJS/HistoryQueueJS.js')}}"></script> 
@endsection