@extends('layout.app')
@section('title', $project->name)

@section('content')
<link href="/css/home.css" rel="stylesheet">
<div style="width:100vw; height:15vh;"></div>
<div class="container min-vh-100 py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                <img src="/images/projects/{{ $project->image_url }}" 
                     class="card-img-top w-100" 
                     style="max-height: 500px; object-fit: cover;" 
                     alt="{{ $project->name }}">
                
                <div class="card-body p-4 p-md-5">
                    <h1 class="fw-bold mb-4">{{ $project->name }}</h1>
                    <p class="fs-5 text-justify mb-4">{{ $project->description }}</p>
                    
                    <div class="d-flex gap-3 mt-5">
                        <a href="/projects" class="btn btn-outline-primary px-4 py-2">
                            ← Back to Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection