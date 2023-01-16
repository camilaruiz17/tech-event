@extends('layouts.app')

@section('content')

<div class="containerCreate">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="showCard">
                <img class="img-thumbnail" src="{{$crime->img}}" alt="">
                <div clas="cardText">
                    <h1 class="boldy">{{ $crime->alertName}}</h1>
                    <h2>{{ $crime->heroesRequired}} HEROES REQUIRED</h2>
                    <h2>{{ $crime->description}}</h2>
                    <h2>{{ $crime->datetime}}</h2>
                </div>
                <div class="btnContainerShow">
                    <a class="cancelBtn" href=" {{ route('home') }}"> BACK </a>
                </div>
            </div>
        </div>
    </div>
</div>    

@endsection