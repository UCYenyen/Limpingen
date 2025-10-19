<div class="d-flex p-4 flex-column align-items-center align-items-sm-start gap-4 bg-white shadow-lg rounded-lg services-card" style="transition: all 0.3s ease;">
    <div class="rounded-full bg-icon p-2" style="width: fit-content">
        @if ($service_type == "Websites")
            <img src="/images/home/crown.svg" draggable="false" width="50" height="50" alt="">
        @elseif ($service_type == "Mobile Apps")
            <img src="/images/home/phone.svg" draggable="false" width="50" height="50" alt="">
        @elseif ($service_type == "Digital Marketing")
            <img src="/images/home/building.svg" draggable="false" width="50" height="50" alt="">
        @elseif ($service_type == "E-Commerce")
            <img src="/images/home/cart.svg" draggable="false" width="50" height="50" alt="">
        @endif
    </div>
    <h3 class="fw-bold fs-4">{{ $service_type }}</h3>
    <p class="fw-normal fs-6 text-center text-sm-start">{{$slot}}
    </p>
</div>
