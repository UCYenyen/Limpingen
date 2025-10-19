@extends('layout.app')
@section('title', 'Request')

@section('content')
<link rel="stylesheet" href="/css/request.css">
<div class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="card request-card w-100">
        <div class="card-body p-4 p-md-5">
            <h3 class="text-center fw-bold mb-4">Request</h3>

            <form method="POST" action="{{ url('/requests') }}">
                @csrf

                <div class="mb-4">
                    <label class="form-label fw-semibold">Service Type</label>
                    <select name="service_id" class="form-select input-underline text-description" aria-label="Service type">
                        <option value="">Select service</option>
                        @if(isset($allServices))
                            @foreach($allServices as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('service_id') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Package</label>
                    <select name="package_id" class="form-select input-underline text-description" aria-label="Package">
                        @if(isset($packages))
                            <option value="">Select package</option>
                            @foreach($packages as $package)
                                <option value="{{ $package->id }}">{{ $package->name }}</option>
                            @endforeach
                        @else
                            <option value="" disabled selected>Unavailable</option>
                        @endif
                    </select>
                    @error('package_id') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Request Details</label>
                    <textarea name="description" rows="6" class="form-control input-underline" placeholder="Describe your request..."></textarea>
                    @error('description') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn request-btn w-100 py-2 text-white">Request Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection