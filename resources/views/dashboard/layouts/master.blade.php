<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.layouts.head')

    @yield('css')

</head>
<body>
<!-- BEGIN #app -->
<div id="app" class="app">

    @include('dashboard.layouts.header')


    @include('dashboard.layouts.sidebar')


    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN row -->
        <div class="row">
            @yield('content')
        </div>
        <!-- END row -->
    </div>
    <!-- END #content -->

    <!-- BEGIN btn-scroll-top -->
    <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!-- END btn-scroll-top -->
</div>
<!-- END #app -->

@include('dashboard.layouts.foot')
<script>
    @@yield('script')
</script>
</body>
</html>
