@extends('layout.app')
@section('title', 'Home')

@section('content')
    {{-- hero --}}
    <div class="d-flex min-vw-100 min-vh-100 position-relative">
        {{-- left --}}
        <div class="ms-0 ms-md-14 min-vh-100 w-100 d-flex flex-column gap-4 justify-content-center align-items-md-start align-items-center ps-0 ps-md-5">
            <div class="h-75 px-12 d-flex flex-column justify-content-center gap-4">
                <div class="d-flex flex-column justify-content-center gap-4">
                    <div class="d-flex flex-column align-items-md-start align-items-center mb-0 gap-0 h-100">
                        <h1 class="fw-medium fs-hero my-0">We Create</h1>
                        <h1 class="fw-medium fs-hero my-0"><span class="fw-bold">Websites</span> and</h1>
                        <h1 class="fw-bold fs-hero  my-0">Applications</h1>
                    </div>
                    <div class="d-flex flex-column align-items-md-start align-items-center mb-0 gap-4">
                        <h2 class="fw-normal w-75 fs-4 text-md-start text-center">Advance and expand your business so that it is better known.</h2>
                        <h3 class="fw-semibold fs-5 py-3 px-8 btn-blue w-fit rounded-3 text-white ">Start now</h3>
                    </div>
                </div>
            </div>
            <div class="d-flex px-12 justify-content-center align-items-center gap-4">
                <img src="/images/home/scroll-down.svg" class="shadow-lg rounded-full w-md-50 w-25" width="80" height="80"
                    alt="">
                <h3 class="text-black fs-4">Scroll Down</h3>
            </div>
        </div>
        {{-- right --}}
        <img src="/images/home/home-dekstop-hero.webp" class="w-50 h-auto d-none d-md-block" width="400" height="400" alt="">
    </div>

    {{-- services --}}
    <div class="d-flex mt-24 flex-column justify-content-center align-items-center gap-4">
        <h2 class="fw-bold w-sm-100 text-center fs-1" style="width: 60%">We Provide the Best Services</h2>
        <div class="services-card-container row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 w-100 justify-content-center">
            <div class="col d-flex justify-content-center"> @include('components.services-card')</div>
            <div class="col d-flex justify-content-center"> @include('components.services-card')</div>
            <div class="col d-flex justify-content-center"> @include('components.services-card')</div>
            <div class="col d-flex justify-content-center"> @include('components.services-card')</div>
        </div>
    </div>

    {{-- about us --}}
    <div class="mt-24 d-flex min-vh-100 flex-column flex-lg-row justify-content-end w-100 bg-dark-blue position-relative">
        <img src="/images/home/about-left-image.webp" class="about-image h-auto position-absolute d-none d-lg-block left-0" width="400"
            style="width: 40%; bottom: -15%" height="400" alt="">
             <div src="/images/home/about-left-image.webp" class="h-100 w-75 d-none d-lg-block" width="100%"></div>
        <div class="right-container d-flex flex-column align-items-sm-start align-items-center justify-content-center p-4 gap-4"
            style="width: 100%">
            <h1 class="fs-1 fw-bold text-white">About us</h1>
            <p class="fs-5 fw-normal text-justify text-description w-100">
                Limpingen Soft Comp was founded by Jeffrey Lim, a University of Technology, Sydney graduate (B.Comp,
                M.C.S.). With over two decades of industry experience, we combine deep technical knowledge with a commitment
                to delivering excellence on every project.
            </p>
            <p class="fs-5 fw-normal text-justify text-description w-100">
                We build powerful, custom-designed websites and applications to help your business succeed. Based in Tanjung
                Pinang, we partner with clients across Indonesia and around the world to bring their digital vision to life.
            </p>

            {{-- motto --}}
            <div class="d-flex w-100 gap-4 justify-content-start align-items-center">
                <div class="d-flex justify-content-center align-items-center bg-mid-blue rounded-full py-3 px-7"
                    style="width: fit-content; height: fit-content;">
                    <p class="text-white fs-4 m-0">1</p>
                </div>
                <div class="d-flex flex-column gap-1">
                    <p class="fs-5 fw-normal text-white m-0">Quality</p>
                    <p class="fs-6 fs-lg-5 fw-normal text-justify text-description m-0 w-100">We pursue the best Quality and
                        Excellency in our product
                        development</p>
                </div>
            </div>
            <div class="d-flex w-100 gap-4 justify-content-start align-items-center">
                <div class="d-flex justify-content-center align-items-center bg-mid-blue rounded-full py-3 px-7"
                    style="width: fit-content; height: fit-content;">
                    <p class="text-white fs-4 m-0">2</p>
                </div>
                <div class="d-flex flex-column gap-1">
                    <p class="fs-5 fw-normal text-white m-0">Integrity</p>
                    <p class="fs-6 fs-lg-5 fw-normal text-justify text-description m-0 w-100">We believe that integrity and
                        character are very
                        important for long lasting relationship</p>
                </div>
            </div>
            <div class="d-flex w-100 gap-4 justify-content-start align-items-center">
                <div class="d-flex justify-content-center align-items-center bg-mid-blue rounded-full py-3 px-7"
                    style="width: fit-content; height: fit-content;">
                    <p class="text-white fs-4 m-0">3</p>
                </div>
                <div class="d-flex flex-column gap-1">
                    <p class="fs-5 fw-normal text-white m-0">Innovations</p>
                    <p class="fs-6 fs-lg-5 fw-normal text-justify text-description m-0 w-100">Our Products use new and innovative
                        Technologies such as
                        React Native, Android Studio, etc</p>
                </div>
            </div>
            <div class="d-flex w-100 gap-4 justify-content-start align-items-center">
                <div class="d-flex justify-content-center align-items-center bg-mid-blue rounded-full py-3 px-7"
                    style="width: fit-content; height: fit-content;">
                    <p class="text-white fs-4 m-0">4</p>
                </div>
                <div class="d-flex flex-column gap-1">
                    <p class="fs-5 fw-normal text-white m-0">Maintenance</p>
                    <p class="fs-6 fs-lg-5 fw-normal text-justify text-description m-0 w-100">After sales services, we always
                        maintain the projects and
                        also relationship with clients</p>
                </div>
            </div>
            <a href="" class="py-4">
                <h3 class="fw-semibold fs-5 py-3 px-8 px-lg-16 bg-white w-fit rounded-3 text-button-blue ">Get Started</h3>
            </a>
        </div>
    </div>

    {{-- Projects --}}
    <div
        class="mt-24 d-flex min-vh-100 flex-column align-items-center justify-content-start gap-8 px-24 w-100 position-relative">
        <h1 class="fs-1 fw-bold text-black">Projects</h1>
        @include('components.project')
        @include('components.project')
        @include('components.project')
        <a href="" class="py-4">
            <h3 class="fw-semibold fs-5 py-3 px-8 btn-blue w-fit rounded-3 text-white ">Show more</h3>
        </a>
    </div>
@endsection
