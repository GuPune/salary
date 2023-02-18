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
            <div class="card-header">เพิ่มข้อมูลเงินเดือน</div>

          <div class="card-body">
            <form method="POST"  action="{{ route('managesaraly.store') }}" >
              {{ csrf_field() }}
                {{-- <div class="form-group">
                  <label for="inputAddress">รหัสพนักงาน</label>
                  <input type="text" class="form-control" id="code" name="code" placeholder="รหัสพนักงาน" required>
                </div> --}}
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                  </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">รหัสพนักงาน</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="code" name="code" placeholder="รหัสพนักงาน" required>
                    </div>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ฐานเงินเดือน</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="base_salary" name="base_salary" placeholder="ฐานเงินเดือน" value="0" required oninput="validateNumber(event,'base_salary');" >
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ค่าตำแหน่ง</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="base_salary_position" name="base_salary_position" placeholder="ค่าตำแหน่ง" value="0" required oninput="validateNumber(event,'base_salary_position');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">เงินพิเศษ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="extra_money" name="extra_money" placeholder="เงินพิเศษ" value="0" required  oninput="validateNumber(event,'extra_money');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ทำงานวันหยุด</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="ot" name="ot" placeholder="ทำงานวันหยุด" value="0" required oninput="validateNumber(event,'ot');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ค่าคอม</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="com" name="com" placeholder="ค่าคอม" value="0" required oninput="validateNumber(event,'com');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ค่าน้ำมัน</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="oil" name="oil" placeholder="ค่าน้ำมัน" value="0" required oninput="validateNumber(event,'oil');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">รวมเงินรับ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="base_month" name="base_month" placeholder="รวมเงินรับ" value="0" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" readonly>
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>




                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-12 col-form-label-lg"> เงินหัก </label>
                  </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ขาด</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="missing" name="missing" placeholder="ขาด" value="0" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ลา</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="leave" name="leave" placeholder="ลา" value="0" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">มาสาย</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="late" name="late" placeholder="มาสาย" value="0" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">เบิกล่วงหน้า</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="advance" name="advance" placeholder="เบิกล่วงหน้า" value="0" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ค่าปรับ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="fine" name="fine" placeholder="ค่าปรับ" value="0" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ประกันสังคม</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="sso" name="sso" placeholder="ประกันสังคม" value="0" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">มาสาย</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="total_deduction" name="total_deduction" placeholder="มาสาย" value="0" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>



                 <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">รวมยอดหัก</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="0" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
                    </div>

                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">เงินได้สุทธิ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="total_money" name="total_money" placeholder="เงินได้สุทธิ" value="0" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" readonly>
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
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



function validateNumber(e,elementId){
    var ss = e.target.selectionStart;
    var se = e.target.selectionEnd;
    var textInput = document.getElementById(elementId).value;
    textInput = textInput.replace(/[^0-9]/g, "");
    document.getElementById(elementId).value = textInput;



    Calculate();


}

function Calculate(){

    var base_salary = document.getElementById("base_salary").value;
    var base_salary_position = document.getElementById("base_salary_position").value;
    var extra_money = document.getElementById("extra_money").value;
    var ot = document.getElementById("ot").value;
    var com = document.getElementById("com").value;
    var oil = document.getElementById("oil").value;




    if(base_salary == ''){
        var base_salary = parseInt(0);
    }
    if(base_salary_position == ''){
        var base_salary_position = parseInt(0);
    }
    if(extra_money == ''){
        var extra_money = parseInt(0);
    }
    if(ot == ''){
        var ot = parseInt(0);
    }
    if(com == ''){
        var com = parseInt(0);
    }
    if(oil == ''){
        var oil = parseInt(0);
    }


    var base_month = document.getElementById("base_month").value = parseInt(base_salary) + parseInt(base_salary_position) + parseInt(extra_money) + parseInt(ot) + parseInt(com) + parseInt(oil);



}



    </script>

@endsection
