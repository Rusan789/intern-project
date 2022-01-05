@extends("layouts.main")
@section("content")

    <!-- add seat Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">Add Seat</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            @if (Session::has('message'))
                <div class="alert alert-success mt-2" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <form action="{{ route('admin.createSeat') }}" method="post" class="pb-4">
                @csrf
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Create Seat
                    </div>
                    <button type="button" class="btn btn-success"><a href="{{ route("admin.getSeat") }}" class="admin-a-btn">All Seat &rarr;</a></button>
                </div>  
                <hr style="color: #000; height: 3px" class="mb-5" />
                
                <div class="mb-3">
                    <label for="seat_number" class="form-label">Seat Number</label>
                    <input
                    type="text"
                    class="form-control"
                    id="seat_number"
                    name="seat_number"
                    placeholder="Enter Seat Number.."
                    />
                </div>

                @error('seat_number')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="bus_id" class="form-label">Bus</label>
                    <select class="form-select" name="bus_id" aria-label="Default select example">
                        <option selected>----- Select Bus -----</option>
                        @foreach ($buses as $bus)
                            <option value="{{ $bus->bus_id }}">{{ $bus->bus_name }}</option>
                        @endforeach
                        {{-- <option value="1">Kalo Bus</option>
                        <option value="2">Ram Dai ko Bus</option> --}}
                      </select>
                </div>
                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Add Seat &rarr;</button>
                </div>
                
            </form>
        </div>
    </div>

@endsection