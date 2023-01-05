@extends('layouts.app')

@section('content')
<div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">>

@foreach ($crimes as $crime)

    <div class="card" style="width: 18rem;">
        <img src="{{ $crime->img }}" class="card-img-top" alt="...">
        <div class="card-body bg-dark">
            <h5 class="card-title text-primary">{{ $crime->alertName }}</h5>
            <h5 class="card-title text-danger">{{ $crime->heroesRequired }}</h5>
            <h5 class="card-title text-white">{{ $crime->datetime }}</h5>
            <h5 class="card-title text-warning">{{ $crime->description }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</div>



estamos en la home

@endsection
