<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidate</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/style/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/style/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/e-vote/admin" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/e-vote/admin/candidate/add" class="nav-link active">Add Candidate</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->


                <!-- Messages Dropdown Menu -->

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            {{-- <a href="/e-vote/admin/" class="brand-link">
                <img src="{{ url('/style/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">CAN CREATIVE</span>
            </a> --}}

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('/style/dist/img/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/e-vote/admin/" class="d-block">CAN CREATIVE</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/e-vote/admin/community" class="nav-link ">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Community
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/e-vote/admin/community" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Community</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/e-vote/admin/community/add" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Community</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/e-vote/admin/community/import" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Import Community</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  menu-open">
                            <a href="/e-vote/admin/candidate" class="nav-link active">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    candidate
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/e-vote/admin/candidate" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Candidate</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/e-vote/admin/candidate/add" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Candidate</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/e-vote/admin/user" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    User
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/e-vote/admin/user" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/e-vote/admin/user/import" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Import User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/e-vote/admin/quick-count" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Quick Count
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/e-vote/admin/quick-count" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Quick Count</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/e-vote/admin/vote" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Suara</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Generate Code
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/e-vote/admin/generate" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Code</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/e-vote/admin/generate/create" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Code</p>
                                    </a>
                                </li>
                            </ul>
                            <li class="nav-item">
                                <a href="/e-vote/admin/poling" class="nav-link ">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Poling
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/e-vote/admin/poling" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>List Poling</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                            <div class=" " aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
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
                            <h1>Add Candidate</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Candidate</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            Add Candidate
                        </div>
                        <div class="card-body">
                            <a href="/e-vote/admin/candidate" class="btn btn-primary">Back</a>
                            <br />
                            <br />

                            <form method="post" action="/e-vote/admin/candidate/store" enctype="multipart/form-data">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nama Kandidat">

                                    @if($errors->has('name'))
                                    <div class="text-danger">
                                        {{ $errors->first('name')}}
                                    </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label>Visi</label>
                                    <textarea name="visi" class="form-control" placeholder="Visi Anda"></textarea>

                                    @if($errors->has('visi'))
                                    <div class="text-danger">
                                        {{ $errors->first('visi')}}
                                    </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label>Misi</label>
                                    <textarea name="misi" class="form-control" placeholder="Misi Anda"></textarea>

                                    @if($errors->has('misi'))
                                    <div class="text-danger">
                                        {{ $errors->first('misi')}}
                                    </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" placeholder="Alamat Anda"></textarea>

                                    @if($errors->has('alamat'))
                                    <div class="text-danger">
                                        {{ $errors->first('alamat')}}
                                    </div>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label>Tempat  Lahir</label>
                                    <textarea name="tempatlahir" class="form-control" placeholder="Tempat Lahir Anda"></textarea>

                                    @if($errors->has('tempatlahir'))
                                    <div class="text-danger">
                                        {{ $errors->first('tempatlahir')}}
                                    </div>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <textarea name="tanggallahir" class="form-control" placeholder="Tanggal Lahir Anda"></textarea>

                                    @if($errors->has('tanggallahir'))
                                    <div class="text-danger">
                                        {{ $errors->first('tanggallahir')}}
                                    </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <textarea name="gender" class="form-control" placeholder="jenis Kelamin"></textarea>

                                    @if($errors->has('gender'))
                                    <div class="text-danger">
                                        {{ $errors->first('gender')}}
                                    </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <textarea name="user_phone" class="form-control"
                                        placeholder="Nomor Telepon"></textarea>

                                    @if($errors->has('user_phone'))
                                    <div class="text-danger">
                                        {{ $errors->first('user_phone')}}
                                    </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <b>File Persyaratan</b><br />
                                    <input type="file" name="file">
                                </div>
                                <div class="form-group">
                                    <b>Avatar</b><br />
                                    <input type="file" name="avatar">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Urut</label>
                                    <textarea name="community_id" class="form-control" placeholder="Nomor Urut"></textarea>

                                    @if($errors->has('community_id'))
                                    <div class="text-danger">
                                        {{ $errors->first('community_id')}}
                                    </div>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label>Poling ID</label>
                                    <textarea name="poling_id" class="form-control" placeholder="Poling ID"></textarea>

                                    @if($errors->has('poling_id'))
                                    <div class="text-danger">
                                        {{ $errors->first('poling_id')}}
                                    </div>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /.card-footer-->
        </div>
        <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="https://can.co.id/">CAN Creative</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/style/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/style/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/style/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/style/dist/js/demo.js')}}"></script>
</body>

</html>
