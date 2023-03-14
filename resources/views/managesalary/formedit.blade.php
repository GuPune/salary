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
            <div class="card-header">แก้ไขข้อมูลเงินเดือน</div>

          <div class="card-body">
            <form method="POST"  action="{{ route('managesalary.update',$salary->id) }}" >
                {{ method_field('PUT') }}
                    {{ csrf_field() }}
                {{-- <div class="form-group">
                  <label for="inputAddress">รหัสพนักงาน</label>
                  <input type="text" class="form-control" id="code" name="code" placeholder="รหัสพนักงาน" required>
                </div> --}}

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">รหัสพนักงาน</label>
                    <div class="col-sm-10">
                        <label for="staticEmail" class="col-sm-12 col-form-label-lg"> {{$employ->code}}  </label>
                    </div>
                 </div>

                 <div class="form-group row">
                    <label for="staticEmail" class="col-sm-12 col-form-label-lg"> วันทำงาน </label>
                  </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">วันทำงานปกติ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="work_day" name="work_day" placeholder="วันทำงานปกติ" required value="{{$salary->work_day}}">
                    </div>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">วันทำงานวันหยุด</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="work_ot_day" name="work_ot_day" placeholder="วันทำงานวันหยุด" required value="{{$salary->work_ot_day}}">
                    </div>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">โอที</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="work_ot_hour" name="work_ot_hour" placeholder="โอที"  required value="{{$salary->work_ot_hour}}">
                    </div>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ฐานเงินเดือน</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="base_salary" name="base_salary" placeholder="ฐานเงินเดือน" value="{{$salary->base_salary}}" required oninput="validateNumber(event,'base_salary');" >
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ค่าตำแหน่ง</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="base_salary_position" name="base_salary_position" placeholder="ค่าตำแหน่ง" value="{{$salary->base_salary_position}}" required oninput="validateNumber(event,'base_salary_position');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">เงินพิเศษ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="extra_money" name="extra_money" placeholder="เงินพิเศษ" value="{{$salary->extra_money}}" required  oninput="validateNumber(event,'extra_money');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ทำงานวันหยุด</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="ot" name="ot" placeholder="ทำงานวันหยุด" value="{{$salary->ot}}" required oninput="validateNumber(event,'ot');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ค่าคอม</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="com" name="com" placeholder="ค่าคอม" value="{{$salary->com}}" required oninput="validateNumber(event,'com');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ค่าน้ำมัน</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="oil" name="oil" placeholder="ค่าน้ำมัน"  value="{{$salary->oil}}" required oninput="validateNumber(event,'oil');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">รวมเงินรับ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="base_month" name="base_month" placeholder="รวมเงินรับ" value="{{$salary->base_month}}" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" readonly>
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>




                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-12 col-form-label-lg"> เงินหัก </label>
                  </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ขาด</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="missing" name="missing" placeholder="ขาด" value="{{$salary->missing}}" required oninput="validateNumberDif(event,'missing');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ลา</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="leave" name="leave" placeholder="ลา" value="{{$salary->leave}}" required oninput="validateNumberDif(event,'leave');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">มาสาย</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="late" name="late" placeholder="มาสาย" value="{{$salary->late}}" required  oninput="validateNumberDif(event,'late');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>

                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">เบิกล่วงหน้า</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="advance" name="advance" placeholder="เบิกล่วงหน้า"  value="{{$salary->advance}}" required oninput="validateNumberDif(event,'advance');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ค่าปรับ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="fine" name="fine" placeholder="ค่าปรับ"  value="{{$salary->fine}}" required oninput="validateNumberDif(event,'fine');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>


                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ประกันสังคม</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="sso" name="sso" placeholder="ประกันสังคม" value="{{$salary->sso}}" required oninput="validateNumberDif(event,'sso');">
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>




                 <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">รวมยอดหัก</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control-plaintext" id="total_deduction"  name="total_deduction" value="{{$salary->total_deduction}}" required oninput="validateNumberDif(event,'total_deduction');">
                    </div>

                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">เงินได้สุทธิ</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="total_money" name="total_money" placeholder="เงินได้สุทธิ" value="{{$salary->total_money}}" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" readonly>
                    </div>
                    <label for="staticEmail" class="col-sm-2 col-form-label">บาท</label>
                 </div>





                 <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">วันที่ออกสลิป</label>

                    <div class="col-sm-8">
                        <input type="text" format-value="yyyy-MM-ddTHH:mm" class="form-control datetime" id="day_slip" name="day_slip"  required value="{{$salary->day_slip}}" readonly>
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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

  <script>

$(document).ready(function () {
    $('#example').DataTable();
});


$('.datetime').datetimepicker({
    format: 'YYYY-MM-DD',
    locale: 'en',
    sideBySide: true,
    icons: {
      up: 'fas fa-chevron-up',
      down: 'fas fa-chevron-down',
      previous: 'fas fa-chevron-left',
      next: 'fas fa-chevron-right'
    }
  })

var path = "{{ route('autocomplete') }}";

    $('#code').select2({
        placeholder: 'Select an user',
        ajax: {
          url: path,
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            console.log(data);
            return {
              results:  $.map(data, function (item) {
                    return {
                        text: item.fname + '-' + item.lname,
                        id: item.id
                    }
                })
            };

          },
          cache: true
        }
      });




function validateNumber(e,elementId){
    var ss = e.target.selectionStart;
    var se = e.target.selectionEnd;
    var textInput = document.getElementById(elementId).value;
    textInput = textInput.replace(/[^0-9]/g, "");
    document.getElementById(elementId).value = textInput;
    Calculate();
    Calculatetotal();
}

function validateNumberDif(e,elementId){
    var ss = e.target.selectionStart;
    var se = e.target.selectionEnd;
    var textInput = document.getElementById(elementId).value;
    textInput = textInput.replace(/[^0-9]/g, "");
    document.getElementById(elementId).value = textInput;
    Calculatedif();
    Calculatetotal();
}

function Calculatetotal(){


    var base_month = document.getElementById("base_month").value
    var total_deduction = document.getElementById("total_deduction").value



    var total_money = document.getElementById("total_money").value = parseInt(base_month) - parseInt(total_deduction)

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

function Calculatedif(){


    var missing = document.getElementById("missing").value;
    var leave = document.getElementById("leave").value;
    var late = document.getElementById("late").value;
    var advance = document.getElementById("advance").value;
    var fine = document.getElementById("fine").value;
    var sso = document.getElementById("sso").value;


    if(missing == ''){
        var missing = parseInt(0);
    }
    if(leave == ''){
        var leave = parseInt(0);
    }
    if(late == ''){
        var late = parseInt(0);
    }
    if(advance == ''){
        var advance = parseInt(0);
    }
    if(fine == ''){
        var fine = parseInt(0);
    }
    if(sso == ''){
        var sso = parseInt(0);
    }
    var total_deduction = document.getElementById("total_deduction").value = parseInt(missing) + parseInt(leave) + parseInt(late) + parseInt(advance) + parseInt(fine) + parseInt(sso);


}



    </script>

@endsection
