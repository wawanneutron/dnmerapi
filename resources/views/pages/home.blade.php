@extends('layouts.app')

@section('title', 'Pealip Trip')

@section('content')
        <!-- Header Mobile -->
        <header class="header-mobile text-center d-sm-block d-md-none ">
            <div class="animasi-header">
                <h1>Explore the Beautiful Mount Merapi Area
                    <br>
                    As Easy One Click   
                <div class="animasi-p">
                    <p>You will see beautiful
                        <br>
                        moment you never see before</p>
                </div>
            </div>
            <a href="#popular" class="btn btn-get-started ">
                Get Started
            </a>
        </header>   
        <!-- Header Desktop -->
        <main class="header-desktop text-center d-none d-md-block ">
            <div class="animasi-header">
                <h1>Explore the Beautiful Mount Merapi Area
                    <br>
                    As Easy One Click   
                <div class="animasi-p">
                    <p>You will see beautiful
                        <br>
                        moment you never see before</p>
                </div>
            </div>
            <a href="#popular" class="btn btn-get-started ">
                Get Started
            </a>
        </main> 
        <!-- data statistik -->
        <main>
            <div class="container stat">
                <section class="section-stats row justify-content-center" id="stats">
                    <div class="col-3 col-md-2 stats-detail ">
                        <h2>7K</h2>
                        <p>Members</p>
                    </div>
    
                    <div class="col-3 col-md-2 stats-detail ">
                        <h2>80</h2>
                        <p>Jeep</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail ">
                        <h2>14</h2>
                        <p>Partners</p>
                    </div>
                </section>
            </div>
        </main> 
        <!-- wisata popular (judul) for desktop -->
        <section class="section-popular " id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>DN Merapi Adventure By Jeep</h2>
                        <p>Something you never try</p>
                        <span>Explore the Mount Merapi Area By Jeep</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- wisata popular (gambar wisata) -->
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}'); background-position: center;">
                                <div class="travel-contry">DN Merapi</div>
                                <div class="travel-contry">{{ $item->package_type }}</div>
                                <div class="div travel-location mt-4">{{ moneyFormat($item->price) }} / person</div>
                                <div class="travel-button mt-auto"></div>
                                <a href="{{ route('details', [$item->slug, $item->id] ) }}" class="btn btn-travel-details px-4">View Detail</a>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Testimonial Text-->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial content -->
        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
    
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                {{-- <img src="/frontend/images/testimonial/testi-4.png" alt="User" class="mb-4 rounded-circle"> --}}
                                <h3 class="mb-4">Jhon</h3>
                                <p class="testimonial">
                                    “ Something that
                                    before in the world Moment were giving them
                                    the best experience “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Sunrise Package
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                {{-- <img src="/frontend/images/testimonial/testi-3.png" alt="User" class="mb-4 rounded-circle"> --}}
                                <h3 class="mb-4">Lucas Vavre</h3>
                                <p class="testimonial">
                                    “ Something that
                                    before in the world Moment were giving them
                                    the best experience “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Long Package
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                {{-- <img src="/frontend/images/testimonial/testi-2.png" alt="User" class="mb-4 rounded-circle"> --}}
                                <h3 class="mb-4">Mr. Owe</h3>
                                <p class="testimonial">
                                    “Climbing the mountain gave me aching feet, but it was so much fun ”
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Sunset Package
                            </p>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
        <!-- button CTE -->
        <div class="justify-content-center">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help mt-2 py-1">I Need Help</a>
            <a href="{{ route('register') }}" class="btn btn-get-started py-1 mx-2">Get Started</a>
            </div>
        </div>
        <section class="gmap section-testimonial-heading">
            <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-4 content">
                        <h2>Location</h2>
                        <p>You can find the location
                            <br>
                            with the google map below
                        </p>

                    </div>
                    <iframe class="mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.795657488687!2d110.43993429999999!3d-7.5972051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6fa62925ec4d164a!2zN8KwMzUnNDkuOSJTIDExMMKwMjYnMjMuOCJF!5e0!3m2!1sid!2sid!4v1642999569076!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
        </section>
@endsection