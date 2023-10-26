@extends('admin.layouts_admin.template')

@section('judul')
Banner
@endsection

@section('judul_halaman')
Edit banner
@endsection

@section('main')
   <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for=""><b>Judul Headline</b></label>
                                    <input type="text" name="judul_headline" class="form-control @error('judul_headline') is-invalid @enderror"
                                    placeholder="judul_headline" value="{{ old('judul_headline', $banner->judul_headline) }}">
                                    @error('judul_headline')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Headline</b></label>
                                    <input type="text" name="headline" class="form-control @error('headline') is-invalid @enderror"
                                    placeholder="headline" value="{{ old('headline', $banner->headline) }}">
                                    @error('headline')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Deskripsi</b></label>
                                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                                    placeholder="description" value="{{ old('description', $banner->description) }}">
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for=""><b>Gambar</b></label>
                                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror"
                                    placeholder="gambar" value="{{ old('gambar', $banner->gambar) }}">
                                    @error('gambar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">

                                    <img src="/{{ $banner->gambar }}" width="100px" alt="">
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('banner.index') }}" class="btn btn-warning">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- /.content -->
@endsection

