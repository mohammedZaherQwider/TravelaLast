@extends('new.layout')
@section('con')
    </div>
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Travel Destination</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Destination</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Destination Start -->
    <div class="container-fluid destination py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Destination</h5>
                <h1 class="mb-0">Popular Destination</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill"
                            href="#tab-1">
                            <span class="text-dark" style="width: 150px;">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-2">
                            <span class="text-dark" style="width: 150px;">USA</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-3">
                            <span class="text-dark" style="width: 150px;">Canada</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-4">
                            <span class="text-dark" style="width: 150px;">Europe</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-5">
                            <span class="text-dark" style="width: 150px;">China</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-6">
                            <span class="text-dark" style="width: 150px;">Singapore</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-xl-8">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-1.jpg') }}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">New York City</h4>
                                                <a href="#" class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('assets/img/destination-1.jpg') }}" data-lightbox="destination-1"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-2.jpg') }}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Las vegas</h4>
                                                <a href="#" class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('assets/img/destination-2.jpg') }}" data-lightbox="destination-2"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-7.jpg') }}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                                <a href="#" class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('assets/img/destination-7.jpg') }}" data-lightbox="destination-7"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-8.jpg') }}"
                                                alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                                <a href="#" class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('assets/img/destination-8.jpg') }}" data-lightbox="destination-8"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="destination-img h-100">
                                    <img class="img-fluid rounded w-100 h-100" src="{{ asset('assets/img/destination-9.jpg') }}"
                                        style="object-fit: cover; min-height: 300px;" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-9.jpg') }}" data-lightbox="destination-4"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-4.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-4.jpg') }}" data-lightbox="destination-4"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-6" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('assets/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->

    <!-- Subscribe Start -->
    <div class="container-fluid subscribe py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="subscribe-title px-3">Subscribe</h5>
                <h1 class="text-white mb-4">Our Newsletter</h1>
                <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam,
                    architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat
                    corrupti eum cum repellat a laborum quasi.
                </p>
                <div class="position-relative mx-auto">
                    <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->
@endsection
{{--  --}}
