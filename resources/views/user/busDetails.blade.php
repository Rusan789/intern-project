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
                            <img src="{{ url("img/night-road.jpeg") }}" alt="" class="mt-4 text-center responsive">
                        </div>

                        <div class="bus-details col-lg-7 col-md-6 p-4">
                            <h3>Tourist Bus By Pokhara Yatayat</h3>
                            <h4>Facilities: </h4>Wifi, AC, Music System, Mineral Water
                            
                            <br>
                            <br>
                            <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">kathmandu - pokhara</span></i>
                            <br>
                            <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">6:30 AM</span></i>
                            <br>
                            <i class="fas fa-chair-office fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">20 Available Seats</span></i>
                            <br>
                            <i class="fas fa-user fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">Ram Bahadur</span></i>
                            <br>
                            <i class="fas fa-bus-school fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">Ba 26 Cha 2160</span></i>
                            <br>
                            <i class="fas fa-rupee-sign fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">Rs. 800</span></i>
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
                            <img src="{{ url("img/bus.jpg") }}" alt="busImage">
                        </div>

                        <div class="bus-details col-lg-7 p-4">
                            <label for="operator" class="form-label fw-bold">Choose Seat</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>----- Select Seats -----</option>
                                <option value="A1">
                                    A1
                                </option>
                                <option value="A2">
                                    A2
                                </option>
                                <option value="A3">
                                    A3
                                </option>
                                <option value="A4">
                                    A4
                                </option>
                                <option value="B5">
                                    B5
                                </option>
                                <option value="B6">
                                    B6
                                </option>
                                <option value="B7">
                                    B7
                                </option>
                                <option value="B8">
                                    B8
                                </option>
                                <option value="C9">
                                    C9
                                </option>
                                <option value="C10">
                                    C10
                                </option>
                                <option value="C11">
                                    C11
                                </option>
                                <option value="C12">
                                    C12
                                </option>
                                <option value="D13">
                                    D13
                                </option>
                                <option value="D14">
                                    D14
                                </option>
                                <option value="D15">
                                    D15
                                </option>
                                <option value="D16">
                                    D16
                                </option>
                                <option value="E17">
                                    E17
                                </option>
                                <option value="E18">
                                    E18
                                </option>
                                <option value="E19">
                                    E19
                                </option>
                                <option value="E20">
                                    E20
                                </option>
                            </select>

                            <div class="selected-seat fs-3 mt-5 pt-5 text-center">
                                Selected Seat: A1, B5, C9
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
@endsection