@extends('layouts.front')

@section('content')

<div class="container-fluid">

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        <div class="card">
            <div class="card-header">รายงาน</div>


          <div class="card-body">
            <div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>เงินเดือน</th>
                            <th>รายการหัก</th>
                            <th>จ่ายจริง</th>
                            <th>จำนวนรายการ</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>

                </table>
            </div>
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



$('body').on('click', '.btn-delete', function (e) {

var id = $(this).attr('data-id');
deleteConf(id);
});

function deleteConf(id) {
swal({
    title: "คุณต้องการลบจริงหรือไม่?",
    text: "ข้อมูลไม่สามารถกู้คืนได้!",
    icon: "warning",
    buttons: [
        'ยกเลิกลบรายการ',
        'ลบรายการ'
    ],
    dangerMode: true,
}).then(function(isConfirm) {
    if (isConfirm) {
        swal({
            title: 'ลบรายการ!',
            text: 'ลบรายการเรียบร้อย',
            icon: 'success'
        }).then(function() {
            var token = '{{ csrf_token() }}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                dataType: 'json',
                type:'DELETE',
                data:{id:id,'_token': token},
                url: '/managesalary/' + id,

                success: function(datas){
                    location.reload();
                }
            })


        });
    } else {
        swal("ยกเลิก", "ยกเลิกรายการ", "error");
    }
});
} // error form show text

    </script>

@endsection
