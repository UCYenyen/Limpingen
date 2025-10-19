@extends('layout.app')
@section('title', 'Projects')
@section('content')
    <div style="width:100vw; height:15vh;"></div>
    <div class="row mb-24 row-cols-1 g-4 justify-content-center">
        @foreach ($allProjects as $project)
        <x-project>
                <x-slot:name>
                    {{ $project->name }}
                </x-slot:name>
                <x-slot:src>
                    {{ $project->image_url }}
                </x-slot:src>
                {{ $project->description }}
            </x-project>
        @endforeach
    </div>
@endsection