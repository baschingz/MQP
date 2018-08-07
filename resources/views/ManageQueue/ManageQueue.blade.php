@extends('main')

@section('body')
<div class="container">

<div class="panel panel-default">
  <div class="panel-heading">
  <h2>การจัดการคิวของคนไข้</h2>
  </div>
  <div class="panel-body">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">ชื่อ-นามสกุล</label>
    <div class="col-sm-4">
      <input type="tesxt" class="form-control"  placeholder="ชื่อ-นามสกุล">
    </div>
    <div class="col-sm-2">
    <select  class="form-control">
    <option value="" disabled selected hidden>กรุณาเลือก</option>
      </select>
    </div>
    <div class="col-sm-2">
    <select  class="form-control">
    <option value="" disabled selected hidden>กรุณาเลือก</option>
      </select>
    </div>
    <div class="col-sm-1">
    <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
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

@endsection
