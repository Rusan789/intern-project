@extends('layouts.main')
@section('content')

    <!-- edit seat Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">Update Seat</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <form action="" method="post" class="pb-4">
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Create Seat
                    </div>
                    <button type="button" class="btn btn-success"><a href="{{ route("admin.getSeat") }}" class="admin-a-btn">All Seat &rarr;</a></button>
                </div>  
                <hr style="color: #000; height: 3px" class="mb-5" />
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Seat Number</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Enter Seat Number.."
                    required
                    />
                </div>
                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Update Seat &rarr;</button>
                </div>
                
            </form>
        </div>
    </div>

@endsection