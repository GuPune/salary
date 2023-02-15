@extends('layouts.front')

@section('content')

<section id="contact" class="contact">

@auth
@else
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>เข้าสู่ระบบ</h2>
      </div>


      @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

@if ($errors->any())
<div class="alert alert-danger">
Check the following errors :(  {{$errors->first()}}
</div>
@endif

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12">
            <form class="pt-3" method="POST" action="{{ route('login.custom') }}">
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">รหัสบัตรประจำตัวประชาชน</label>
                <input type="text" class="form-control" id="card" name="card" aria-describedby="emailHelp" placeholder="รหัสบัตรประจำตัวประชาชน" required>
              </div>

              <div class="form-group">
                <label class="my-1 d-flex align-items-center" style="font-size: 20px;" for="role"><i class="fa fa-lock" aria-hidden="true"></i>  รหัสผ่าน <span class="ml-auto"></span></label>
                <input id="password" type="password" style="border-radius: 10px;" class="form-control  @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="current-password" >

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <br>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>

      </div>

    </div>


@endauth
  </section><!-- End Contact Section -->

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css" rel="stylesheet">
