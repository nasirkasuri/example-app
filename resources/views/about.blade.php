@extends('layouts.master')
@section('title', 'Home')
@section('content')
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">About Us</h6>
                    <h1 class="mb-4">5+ Years Experience In Solar & Renewable Energy Industry</h1>
                    <p>With over 5 years of experience in the solar and renewable energy industry, we have gained a
                        deep understanding of sustainable energy solutions and cutting-edge technologies. Our
                        expertise spans across solar panel installation, energy storage systems, and green energy
                        innovations that help reduce environmental impact. Weve built a reputation for delivering
                        high-quality, efficient, and reliable solutions that meet the unique needs of each client.
                        Over the years, our team has honed its skills to stay ahead of industry trends, ensuring
                        that our solutions are always at the forefront of the renewable energy revolution. This
                        experience positions us as trusted leaders in the transition to a greener future.</p>
                    <!-- <p><i class="fa fa-check-circle text-primary me-3"></i>Diam dolor diam ipsum</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Tempor erat elitr rebum at clita</p> -->
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection     