<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Presento<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">

        @auth


        @if (auth()->user()->is_admin == '1')
        <ul>
            <li><a class="nav-link scrollto active" href="/">หน้าแรก</a></li>
            <li><a class="nav-link scrollto" href="/employee">จัดการข้อมูลพนักงาน</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">จัดการเงินเดือน <span class="caret"></span></a>
                 <ul class="dropdown-menu" role="menu">
                    <li><a href="/managesaraly">จัดการเงินเดือน</a></li>
                    <li><a href="/report">รายงานสรุป</a></li>
                 </ul>
             </li>

            <li><a class="nav-link scrollto " href="/saraly">เงินเดือน</a></li>
            <li><a class="nav-link scrollto" href="/employee">คู่มือการใช้งาน</a></li>
            <li><a class="nav-link scrollto" href="/logout">ออกจากระบบ</a></li>
        </ul>

        @else

        <ul>
            <li><a class="nav-link scrollto active" href="/">หน้าแรก</a></li>
            <li><a class="nav-link scrollto " href="/saraly">เงินเดือน</a></li>
            <li><a class="nav-link scrollto" href="/logout">ออกจากระบบ</a></li>
        </ul>

        @endif

      @endauth

      @guest
      <ul>
        <li><a class="nav-link scrollto active" href="/">หน้าแรก</a></li>
        <li><a class="nav-link scrollto" href="/doc">คู่มือการใช้งาน</a></li>

      </ul>

      @endguest

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->
