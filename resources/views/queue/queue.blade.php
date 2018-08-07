@extends('main')
@section('body')
<div ng-controller = "queueController">
    <h1>Test!!</h1>
</div>
@endsection

@section('JS')
<script src="{{asset('js/queue/queue.js')}}"></script>
@endsection
