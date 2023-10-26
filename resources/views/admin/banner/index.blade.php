@extends('admin.layouts_admin.template')

@section('judul')
Banner
@endsection

@section('judul_halaman')
Menu Banner
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
                                <a href="{{ route('banner.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"> Tambah Data</i></a>
                                <table class="table">
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul Headline</th>
                                        <th>Headline</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($banner as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="/{{ $item->gambar }}" width="100px" alt=""></td>
                                        <td>{{ $item->judul_headline }}</td>
                                        <td>{{ $item->headline }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('banner.edit',$item->id) }}" class="btn btn-success mx-2"> <i class="fas fa-edit"></i>Edit</a>
                                                <form method="POST" action="{{ route('banner.destroy', $item->id) }}">
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

