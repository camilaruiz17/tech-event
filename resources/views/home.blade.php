@extends('layouts.app')

@section('content')

    <div>
        <button class=""btn btn-primary">
            <a href="{{ route('createCrime') }}">
                <div class="text-warning">CREATE NEW ALERT</div>
            </a>
        </button>
    </div>

<div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">>

@foreach ($crimes as $crime)

    <div class="card" style="width: 18rem;">
        <img src="{{ $crime->img }}" class="card-img-top" alt="...">
        <div class="card-body bg-dark">
            <h5 class="card-title text-primary">{{ $crime->alertName }}</h5>
            <h5 class="card-title text-danger">{{ $crime->heroesRequired }} Heroes Required</h5>
            <h5 class="card-title text-white">{{ $crime->datetime }}</h5>
            <h5 class="card-title text-warning">{{ $crime->description }}</h5>
            <form action="{{ route('deleteCrime',['id' =>$crime->id])}}" method="post">
                @method('delete')
                @csrf
                <button type="submit"
                class="bt-adm m-1 d-flex justify-content-center aling-items-center"
                onclick="return confirm('¿Estas seguro de querer eliminar este Evento? {{ $crime->alertName}} - ID {{$crime->id }}')">
                🚮
                </button>
                <a class="bt-adm m-1 d-flex justify-content-center align-items-center" href="{{ route('editCrime', ['id' => $crime->id]) }}">✏️</a>
            </form>
        </div>
    </div>
    @endforeach
</div>

@endsection
