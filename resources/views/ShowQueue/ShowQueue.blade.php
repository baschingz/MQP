@extends('main')

@section('body')
<div ng-controller='ShowQueue'>
<span id="time" class="time"></span><div class="dropdown show">
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    <select ng-change="select()" ng-model='selection' class="form-control form-control-sm">
        <option value="" disabled selected hidden>กรุณาเลือกรอบ</option>
        <option value="1" >รอบที่ 1</option>
        <option value="2">รอบที่ 2</option>
        <option value="3">รอบที่ 3</option>
        <option value="4">รอบที่ 4</option>
    </select>
    </div>
    <div class="col-sm-9">
    <span class="count">รอบที่ <% selection %></span> 
    </div>
  </div>
</div>
<div class="row">
<div class="col-lg-3 box" ng-repeat="dat in data">
    <div>เตียงที่ <% dat.beds %></div>
    <div><% dat.name %></div>
</div>
</div>
<div>
</div>
</div>
@endsection

@section('JS')
<script src="{{asset('js//ShowQueueJS/ShowQueueJS.js')}}"></script>    
@endsection
