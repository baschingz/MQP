@extends('main')

@section('body')
<div ng-controller='ShowQueue'>
<span id="time" class="time"></span>
<span class="count">รอบที่ 1</span>
<div class="row">
<div class="col-lg-3 box">
    <div>เตียงที่ </div>
    <div></div>
</div>
</div>
</div>
@endsection

@section('JS')
<script src="{{asset('js//ShowQueueJS/ShowQueueJS.js')}}"></script>    
@endsection
