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
                            {{-- tanpa menggunakan sweet alert --}}
                            {{-- @if(Session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif --}}
                            <div class="card-body">
                                <a href="{{ route('user.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"> Tambah Data</i></a>
                                <table class="table">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('user.edit',$item->id) }}" class="btn btn-success mx-2"> <i class="fas fa-edit"></i>Edit</a>
                                                <form method="POST" action="{{ route('user.destroy', $item->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" data-confirm-delete="true" ><i class="fas fa-trash"></i> Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection

