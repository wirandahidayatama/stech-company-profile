@extends('layouts.template')

@section('judul')
Login
@endsection

@section('main')
        <div class="container-fluid py-5 my-5">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-200 position-relative">
                            <img src=" {{ asset('/images/login.png') }}" class="img-fluid w-200 rounded" alt="" style="margin-bottom: 25%;">
                            {{-- <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                <img src="{{ asset('tema/img/about-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="text-center"><h1><strong>LOGIN</strong></h1></div>
                                <form>
                                    <div class="mb-3 form-group">
                                        <label for="" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="email">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
