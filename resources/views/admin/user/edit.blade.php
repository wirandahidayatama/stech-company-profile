@extends('admin.layouts_admin.template')

@section('judul')
User
@endsection

@section('judul_halaman')
Edit User
@endsection

@section('main')
   <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('user.update',$user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for=""><b>Nama</b></label>
                                    <input type="name" name="name" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="name" value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Email</b></label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Email" value="{{ old('email', $user->email)  }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Password</b></label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                    placeholder="********">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Konfirmasi Password</b></label>
                                    <input type="password" name="re_password" class="form-control @error('re_password') is-invalid @enderror " placeholder="********">
                                    @error('re_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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

