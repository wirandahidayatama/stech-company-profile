@extends('layouts.template')

@section('judul')
Contacts
@endsection

@section('carousel')
        <!-- Carousel Start -->
        <div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src=" {{ asset('tema/img/carousel-1.jpg') }} " class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">An Innovative IT Solutions Agency</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                                <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src=" {{ asset('tema/img/carousel-2.jpg') }} " class="img-fluid" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInLeft">Quality Digital Services You Really Need!</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                                <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
@endsection

@section('main')
        <!-- Contact Start -->
        <div class="container-fluid py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Get In Touch</h5>
                    <h1 class="mb-3">Contact for any query</h1>
                    <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                </div>
                <div class="contact-detail position-relative p-5">
                    <div class="row g-5 mb-5 justify-content-center">
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Address</h4>
                                    <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">23 rank Str, NY</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Call Us</h4>
                                    <a class="h5" href="tel:+0123456789" target="_blank">+012 3456 7890</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Email Us</h4>
                                    <a class="h5" href="mailto:info@example.com" target="_blank">info@example.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="p-5 h-100 rounded contact-map">
                                <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="p-5 rounded contact-form">
                                <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="Your Name">
                                </div>
                                <div class="mb-4">
                                    <input type="email" class="form-control border-0 py-3" placeholder="Your Email">
                                </div>
                                <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="Project">
                                </div>
                                <div class="mb-4">
                                    <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                                </div>
                                <div class="text-start">
                                    <button class="btn bg-primary text-white py-3 px-5" type="button">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection
