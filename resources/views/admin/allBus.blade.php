@extends("layouts.main")
@section('content')

    <!-- all bus Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">All Route</div>
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
                        <th>Location</th>
                        <th>Time</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Driver Name</th>
                        <th>Bus Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tour Bus By Pokhara Yatayat</td>
                        <td>WiFi, AC, Music System</td>
                        <td>Kathmandu-Pokhara</td>
                        <td>6:30 AM</td>
                        <td>Rs: 800</td>
                        <td><img src="../img/night-road.jpeg" alt="bus" srcset="" width="100px" height="100px"></td>
                        <td>Ram Bahadur</td>
                        <td>Ba 29 Cha 2160</td>
                        <td>
                            <button type="button" class="btn btn-primary mb-2"><a href="{{ route("admin.editBus") }}" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a></button>
                            <button type="button" class="btn btn-danger"><a href="#" class="admin-a-action">Delete<i class="fas fa-trash-alt admin-fa"></i></a></button>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Tour Bus By Pokhara Yatayat</td>
                        <td>WiFi, AC, Music System</td>
                        <td>Kathmandu-Pokhara</td>
                        <td>6:30 AM</td>
                        <td>Rs: 800</td>
                        <td><img src="../img/night-road.jpeg" alt="bus" srcset="" width="100px" height="100px"></td>
                        <td>Ram Bahadur</td>
                        <td>Ba 29 Cha 2160</td>
                        <td>
                            <button type="button" class="btn btn-primary mb-2"><a href="{{ route("admin.editBus") }}" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a></button>
                            <button type="button" class="btn btn-danger"><a href="#" class="admin-a-action">Delete<i class="fas fa-trash-alt admin-fa"></i></a></button>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Tour Bus By Pokhara Yatayat</td>
                        <td>WiFi, AC, Music System</td>
                        <td>Kathmandu-Pokhara</td>
                        <td>6:30 AM</td>
                        <td>Rs: 800</td>
                        <td><img src="../img/night-road.jpeg" alt="bus" srcset="" width="100px" height="100px"></td>
                        <td>Ram Bahadur</td>
                        <td>Ba 29 Cha 2160</td>
                        <td>
                            <button type="button" class="btn btn-primary mb-2"><a href="{{ route("admin.editBus") }}" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a></button>
                            <button type="button" class="btn btn-danger"><a href="#" class="admin-a-action">Delete<i class="fas fa-trash-alt admin-fa"></i></a></button>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Tour Bus By Pokhara Yatayat</td>
                        <td>WiFi, AC, Music System</td>
                        <td>Kathmandu-Pokhara</td>
                        <td>6:30 AM</td>
                        <td>Rs: 800</td>
                        <td><img src="../img/night-road.jpeg" alt="bus" srcset="" width="100px" height="100px"></td>
                        <td>Ram Bahadur</td>
                        <td>Ba 29 Cha 2160</td>
                        <td>
                            <button type="button" class="btn btn-primary mb-2"><a href="{{ route("admin.editBus") }}" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a></button>
                            <button type="button" class="btn btn-danger"><a href="#" class="admin-a-action">Delete<i class="fas fa-trash-alt admin-fa"></i></a></button>
                        </td>
                    </tr>
                    
                </tbody>
                
            </table>
        </div>
    </div>

@endsection