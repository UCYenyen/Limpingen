<div class="d-flex flex-column flex-md-row align-items-center gap-4 w-100 p-4 rounded-lg shadow-lg" style="max-width: 1200px;">
    <img src="/images/projects/{{$src}}" draggable="false" height="100" class="project-image cover" alt="project image">
    <div class="d-flex flex-column gap-4 justify-content-start" style="width: 80%">
        <h2 class="fs-2 fw-bold text-black">{{$name}}</h2>
        <p class="fs-5 fw-normal text-justify text-black">
            {{$slot}}
        </p>
    </div>
</div>