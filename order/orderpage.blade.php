@extends('layouts.order')

@section('content')

<!-- Fixed Background -->
<figure>
    <div class="fxed-wrap">
        <div id="fixed">
        </div>
    </div>
</figure>


<!-- Card Section -->
<div class="container-fluid padding">
    <div class="row padding">

        <div class="col-md-4">
            <div class="card">

                <img class="card-img-top"  src="{{ asset('/assets/images/product/ITEM1.png') }}">
                <div class="card-body">
                    <h4 class="card-title"> ITEM1 </h4>
                    <p class="card-text"> Description... </p>

                    <a href="#" class="btn btn-outline-secondary"> More... </a>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <img class="card-img-top" src="{{ asset('/assets/images/product/ITEM2.png') }}">
                <div class="card-body">
                    <h4 class="card-title"> ITEM2 </h4>
                    <p class="card-text"> Description... </p>

                    <a href="#" class="btn btn-outline-secondary"> More... </a>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <img class="card-img-top" src="{{ asset('/assets/images/product/ITEM3.png') }}">
                <div class="card-body">
                    <h4 class="card-title"> ITEM3 </h4>
                    <p class="card-text"> Description... </p>

                    <a href="#" class="btn btn-outline-secondary"> More... </a>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection