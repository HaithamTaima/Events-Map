<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title')</title>

@include('layouts.head')


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


    @include('layouts.main-headerbar')

    @include('layouts.main-sidebar')
    {{--هذا كارد الاحصائيات --}}

    <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
                <!-- Small boxes (Stat box) -->


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@include('layouts.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@stack('javascript')
@include('layouts.footer-scripts')

</body>
</html>
