@extends("layouts.main")
@section('content')

    <!-- all bus Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">All Bus</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container bus-container">
            <div class="route-hb d-flex justify-content-between pt-4">
                <div class="heading fs-3">
                    All Route
                </div>
                <button type="button" class="btn btn-success"><a href="{{ route("admin.addBus") }}" class="admin-a-btn">Create Bus &rarr;</a></button>
            </div>  
            <hr style="color: #000; height: 3px" />
            
            <table class="table table-striped text-center" style="width: 100%; margin: auto;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Bus Name</th>
                        <th>Facilities</th>
                        <th>Time</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Driver Name</th>
                        <th>Bus Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buses as $bus)
                        <tr>
                            <td>{{ $bus->bus_id }}</td>
                            <td>Tour Bus By {{ $bus->bus_name }}</td>
                            <td>{{ $bus->facilities }}</td>                     
                            <td>{{ $bus->time }}</td>
                            <td>{{ $bus->price }}</td>
                            <td><img src="../img/{{ $bus->img }}" alt="bus" width="100px" height="100px"></td>
                            <td>{{ $bus->driver_name }}</td>
                            <td>{{ $bus->bus_number }}</td>
                            <td>
                                <button type="button" class="btn btn-primary mb-2"><a href="/admin/editBus/{{ $bus->bus_id }}" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a></button>
                                <button type="button" class="btn btn-danger"><a href="/admin/deleteBus/{{ $bus->bus_id }}" onclick="return confirm('Are you sure want to delete this bus item?')" class="admin-a-action">Delete<i class="fas fa-trash-alt admin-fa"></i></a></button>
                            </td>
                        </tr>
                    @endforeach                      
                </tbody>                
            </table>
        </div>
    </div>

@endsection