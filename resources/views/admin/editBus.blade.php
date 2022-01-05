@extends('layouts.main')
@section('content')

    <!-- edit bus Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">Update Bus</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <form action="{{ route('admin.updateBus') }}" method="post" class="pb-4" enctype="multipart/form-data">
                @csrf
                @if (Session::has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Update Bus
                    </div>
                    <button type="button" class="btn btn-success"><a href="{{ route("admin.getBus") }}" class="admin-a-btn">All Bus &rarr;</a></button>
                </div>  
                <hr style="color: #000; height: 3px" class="mb-5" />
                
                <input type="hidden" name="bus_id" value="{{ $bus->bus_id }}">

                <div class="mb-3">
                    <label for="bus_name" class="form-label">Bus Name</label>
                    <input
                    type="text"
                    class="form-control"
                    id="bus_name"
                    name="bus_name"
                    value="{{ $bus->bus_name }}"
                    placeholder="Bus Name"
                    />
                </div>

                @error('bus_name')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="facilities" class="form-label">Facilities</label>
                    <input
                    type="text"
                    class="form-control"
                    id="facilities"
                    name="facilities"
                    value="{{ $bus->facilities }}"
                    placeholder="Facilities"
                    />
                </div>

                @error('facilities')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="route" class="form-label">Location</label>
                    <select class="form-select" name="route_id" aria-label="Default select example">
                        <option selected>----- Select Locations -----</option>
                        @foreach ($routes as $route)
                            <option value="{{ $route->route_id }}">{{ $route->from }} - {{ $route->to }}</option>
                        @endforeach
                      </select>
                </div>

                <div class="mb-3">
                    <label for="operator_id" class="form-label">Operator</label>
                    <select class="form-select" name="operator_id" aria-label="Default select example">
                        <option selected>----- Select Operator -----</option>
                        @foreach ($operators as $operator)
                            <option value="{{ $operator->operator_id }}">{{ $operator->operator_name }}</option>
                        @endforeach
                      </select>
                </div>

                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input
                    type="text"
                    class="form-control"
                    id="time"
                    name="time"
                    value="{{ $bus->time }}"
                    placeholder="Time"
                    />
                </div>

                @error('time')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input
                    type="text"
                    class="form-control"
                    id="price"
                    name="price"
                    value="{{ $bus->price }}"
                    placeholder="Price"
                    />
                </div>

                @error('price')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="img" class="form-label">Bus Image</label>
                    <input
                    type="file"
                    class="form-control"
                    id="img"
                    name="file"
                    />
                </div>

                @error('img')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="driver_name" class="form-label">Driver's Name</label>
                    <input
                    type="text"
                    class="form-control"
                    id="driver_name"
                    name="driver_name"
                    value="{{ $bus->driver_name }}"
                    placeholder="Driver Name"
                    />
                </div>

                @error('driver_name')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="bus_number" class="form-label">Bus Number</label>
                    <input
                    type="text"
                    class="form-control"
                    id="bus_number"
                    name="bus_number"
                    value="{{ $bus->bus_number }}"
                    placeholder="Bus Number"
                    />
                </div>

                @error('bus_number')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror
                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Update Bus &rarr;</button>
                </div>
            </form>
        </div>
    </div>


@endsection