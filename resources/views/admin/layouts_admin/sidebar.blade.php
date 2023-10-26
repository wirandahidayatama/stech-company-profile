@include('sweetalert::alert')

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Blog <i class="right fas fa-angle-left"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kategori</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-calendar"></i>
                    <p>
                        About
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Services
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Contacts
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Projects
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Users
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Saran
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('banner.index') }}" class="nav-link {{ Request::is('admin/banner*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-image"></i>
                    <p>
                        Banner
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>@yield('judul_halaman')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">@yield('judul')</a></li>
                {{-- <li class="breadcrumb-item"><a href="#">Layouasdasdsaasdast</a></li> --}}
                <li class="breadcrumb-item active">@yield('judul_halaman')</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
