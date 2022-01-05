@extends('layouts.main')
@section('content')

    <!-- update route Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">Add Route</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <form action="{{ route('admin.updateRoute') }}" method="post" class="pb-4">
                @csrf                
                @if (Session::has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Edit Route
                    </div>
                    <button type="button" class="btn btn-success"><a href="{{ route("admin.getRoute") }}" class="admin-a-btn">All Route &rarr;</a></button>
                </div>  
                <hr style="color: #000; height: 3px" class="mb-5" />
                
                <input type="hidden" name="route_id" value="{{ $route->route_id }}">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Travelling From</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Travelling From..."
                    name="from"
                    value="{{ $route->from }}"
                    />
                </div>

                @error('from')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Travelling To</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Travelling To"
                    name="to"
                    value="{{ $route->to }}"
                    />
                </div>

                @error('to')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input
                    type="date"
                    class="form-control"
                    id="exampleFormControlInput1"
                    name="date"
                    value="{{ $route->date }}"
                    required
                    />
                </div>
                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Update Route &rarr;</button>
                </div>
                
            </form>
        </div>
    </div>

@endsection