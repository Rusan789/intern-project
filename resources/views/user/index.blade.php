@extends('layouts.main')
@section('content')
    <!-- Home Showcase -->
    <div class="showcase">
        <div class="container">
            <div class="text">
                <h1 class="text-center fs-1 text-uppercase">
                    Need A Ticket For a Tour?
                </h1>
                <br />
                <h2 class="text-center fs-4">YOU'VE COME TO THE RIGHT PLACE.</h2>
                <hr style="width: 30%; margin: auto; color: #fff; height: 3px" />
            </div>

            <div class="buttons">
                <div class="container d-flex justify-content-center mt-3">
                    <button type="button" class="
                btn btn-primary
                butn
                p-2
                mr-5
                buton
                button-hover
                text-uppercase
              ">
              <a href="#searchBus" class="text-decoration-none searchBusLink"
                >Search Buses</a
              >
            </button>
                    <button type="button" class="btn btn-light buton text-uppercase why-us">
              <a href="#whyUs" class="text-decoration-none">Why Us</a>
            </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Bus Form -->
    <div class="search-bus" id="searchBus">
        <div class="container-fluid">
            <h2 class="searchBus pt-5 text-uppercase">Search Bus</h2>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
            
            <form action="" class="p-4">
              <div class="row g-3">
                  <div class="m-3 col-lg">
                      <label for="bus_name" class="form-label bus-label">Bus Name</label
                      >
                      <input
                          type="search"
                          class="form-control p-2"
                          id="bus_name"
                          placeholder="Search from bus name: like - Pokhara Yatayat, Kathmandu yatayat"
                          name="search"
                      />
                      
                  </div>
                  <div class="m-3 col-lg">
                      <label for="time" class="form-label bus-label"
                          >Time</label
                      >
                      <input
                          type="search"
                          class="form-control p-2"
                          id="time"
                          placeholder="Search from time: like - 6:00 AM, 5:00 AM"
                          name="search1"
                      />
                  </div>
                  <div class="d-flex justify-content-center pb-5">
                      <button type="button" class="btn btn-primary bus-btn p-2">
                        <a href="{{ route('user.busSearch') }}">Search Bus &rarr;</a>
                      </button>
                  </div>

                  {{-- <div class="d-flex justify-content-center">
                    <button class="btn btn-primary bus-btn p-2">
                        Search Bus &rarr;
                    </button>
                </div> --}}
                    
              </div>
          </form>
      </div>
    </div>

    <!-- Why Us -->
    <div class="whyUs" id="whyUs">
      <div class="container g-3">
        <h2 class="text-center mt-5">Why Purchase Ticket From Us</h2>
        <h3 class="text-center">A Smart Way To Travel</h3>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
        <div class="row">
          <div class="col-lg mt-5 text-center">
            <div class="easy">
              <i class="far fa-clock wu"></i>
              <br />
              <h3 class="text-center pb-3">Quick And Easy</h3>
            </div>
          </div>

          <div class="col-lg mt-5 text-center">
            <div class="choices">
              <i class="fas fa-map-signs wu"></i>
              <br />
              <h3 class="text-center">Plenty of Choices</h3>
            </div>
          </div>

          <div class="col-lg mt-5 text-center">
            <div class="prices">
              <i class="fas fa-dollar-sign wu"></i>
              <br />
              <h3 class="text-center">Unbeatable Prices</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Stats -->
    <div class="stats" id="stats">
      <div class="container">
        <h2 class="text-center mt-5 pt-3">Our Stats</h2>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
        <div class="row g-3 pb-5">
          <div class="col-lg mt-3 stat-text">
            <div class="name text-center fs-1">Routes</div>
            <div class="number text-center fs-2">{{ $route }}</div>
            <div class="description text-center fs-5">Routes Available</div>
          </div>

          <div class="col-lg mt-3 stat-text">
            <div class="name text-center fs-1">Buses</div>
            <div class="number text-center fs-2">{{ $buses }}</div>
            <div class="description text-center fs-5">Bus Available</div>
          </div>

          <div class="col-lg mt-3 stat-text">
            <div class="name text-center fs-1">Customers</div>
            <div class="number text-center fs-2">{{ $users }}</div>
            <div class="description text-center fs-5">
              Happy Customers Using Our System
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- All Routes -->
    <div class="routes" id="routes">
      <h2 class="text-center mt-5">All Routes</h2>
      <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
      <div class="container">
        <div class="row g-4 text-center mt-3 mb-5">
          @foreach ($routes as $route)
            <div class="col-lg-4">
              <div class="addresses fs-5">{{ $route->from }} - {{ $route->to }}</div>
            </div> 
          @endforeach
        </div>
      </div>
    </div>
@endsection
