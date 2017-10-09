<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#falcuty" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Khoa toán</span>
        </a>
        <ul class="sidenav-second-level collapse" id="falcuty">
            <li>
                <a href="{{ route('faculties.create') }}">Khởi tạo thông tin khoa</a>
            </li>
            <li>
                <a href="{{ route('faculties.index') }}">Thông tin khoa</a>
            </li>
        </ul>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#classes" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Lớp học</span>
        </a>
        <ul class="sidenav-second-level collapse" id="classes">
            <li>
                <a href="{{ route('classes.index') }}">Danh sách lớp học</a>
            </li>
            <li>
                <a href="{{ route('classes.create') }}">Thêm mới lớp học</a>
            </li>
        </ul>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#year" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Năm học</span>
        </a>
        <ul class="sidenav-second-level collapse" id="year">
            <li>
                <a href="{{ route('years.index') }}">Danh sách năm học</a>
            </li>
            <li>
                <a href="{{ route('years.create') }}">Thêm năm học</a>
            </li>
        </ul>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Quyền Admin</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
                <a href="{{ route('levels.index') }}">Danh sách quyền</a>
            </li>
            <li>
                <a href="{{ route('levels.create') }}">Tạo quyền</a>
            </li>
        </ul>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#admin-account" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Account Admin</span>
        </a>
        <ul class="sidenav-second-level collapse" id="admin-account">
            <li>
                <a href="{{ route('accounts.index') }}">Danh sách account admin</a>
            </li>
            <li>
                <a href="{{ route('accounts.create') }}">Tạo account admin</a>
            </li>
        </ul>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti2">
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
        </a>
    </li>
</ul>
