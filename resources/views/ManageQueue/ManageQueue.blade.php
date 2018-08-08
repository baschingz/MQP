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



</div>

<div>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>คิว / เตียง</th> 
            <th>เตียงที่ 1 </th> 
            <th>เตียงที่ 2 </th> 
            <th>เตียงที่ 3 </th> 
            <th>เตียงที่ 4 </th> 
            <th>เตียงที่ 5 </th> 
            <th>เตียงที่ 6 </th> 
            <th>เตียงที่ 7 </th> 
            <th>เตียงที่ 8 </th> 
            <th>เตียงที่ 9 </th> 
            <th>เตียงที่ 10 </th>  
            <th>เตียงที่ 11 </th> 
            <th>เตียงที่ 12 </th> 
            <th>เตียงที่ 13 </th> 
            <th>เตียงที่ 14 </th> 
            <th>เตียงที่ 15 </th> 
            <th>เตียงที่ 16 </th> 
        </tr>
        <tr>
            <td>รอบที่ 1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>รอบที่ 2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>รอบที่ 3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>รอบที่ 4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
</thead>
    </table>
</div>
@endsection

@section('JS')
<script src="{{asset('js/ManageQueueJS/ManageQueueJS.js')}}"></script>
@endsection
