<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('backend')}}/{{asset('backend')}}/assets/images/favicon-32x32.png" type="image/png"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <title> @yield('title') </title>


    <!--plugins-->
    <link href="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="{{asset('backend')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="{{asset('backend')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="{{asset('backend')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <!-- loader-->
    <link href="{{asset('backend')}}/assets/css/pace.min.css" rel="stylesheet"/>
    <script src="{{asset('backend')}}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="{{asset('backend')}}/assets/css/app.css" rel="stylesheet">
    <link href="{{asset('backend')}}/assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/dark-theme.css"/>
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/semi-dark.css"/>
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/header-colors.css"/>


    <link href="{{asset('backend')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>


    <link rel="stylesheet" href="{{asset('backend')}}/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/summernote/summernote-bs4.min.css">
    <link href="{{ asset('backend') }}/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />

    @stack('css')


</head>

<body>
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    @include('backend.layouts.partials.siteber')
    <!--end sidebar wrapper -->
    <!--start header -->
    @include('backend.layouts.partials.header')
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            @yield('content')
        </div>
    </div>

    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    @include('backend.layouts.partials.footer')
</div>
<!--end wrapper-->
<!--start switcher-->
@include('backend.layouts.partials.theme-customizer')
<!--end switcher-->
<!-- Bootstrap JS -->
<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="{{asset('backend')}}/assets/js/index.js"></script>
<!--app JS-->
<script src="{{asset('backend')}}/assets/js/app.js"></script>


<script src="{{asset('backend')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>


<!-- No image -->
<script src="{{asset('backend')}}/plugins/noimage/no-image.js"></script>

<!--Product Default image one -->
<script>
    $(document).ready(function () {
        $('#defaultImage').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showDefaultImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


<!-- Toastr -->
<script src="{{asset('backend')}}/plugins/toastr/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','info')}}"

    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
<!-- Toastr -->

<!-- Summernote -->
<script src="{{asset('backend')}}/plugins/summernote/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function () {
        $('.summernote').summernote();
    });
</script>


<!-- Sweetalert -->
<script src="{{asset('backend')}}/plugins/sweetalert/sweetalert2@9.js"></script>
<script src="{{asset('backend')}}/plugins/sweetalert/sweetalertjs.js"></script>


<script src="{{ asset('backend') }}/assets/plugins/select2/js/select2.min.js"></script>
<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>


@stack('js')


</body>

</html>
















