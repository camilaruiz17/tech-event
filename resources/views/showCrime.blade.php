@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img class="img-thumbnail" src="{{$crime->img}}" alt="">
        <div>
            <h2>{{ $crime->alertName}}</h2>
            <h2>{{ $crime->heroesRequired}}</h2>
            <h2>{{ $crime->description}}</h2>
            <h2>{{ $crime->datetime}}</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href=" {{ route('home') }}">Home<a/>
                @if (strtotime(date("Y-m-d H:i:00",time())) > strtotime($crime->datetime))
                    <h5>Evento ya paso</h5>
                @else
                    <button type="button" class="btn btn-primary">Check in</button>
                    <button type="button" class="btn btn-primary">Sign out</button>
                @endif
        </div>
    </div>

@endsection