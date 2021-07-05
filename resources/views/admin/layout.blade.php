<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Розпахнуті крила - Адмін</title>
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/images/chicken.png">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="/admin/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{route('main')}}">Головна</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    {{--<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">--}}
        {{--<div class="input-group">--}}
            {{--<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />--}}
            {{--<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>--}}
        {{--</div>--}}
    {{--</form>--}}
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 pull-right">
        <a  href="{{route('logout')}}" title="Вийти"><i class="fas fa-sign-out-alt"></i></i></a>

    </ul>
</nav>
<div id="layoutSidenav">
    @include('admin.sidebar')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">@yield('page_name')</h1>
                @yield('content')
            </div>

        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/admin/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="/admin/assets/demo/chart-area-demo.js"></script>
<script src="/admin/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="/admin/js/datatables-simple-demo.js"></script>
<script>
    CKEDITOR.replace( 'content',{
        height:300, filebrowserUploadUrl:'{{route("ckeditor-upload",["_token"=>csrf_token()])}}',
        filebrowserUploadMethod:'form'
    } );

    CKEDITOR.replace( 'about_us__our_activity__description'
        {{--,{--}}
        {{--height:300, filebrowserUploadUrl:'{{route("ckeditor-upload",["_token"=>csrf_token()])}}',--}}
        {{--filebrowserUploadMethod:'form'--}}
    {{--} --}}
    );
</script>
</body>
</html>
