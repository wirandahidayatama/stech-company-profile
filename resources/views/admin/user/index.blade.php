@extends('admin.layouts_admin.template')

@section('judul')
User
@endsection

@section('judul_halaman')
Menu User
@endsection

@section('main')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ url('/admin/user/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus">Create</i></a>
                                <table class="table">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>randa</td>
                                        <td>randa@gmail.com</td>
                                        <td>
                                            <a href="#" class="btn btn-success">Edit</a>
                                            <a href="#" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <p>test</p>
            </div>
        </section>
        <!-- /.content -->
@endsection

