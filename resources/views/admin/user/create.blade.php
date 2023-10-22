@extends('admin.layouts_admin.template')

@section('judul')
User
@endsection

@section('judul_halaman')
Tambah User
@endsection

@section('main')
   <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="/admin/user" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for=""><b>Username</b></label>
                                    <input type="username" name="username" class="form-control" placeholder="username">
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Email</b></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Password</b></label>
                                    <input type="password" name="password" class="form-control" placeholder="********">
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Konfirmasi Password</b></label>
                                    <input type="password" name="re_password" class="form-control" placeholder="********">
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
@endsection

