@extends('layouts.main')
@section('content')
    <!-- Bus Details -->
    <div class="busDetails">
        <div class="container mt-5">
            <div class="details fs-3 text-center pt-5">
                Your Ticket
                <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
            </div>

            <div class="bus">
                <div class="container mt-5 detail">
                    <div class="row g-2 p-2">
                        <div class="bus-image col-lg-5 col-md-6">
                            <img src="{{ url("img") }}/{{ $bus->img }}" alt="bus" class="mt-4 text-center responsive">
                        </div>

                        <div class="bus-details col-lg-7 col-md-6 p-4">
                            <h3>Tourist Bus By {{ $bus->bus_name }}</h3>
                            <h4>Facilities: </h4>{{ $bus->facilities }}
                            
                            <br>
                            <br>
                            <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->route->from }} - {{ $bus->route->to }}</span></i>
                            <br>
                            <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->time }}</span></i>
                            <br>
                            <i class="fas fa-chair-office fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->seat }} Total Seats</span></i>
                            <br>
                            <i class="fas fa-user fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->driver_name }}</span></i>
                            <br>
                            <i class="fas fa-bus-school fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->bus_number }}</span></i>
                            <br>
                            <i class="fas fa-rupee-sign fs-5 pb-2">&nbsp; &nbsp; &nbsp;<span class="location-span">Rs. {{ $bus->price }}</span></i>
                        </div>
                    </div>
                    <br>
                </div>
                <hr style="width: 100%; color: #000; height: 3px" class="mb-5"/>
            </div>
        </div>
    </div>
@endsection