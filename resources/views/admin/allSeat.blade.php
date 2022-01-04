@extends('layouts.main')
@section('content')

    <!-- all seat Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">All Seat</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            @if (Session::has('message'))
                <div class="alert alert-danger mt-2" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="route-hb d-flex justify-content-between pt-4">
                <div class="heading fs-3">
                    All Seat
                </div>
                <button type="button" class="btn btn-success"><a href="{{ route("admin.addSeat") }}" class="admin-a-btn">Create Seat &rarr;</a></button>
            </div>  
            <hr style="color: #000; height: 3px" />
            
            <table class="table table-striped text-center" style="width: 100%; margin: auto;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Seat Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($seats as $seat)
                        <tr>
                            <td>{{ $seat->seat_id }}</td>
                            <td>{{ $seat->seat_number }}</td>
                            <td>
                                <button type="button" class="btn btn-primary"><a href="/admin/editSeat/{{ $seat->seat_id }}" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a></button>
                                <button type="button" class="btn btn-danger"><a href="/admin/deleteSeat/{{ $seat->seat_id }}" onclick="return confirm('Are you sure want to delete this seat item?')" class="admin-a-action">Delete<i class="fas fa-trash-alt admin-fa"></i></a></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>

@endsection
