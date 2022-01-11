@extends('layouts.main')
@section('content')
    <!-- Bus Details -->
    <div class="busDetails">
        <div class="container mt-5">
            <div class="details fs-3 text-center pt-5">
                Bus Detail
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
            <div class="details fs-3 fw-bold text-center">
                Select Seat
                <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
            </div>

            <div class="bus pb-5">
                <div class="container mt-5 detail">
                    <div class="row g-2 p-2">
                        <div class="bus-image col-lg-5 text-center">
                            <img src="{{ url("frontend/img/bus.jpg") }}" alt="busImage">
                        </div>

                        <div class="bus-details col-lg-7 p-4">
                            <label for="seat" class="form-label fw-bold">Choose number of Seat</label>
                            <br>
                            <label for="seat" class="form-label fw-bold">Only Choose {{ $bus->seat }} seats or less than {{ $bus->seat }} seats.</label><br>
                            {{-- <b>Remaining seat: </b>
                            <label for="remSeat" id="remSeat" class="fw-bold">47</label><br> --}}


                                <label for="error" id="error" class="fw-bold" style="color: red"></label>


                                <input
                                type="text"
                                class="form-control"
                                id="seatNumber"
                                name="seat"
                                placeholder="Select number of seat"
                                data-max="50"
                                pattern="[0-9]*"/>

                                <label for="seat" class="form-label fw-bold">Seat Price</label>
                                <input
                                type="text"
                                class="form-control"
                                id="seatPrice"
                                name="price"
                                value="{{ $bus->price }}"
                                readonly/>
                                <button class="btn btn-primary mt-2" id="result" value="*" onclick="calculate()">Select &rarr;</button>

                                <div class="selected-seat fs-3 mt-3 text-dark">
                                    <div>
                                        Total Price: Rs. <label for="totalPrice" id="totalPrice"></label>
                                    </div>
                                </div>
                            
                            <div class="payment mt-5 text-center">
                                <button type="button" class="btn btn-primary">Proceed To Payment &rarr;</button>
                            </div>                            
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

    {{-- @push('scripts')
        <script>
            function calculate() {
                var n1 = parseInt(document.getElementById('seatNumber').value);
                var n2 = parseInt(document.getElementById('seatPrice').value);
                var res = document.getElementById('result').value;

                if(res === '*') {
                    document.getElementById('totalPrice').value = n1*n2;
                }
            }            
        </script>
    @endpush --}}
@endsection