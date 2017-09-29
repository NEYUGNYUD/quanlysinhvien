<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
@include('admin.elements.body.navigation.nav')

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        @include('admin.elements.body.page_name.page_name')

        <!--Notification-->
        @include('success_notification.success')

        <!-- content -->
        @yield('content')

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('admin.elements.body.footer.footer')
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- logout Modal-->
    @include('admin.elements.body.process_logout.process_logout')
    <!-- js-->
    @include('admin.elements.body.js.js')
</div>
</body>