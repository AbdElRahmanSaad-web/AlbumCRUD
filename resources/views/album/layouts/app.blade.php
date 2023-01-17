@if (app()->getLocale() == 'en')
    <!doctype html>
    <html lang="en">

    <head>
        <base href="/public">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--favicon-->
        <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
        <!--plugins-->

        <link href="assets/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
        <link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />

        <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
        <link href="assets/plugins/notifications/css/lobibox.min.css" rel="stylesheet" />
        <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
        <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
        <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
        <!-- loader-->
        <link href="assets/css/pace.min.css" rel="stylesheet" />
        <script src="assets/js/pace.min.js"></script>
        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link href="assets/css/app.css" rel="stylesheet">
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Theme Style CSS -->
        <link rel="stylesheet" href="assets/css/dark-theme.css" />
        <link rel="stylesheet" href="assets/css/semi-dark.css" />
        <link rel="stylesheet" href="assets/css/header-colors.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    @else
        <!doctype html>
        <html lang="ar" dir="rtl">

        <head>
            <base href="/public">
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!--favicon-->
            <link rel="icon" href="rtl/assets/images/favicon-32x32.png" type="image/png" />
            <!--plugins-->

            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!--favicon-->
            <link rel="icon" href="rtl/assets/images/favicon-32x32.png" type="image/png" />
            <!--plugins-->
            <link href="rtl/assets/plugins/notifications/css/lobibox.min.css" rel="stylesheet" />
            <link href="rtl/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
            <link href="rtl/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
            <link href="rtl/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
            <link href="rtl/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
            <!-- loader-->
            <link href="rtl/assets/css/pace.min.css" rel="stylesheet" />
            <script src="rtl/assets/js/pace.min.js"></script>
            <!-- Bootstrap CSS -->
            <link href="rtl/assets/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
            <link href="rtl/assets/css/app.css" rel="stylesheet">
            <link href="rtl/assets/css/icons.css" rel="stylesheet">
            <!-- Theme Style CSS -->
            <link rel="stylesheet" href="rtl/assets/css/dark-theme.css" />
            <link rel="stylesheet" href="rtl/assets/css/semi-dark.css" />
            <link rel="stylesheet" href="rtl/assets/css/header-colors.css" />
            <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
@endif
<title>Amdash - Bootstrap 5 Admin Template</title>

<style>
    #previewImage1,
    #previewImage2 {
        display: block;
        max-width: 200px;
        min-height: 150px;
        max-height: 200px;
        margin: 0 auto;
        padding-top: 10px;
    }
</style>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        @include('include.sidebar')

        @include('include.header')


        @yield('content')
    </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
    </div>
    <!--end wrapper-->


    @include('include.switcher')
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
    <!--notification js -->
    <script src="assets/plugins/notifications/js/lobibox.min.js"></script>
    <script src="assets/plugins/notifications/js/notifications.min.js"></script>
    <script src="assets/js/index.js"></script>
    <!--app JS-->
    <script src="assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.fileupload.js"></scri>
    <script src="assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
    <script src="assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
    <script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    @yield('scripts')



    <script>
        $(document).ready(function() {
			$('#example').DataTable();
		  } );
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                processing: true,
            });

            table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>

    <script src="assets/js/app.js"></script>


</body>

</html>
