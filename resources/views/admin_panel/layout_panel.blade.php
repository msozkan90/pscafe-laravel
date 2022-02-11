<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Paneli - AraPas</title>
    <meta name="description" content="">
    <meta name="author" content="Arapas">
    <!--
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('admin_panel/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_panel/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_panel/assets/css/templatemo-style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('style')
</head>
<body style="background-color: whitesmoke;">
<!-- Left column -->
<div class="templatemo-flex-row" style="">
    <div class="templatemo-sidebar" style="width: 330px!important;background-color: #19191B;min-height: 930px" >
        <header class="templatemo-site-header"  style="font-weight: bolder;text-align: center">
            <h1 style="font-weight: bolder;text-align: center"> Admİn Panelİ</h1>
        </header>
        <div class="profile-photo-container" style="font-weight: bolder;text-align: center">
            <img style="margin-left: 90px" src="{{asset('images/ea4625_8f05fbac8ff24001bc34cc0143cc77aa_mv2.jpg')}}" alt="Profile Photo" class="img-responsive">

        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search" style="border: 1px solid white;border-radius: 5px">
            <div class="input-group">
                <button type="submit" class="fa fa-search"></button>
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
            <ul class="but-list">
                <li name="/admin/panel" dataset="/admin/panel"><a href="{{route('admin.admin_panel.index_admin')}}"   class="side-menu active"><i class="fa fa-newspaper-o fa-fw"></i>DUyurular</a></li>
                <li name="/admin/mail" dataset="/admin/panel"><a href="{{route('admin.mail.dashboard')}}" class="side-menu "><i class="fa fa-envelope fa-fw"></i>Maİller</a></li>
                <li name="/admin/prices" dataset="/admin/panel"><a href="{{route('admin.prices.dashboard')}}" class="side-menu "><i class="fa fa-money fa-fw"></i>Fİyatlar</a></li>
                <li name="/admin/sss" dataset="/admin/panel"><a href="{{route('admin.sss.dashboard')}}" class="side-menu "><i class="fa fa-question fa-fw"></i>S.S.S</a></li>
                <li name="/admin/users" dataset="/admin/panel"><a href="{{route('admin.users.dashboard')}}" class="side-menu "><i class="fa fa-users fa-fw"></i>Kullanıcılar</a></li>

            </ul>
        </nav>
    </div>
    <!-- Main content -->
    <div style="width: 100%;">
    @yield('content')
    </div>
</div>

<!-- JS -->
@yield('script')
<script src="{{asset('admin_panel/assets/js/jquery-1.11.2.min.js')}}"></script>      <!-- jQuery -->
<script src="{{asset('admin_panel/assets/js/jquery-migrate-1.2.1.min.js')}}"></script> <!--  jQuery Migrate Plugin -->
<script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->

<script type="text/javascript" src="{{asset('admin_panel/js/templatemo-script.js')}}"></script>      <!-- Templatemo Script -->
<script>





</script>
</body>
</html>
