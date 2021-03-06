@extends('layouts.main')
@section('content')

    <!-- edit operator Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">Update Operator</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <form action="{{ route('admin.updateOperator') }}" method="post" class="pb-4">
                @csrf
                @if (Session::has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Update Seat
                    </div>
                    <button type="button" class="btn btn-success"><a href="{{ route("admin.getOperator") }}" class="admin-a-btn">All Operator &rarr;</a></button>
                </div>  
                <hr style="color: #000; height: 3px" class="mb-5" />
                
                <input type="hidden" name="operator_id" value="{{ $operator->operator_id }}">

                <div class="mb-3">
                    <label for="operator_name" class="form-label">Bus Operator Name</label>
                    <input
                    type="text"
                    class="form-control"
                    id="operator_name"
                    name="operator_name"
                    value="{{ $operator->operator_name }}"
                    placeholder="Enter Name Of Bus Operator.."
                    />
                </div>
                @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <p style="color: red">
                            {{ $error }}
                        </p>
                    @endforeach
                </div>
            @endif
                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Update Operator &rarr;</button>
                </div>
                
            </form>
        </div>
    </div>

@endsection