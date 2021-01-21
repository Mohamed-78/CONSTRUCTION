<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{page_title($title) ?? ''}}</title>
    @stack('style.hearder')
</head>
<body class="@yield('body')">

    @include('admin.nav.header')
    @include('admin.nav.seidebar')
    <main class="app-content">
    @yield('content')
    </main>

    <script src="{{URL::asset('/admin/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL::asset('/admin/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/admin/js/main.js')}}"></script>
    <script src="{{URL::asset('/admin/js/plugins/pace.min.js')}}"></script>
    <script src="{{URL::asset('/admin/js/plugins/chart.js')}}"></script>
    @stack('script.footer')
    {{-- <script>

    $(document).ready(function () {
        $('.site-menubar-footer').hide();
    });

    $('.resume').summernote({
      focus: true
    });

    $('.description').summernote({
      focus: true
    });
    
</script> --}}
</body>
</html>
