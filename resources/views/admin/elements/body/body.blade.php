<body>
<section class="body">
    <!-- start: header -->
    @include('admin.elements.body.header.header')
    <!-- end: header -->
    @include('admin.elements.body.sidebar-left.sidebar-left')
    @include('admin.elements.body.title-bar.title-bar')
    @yield('content')
</section>
    @include('admin.elements.body.sidebar-right.sidebar-right')
    @include('admin.elements.body.js-footer.js')
</body>