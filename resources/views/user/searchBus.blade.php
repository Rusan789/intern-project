@extends('layouts.main')
@section('content')
    <!-- Search Bus Form -->
    <div class="search-bus mt-5" id="searchBus">
        <div class="container-fluid">
            <h2 class="searchBus pt-5 text-uppercase text-center">Search Bus</h2>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
            <form action="" class="p-4">
                <div class="row g-3">
                    <div class="m-3 col-lg">
                        <label for="exampleFormControlInput1" class="form-label bus-label">From</label
            >
            <input
                type="text"
                class="form-control p-2"
                id="exampleFormControlInput1"
                placeholder="Travelling From"
            />
            </div>
            <div class="m-3 col-lg">
            <label for="exampleFormControlInput1" class="form-label bus-label"
                >To</label
            >
            <input
                type="text"
                class="form-control p-2"
                id="exampleFormControlInput1"
                placeholder="Travelling To"
            />
            </div>
            <div class="m-3 col-lg">
            <label for="exampleFormControlInput1" class="form-label bus-label"
                >Date</label
            >
            <input
                type="date"
                class="form-control p-2"
                id="exampleFormControlInput1"
                placeholder="name@example.com"
            />
            </div>
            <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary bus-btn p-2">
                Search Bus &rarr;
            </button>
            </div>
        </div>
        </form>
    </div>
    </div>

    <!-- Search Bus main body section -->
    <div class="section-bus">
        <div class="container">
            <h2 class="text-center pt-4">All Bus</h2>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
            <div class="forFlex mt-5">
                <div class="row">
                    <div class="first col-lg-5 col-md-6 mb-5">
                        <div class="price-operator">
                            <div class="price">
                                <label for="customRange2" class="form-label fw-bold">Price Range (0 - 2000)</label>
                                <input type="range" class="form-range" min="0" max="2000" id="customRange2" />
                            </div>

                            <div class="operator">
                                <label for="operator" class="form-label fw-bold">Bus Operator</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>----- Select Bus Operator -----</option>
                                    <option value="ridhisiddhi yatayat">
                                        Ridhisiddhi Yatayat
                                    </option>
                                    <option value="fpy">Fast Pokhara Yatayat</option>
                                    <option value="c-p">Chitwan To Pokhara Yatayat</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="bus-lists col-lg-7 col-md-6">
                        <div class="list-of-bus mb-4">
                            <div class="priceFlex">
                                <div class="bus-des">
                                    <div class="row">
                                        <div class="bus-image col-lg-9">
                                            <div class="row">
                                                <div class="image col-lg-3">
                                                    <img src="{{ url("frontend/img/night-road.jpeg") }}" alt="bus" width="100px" height="100px" />
                                                </div>
                                                <div class="desc col-lg-9">
                                                    <h4>Tourist Bus By Pokhara Yatayat</h4>
                                                    <h5>Facilities:</h5>
                                                    Wifi, Ac, Music System, Charging Port
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-price col-lg-3">
                                            <h4>Price</h4>
                                            <h5 class="mb-3">Rs. 800</h5>
                                            <button type="button" class="btn btn-primary mb-3"><a class="btnBus" href="{{ route("busDetails") }}">Select &rarr;</a></button>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="main-desc">
                                <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">kathmandu - pokhara</span></i>
                                <br>
                                <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">6:30 AM</span></i>
                                <br>
                                <i class="fas fa-chair-office fs-5">&nbsp; &nbsp;<span class="location-span">20 Available Seats</span></i>
                            </div>
                        </div>
                        <div class="list-of-bus mb-4">
                            <div class="priceFlex">
                                <div class="bus-des">
                                    <div class="row">
                                        <div class="bus-image col-lg-9">
                                            <div class="row">
                                                <div class="image col-lg-3">
                                                    <img src="{{ url("frontend/img/night-road.jpeg") }}" alt="bus" width="100px" height="100px" />
                                                </div>
                                                <div class="desc col-lg-9">
                                                    <h4>Tourist Bus By Pokhara Yatayat</h4>
                                                    <h5>Facilities:</h5>
                                                    Wifi, Ac, Music System, Charging Port
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-price col-lg-3">
                                            <h4>Price</h4>
                                            <h5 class="mb-3">Rs. 800</h5>
                                            <button type="button" class="btn btn-primary mb-3"><a class="btnBus" href="{{ route("busDetails") }}">Select &rarr;</a></button>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="main-desc">
                                <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">kathmandu - pokhara</span></i>
                                <br>
                                <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">6:30 AM</span></i>
                                <br>
                                <i class="fas fa-chair-office fs-5">&nbsp; &nbsp;<span class="location-span">20 Available Seats</span></i>
                            </div>
                        </div>
                        <div class="list-of-bus mb-4">
                            <div class="priceFlex">
                                <div class="bus-des">
                                    <div class="row">
                                        <div class="bus-image col-lg-9">
                                            <div class="row">
                                                <div class="image col-lg-3">
                                                    <img src="{{ url("frontend/img/night-road.jpeg") }}" alt="bus" width="100px" height="100px" />
                                                </div>
                                                <div class="desc col-lg-9">
                                                    <h4>Tourist Bus By Pokhara Yatayat</h4>
                                                    <h5>Facilities:</h5>
                                                    Wifi, Ac, Music System, Charging Port
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-price col-lg-3">
                                            <h4>Price</h4>
                                            <h5 class="mb-3">Rs. 800</h5>
                                            <button type="button" class="btn btn-primary mb-3"><a class="btnBus" href="{{ route("busDetails") }}">Select &rarr;</a></button>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="main-desc">
                                <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">kathmandu - pokhara</span></i>
                                <br>
                                <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">6:30 AM</span></i>
                                <br>
                                <i class="fas fa-chair-office fs-5">&nbsp; &nbsp;<span class="location-span">20 Available Seats</span></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection