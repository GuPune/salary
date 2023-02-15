@extends('layouts.front')

@section('content')

<div class="container-fluid">

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Check the following errors :(  {{$errors->first()}}
        </div>
        @endif
        <div class="card">
            <div class="card-header">จัดการข้อมูลพนักงาน</div>

          <div class="card-body">
            <form method="POST"  action="{{ route('employee.store') }}" >
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="inputAddress">รหัสพนักงาน</label>
                  <input type="text" class="form-control" id="code" name="code" placeholder="รหัสพนักงาน" required>
                </div>
                <div class="form-group">
                    <label for="inputAddress">รหัสประจำตัวประชาชน</label>
                    <input type="text" class="form-control" id="card" name="card" placeholder="รหัสประจำตัวประชาชน" required >
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">เลขบัญชี</label>
                    <input type="text" class="form-control" id="credit" name="credit" placeholder="เลขบัญชี" required>
                  </div>
                <div class="form-group">
                  <label for="inputAddress2">ธนาคาร</label>
                  <input type="text" class="form-control" id="bank" name="bank" placeholder="ธนาคาร" required>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">ชื่อ</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputZip">นามสกุล</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">บันทึก</button>
              </form>
          </div>
        </div>
      </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  <script>

$(document).ready(function () {
    $('#example').DataTable();
});


function validateAlphapass(e){

    if (isNaN(e.value)) {
    e.value = e.value.replace(/[^\d]/g,'');
}
}


    </script>

@endsection
