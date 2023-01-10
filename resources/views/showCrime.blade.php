@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img class="img-thumbnail" src="{{$crime->img}}" alt="">
        <div>
            <h2>{{ $crime->name}}</h2>
            <h2>{{ $crime->spaces}}</h2>
            <h2>{{ $crime->description}}</h2>
            <h2>{{ $crime->datetime}}</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href=" {{ route('home') }}> ↩️ <a/>
        </div>
    </div>

@endsection