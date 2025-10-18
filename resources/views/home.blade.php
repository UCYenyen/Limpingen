@extends('layout.app')
@section('title', 'Home')

@section('content')
    <div class="d-flex min-vw-100 min-vh-100 position-relative">
        {{-- left --}}
        <div class="ms-14 min-vh-100 w-100 d-flex flex-column gap-4 justify-content-center align-items-start ps-5">
            <div class="d-flex flex-column mb-0 gap-0">
                <h1 class="fw-medium fs-hero my-0">We Create</h1>
                <h1 class="fw-medium fs-hero my-0"><span class="fw-bold">Websites</span> and</h1>
                <h1 class="fw-bold fs-hero  my-0">Applications</h1>
            </div>
            <div class="d-flex flex-column mb-0 gap-4">
                <h2 class="fw-normal w-75 fs-4">Advance and expand your business so that it is better known.</h2>
                <h3 class="fw-semibold fs-5 py-3 px-8 bg-primary w-fit rounded-3 text-white ">Start now</h3>
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
@endsection
