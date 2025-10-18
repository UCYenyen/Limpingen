@extends('layout.app')
@section('title', 'Home')

@section('content')
    {{-- hero --}}
    <div class="d-flex min-vw-100 min-vh-100 position-relative">
        {{-- left --}}
        <div class="ms-14 min-vh-100 w-100 d-flex flex-column gap-4 justify-content-center align-items-start ps-5">
            <div class="h-75 d-flex flex-column justify-content-center gap-4">
                <div class="d-flex flex-column justify-content-center gap-4">
                    <div class="d-flex flex-column mb-0 gap-0 h-100">
                        <h1 class="fw-medium fs-hero my-0">We Create</h1>
                        <h1 class="fw-medium fs-hero my-0"><span class="fw-bold">Websites</span> and</h1>
                        <h1 class="fw-bold fs-hero  my-0">Applications</h1>
                    </div>
                    <div class="d-flex flex-column mb-0 gap-4">
                        <h2 class="fw-normal w-75 fs-4">Advance and expand your business so that it is better known.</h2>
                        <h3 class="fw-semibold fs-5 py-3 px-8 btn-blue w-fit rounded-3 text-white ">Start now</h3>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-4">
                <img src="/images/home/scroll-down.svg" class="shadow-lg rounded-full" width="80" height="80"
                    alt="">
                <h3 class="text-black fs-4">Scroll Down</h3>
            </div>
        </div>
        {{-- right --}}
        <img src="/images/home/home-dekstop-hero.webp" class="w-50 h-auto" width="400" height="400" alt="">
    </div>
    
    {{-- services --}}
    <div class="d-flex flex-column justify-content-center align-items-center gap-4">
        <h2 class="fw-bold fs-1">We Provide the Best Services</h2>
        <div class="row px-24 gap-8">
            <div class="col"> @include('components.services-card')</div>
            <div class="col"> @include('components.services-card')</div>
            <div class="col"> @include('components.services-card')</div>
            <div class="col"> @include('components.services-card')</div>
        </div>
    </div>

    {{-- about us --}}
    <div class="mt-24 d-flex min-vh-100 justify-content-end w-100 bg-dark-blue position-relative">
        <img src="/images/home/about-left-image.webp" class="h-auto position-absolute left-0 top-24" width="400"
            style="width: 40%" height="400" alt="">
        <div class="right-container d-flex flex-column align-items-start justify-content-center p-4 gap-4" style="width: 60%">
            <h1 class="fs-1 fw-bold text-white">About us</h1>
            <p class="fs-5 fw-normal text-description">
                Limpingen Soft Comp was founded by Jeffrey Lim, a University of Technology, Sydney graduate (B.Comp,
                M.C.S.). With over two decades of industry experience, we combine deep technical knowledge with a commitment
                to delivering excellence on every project.
            </p>
            <p class="fs-5 fw-normal text-description">
                We build powerful, custom-designed websites and applications to help your business succeed. Based in Tanjung
                Pinang, we partner with clients across Indonesia and around the world to bring their digital vision to life.
            </p>

            {{-- motto --}}
            <div class="d-flex w-100 gap-4 justify-content-start align-items-center">
                <div class="d-flex justify-content-center align-items-center bg-mid-blue rounded-full py-3 px-7" style="width: fit-content; height: fit-content;">
                    <p class="text-white fs-4 m-0">1</p>
                </div>
                <div class="d-flex flex-column gap-1">
                    <p class="fs-5 fw-normal text-white m-0">Quality</p>
                    <p class="fs-5 fw-normal text-description m-0">We pursue the best Quality and Excellency in our product development</p>
                </div>
            </div>
            <div class="d-flex w-100 gap-4 justify-content-start align-items-center">
                <div class="d-flex justify-content-center align-items-center bg-mid-blue rounded-full py-3 px-7" style="width: fit-content; height: fit-content;">
                    <p class="text-white fs-4 m-0">2</p>
                </div>
                <div class="d-flex flex-column gap-1">
                    <p class="fs-5 fw-normal text-white m-0">Integrity</p>
                    <p class="fs-5 fw-normal text-description m-0">We believe that integrity and character are very important for long lasting relationship</p>
                </div>
            </div>
            <div class="d-flex w-100 gap-4 justify-content-start align-items-center">
                <div class="d-flex justify-content-center align-items-center bg-mid-blue rounded-full py-3 px-7" style="width: fit-content; height: fit-content;">
                    <p class="text-white fs-4 m-0">3</p>
                </div>
                <div class="d-flex flex-column gap-1">
                    <p class="fs-5 fw-normal text-white m-0">Innovations</p>
                    <p class="fs-5 fw-normal text-description m-0">Our Products use new and innovative Technologies such as React Native, Android Studio, etc</p>
                </div>
            </div>
            <div class="d-flex w-100 gap-4 justify-content-start align-items-center">
                <div class="d-flex justify-content-center align-items-center bg-mid-blue rounded-full py-3 px-7" style="width: fit-content; height: fit-content;">
                    <p class="text-white fs-4 m-0">4</p>
                </div>
                <div class="d-flex flex-column gap-1">
                    <p class="fs-5 fw-normal text-white m-0">Maintenance</p>
                    <p class="fs-5 fw-normal text-description m-0">After sales services, we always maintain the projects and also relationship with clients</p>
                </div>
            </div>
            <h3 class="fw-semibold fs-5 py-3 px-16 bg-white w-fit rounded-3 text-button-blue ">Get Started</h3>
        </div>
    </div>
@endsection
