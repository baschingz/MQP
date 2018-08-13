@extends('main')

@section('body')
<div ng-controller="HistoryController">
    <div class="container">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>แสดงประวัติการใช้งาน</h2>
            </div>
            <div class="panel-body">
            <% xxxs %>      
                <div class="form-group w30">
                <select ng-change="select()" ng-model='selection' class="form-control form-control-sm">
                    <option value="" disabled selected hidden>เลือกวันเวลาย้อนหลัง</option>
                    <option ng-repeat="item in items" value='<% item.date %>' ><% item.date %></option>
                </select>
                </div>
            </div>
        </div>
    </div>
    <div>
    <!-- ส่วนที่เอาออกมาแสดงผลโยน object มา จะเอาออกมาแบบไหนบอกกู -->
    <div>
        <table class="table table-bordered" id="historyTable">
            <thead>
                <tr class="noExl">
                    <th>id</th> 
                    <th>รอบ(คิว)</th> 
                    <th>เตียง</th> 
                    <th>ชื่อ</th> 
                    <th>เวลา</th> 
                    <th>ผู้ออกคิว</th>
                </tr>
            </thead>
            <tr ng-repeat="history in hisories " >
                <td class="noExl"><% history.id %></td>
                <td><% history.queueNum %> </td>
                <td><% history.beds %> </td>
                <td><% history.name %> </td>
                <td><% history.created_at %> </td>
                <td><% history.userId %></td>
            </tr>
        </table>
    </div>
    </div>
    <div  class="right_p">
        <button type="button" ng-click="load()" id="button" class="btn btn-primary right_p">download</button>
    </div>  
</div>

@endsection

@section('JS')
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script src="{{asset('js/HistoryQueueJS/HistoryQueueJS.js')}}"></script> 
@endsection