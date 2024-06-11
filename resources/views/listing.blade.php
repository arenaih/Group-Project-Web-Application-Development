@extends('master.layout')

@section('content')

<!-- ======= Restaurant Detail Page======= -->
<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/about2-bg.jpg); background-size: cover; background-position: center center;">
    <div class="container" style="position: relative; z-index: 1;">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-box-2">
                                    <h5 class="title-left" style="margin-top: 50px;">
                                        Restaurant Listings
                                    </h5>
                                    <div class="text-right mb-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div style="overflow-x: auto; margin-top: 20px;">
                                    <!-- Add your table content here -->
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-top: 50px;">
                                    @foreach ($restaurants as $restaurant)
                                    <div class="row gy-4">
                                        <div class="col-lg-6">
                                            <img src="assets/img/about.jpg" class="img-fluid about-img" alt="">
                                        </div>
                                        <div class="col-lg-6">
                                            <h3>{{$restaurant->name}}</h3>
                                            <p class="fst-italic">
                                                Description of the restaurant.
                                            </p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="bi bi-check2-all"></i>
                                                    <span>Restaurant ID: {{$restaurant->restaurant_id}}</span>
                                                </li>
                                                <li>
                                                    <i class="bi bi-check2-all"></i>
                                                    <span>Name: {{$restaurant->name}}</span>
                                                </li>
                                                <li>
                                                    <i class="bi bi-check2-all"></i>
                                                    <span>Address: {{$restaurant->address}}</span>
                                                </li>
                                                <li>
                                                    <i class="bi bi-check2-all"></i>
                                                    <span>Phone Number: {{$restaurant->phone}}</span>
                                                </li>
                                                <li>
                                                    <i class="bi bi-check2-all"></i>
                                                    <span>Cuisine Type: {{$restaurant->cuisine_type}}</span>
                                                </li>
                                                <li>
                                                    <i class="bi bi-check2-all"></i>
                                                    <span>Price: {{$restaurant->price}}</span>
                                                </li>
                                            </ul>
                                            <p>
                                                Additional information about the restaurant.
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Restaurant Detail Page -->

@endsection
