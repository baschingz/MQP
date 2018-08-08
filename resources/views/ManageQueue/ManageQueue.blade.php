@extends('main')

@section('body')
<div class="container">

<div class="panel panel-default">
  <div class="panel-heading">
  <h2>การจัดการคิวของคนไข้</h2>
  </div>
  <div class="panel-body" ng-controller='ManageQueueController'>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">ชื่อ-นามสกุล</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" ng-model="form.name"  placeholder="ชื่อ-นามสกุล">
    </div>
    <div class="col-sm-2">
    <select  class="form-control" ng-model="form.bed">
    <option value="" disabled selected hidden>เลือกเตียง</option>
    <option ng-repeat="bed in beds"><% bed.id %></option>
      </select>
    </div>
    <div class="col-sm-2">
    <select  class="form-control" ng-model="form.queue">
    <option value="" disabled selected hidden>เลือกคิว</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
      </select>
    </div>
    <div class="col-sm-1">
    <button type="submit" class="btn btn-primary" ng-click="sendData(form)">เพิ่มข้อมูล</button>
    </div>
  </div>
  </div>
</div>

<div>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th></th>  
        </tr>
</thead>
    </table>
</div>


</div>
@endsection

@section('JS')
<script src="{{asset('js/ManageQueueJS/ManageQueueJS.js')}}"></script>
@endsection
