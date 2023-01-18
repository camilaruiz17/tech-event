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
                <div class="btnContainer">
                    <div class="">
                        @if (strtotime(date("Y-m-d H:i:00",time())) > strtotime($crime->datetime))
                            <h5>Stroke Overcome</h5>
                        @else
                            <!-- <button type="button" class="btn btn-primary">Check in</button>
                            <button type="button" class="btn btn-primary">Sign out</button> -->
                            <div>
                                <button class="inscribeBtn"><a href="{{route('inscribe', $crime->id)}}">INSCRIBE</a></button>
                                <button class="unsubscribeBtn"><a href="{{route('unscribe', $crime->id)}}">UNSUBS</a></button>
                            </div>
                        @endif
                    </div>
                    <button class="cancelBtn"><a href=" {{ route('home') }}"> BACK </a></button>
                </div>
            </div>
        </div>
    </div>
</div>    

@endsection