@extends('layouts.main')
@section('content')

<div class="signup pt-5">
    <div class="fs-2 text-center mt-5">Payment</div>
    <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

    <div class="container signup-container">
        <form action="{{ route('payment.create') }}" method="post" class="pb-4">
            @csrf
            @if (Session::has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
            <div class="heading fs-3">Payment</div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label
        >
        <input
          type="text"
          class="form-control"
          id="name"
          name="name"
          required
        />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label" value=""
          >Email address</label
        >
        <input
          type="email"
          class="form-control"
          id="email"
          name="email"
          required
        />
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label" value=""
          >Phone</label
        >
        <input
          type="text"
          class="form-control"
          id="phone"
          name="phone"
          required
        />
      </div>

      <div class="mb-3">
        <label for="price" class="form-label" value=""
          >Price</label
        >
        <input
          type="text"
          class="form-control"
          id="price"
          name="price"
          required
        />
      </div>

      <div class="button text-center">
        <button type="submit" class="btn btn-success signup-btn">
          Checkout &rarr;
        </button>
      </div>

      <div class="button text-center">
        <button type="button" class="btn btn-success signup-btn">
            <a class="btnBus" href="{{ route('user.ticket',['bus_id'=>$bus_id]) }}">Generate Ticket &rarr;</a>
        </button>
      </div>
    </form>
  </div>
</div>

@endsection