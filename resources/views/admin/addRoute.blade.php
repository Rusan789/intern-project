@extends("layouts.main")
@section("content")

    <!-- add route Page -->
    <div class="route pt-5">
        <div class="fs-2 text-center mt-5">Add Route</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container mb-5">
            <form action="{{ route('admin.createRoute') }}" method="post" class="pb-4">
                @csrf
                @if (Session::has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Create Route
                    </div>
                    <button type="button" class="btn btn-success"><a href="{{ route("admin.getRoute") }}" class="admin-a-btn">All Route &rarr;</a></button>
                </div>  
                <hr style="color: #000; height: 3px" class="mb-5" />
                
                <div class="mb-3">
                    <label for="from" class="form-label">Travelling From</label>
                    <input
                    type="text"
                    class="form-control"
                    name="from"
                    id="from"
                    placeholder="Travelling From..."
                    />
                </div>

                @error('from')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="to" class="form-label">Travelling To</label>
                    <input
                    type="text"
                    class="form-control"
                    name="to"
                    id="to"
                    placeholder="Travelling To"
                    />
                </div>

                @error('to')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input
                    type="date"
                    class="form-control"
                    name="date"
                    id="date"
                    />
                </div>

                @error('date')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Add Route &rarr;</button>
                </div>
                
            </form>
        </div>
    </div>

@endsection