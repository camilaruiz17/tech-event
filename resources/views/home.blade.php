@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->isAdmin)
        <div>
            <button class="btn btn-primary">
                <a href="{{ route('createCrime') }}">
                    <div class="text-warning">CREATE NEW ALERT</div>
                </a>
            </button>
        </div>
    @endif

<div class="d-flex flex-wrap wrap justify-content-center my-4 px-xxl-5">

@foreach ($crimes as $crime)

        <div class="card" style="width: 18rem;">
            <a href="{{ route('showCrime', $crime->id) }}">
            <img src="{{ $crime->img }}" class="card-img-top" alt="...">
            
            <div class="card-body bg-dark">
                <h5 class="card-title text-primary">{{ $crime->alertName }}</h5>
                <h5 class="card-title text-danger">{{ $crime->heroesRequired }} Heroes Required</h5>
                <h5 class="card-title text-white">{{ $crime->datetime }}</h5>
                <h5 class="card-title text-warning">{{ $crime->description }}</h5>
            <form action="{{ route('deleteCrime',['id' =>$crime->id])}}" method="post">
                @method('delete')
                @csrf
                    @if(Auth::check() && Auth::user()->isAdmin)
                    <button type="submit"
                        class="bt-adm m-1 d-flex justify-content-center aling-items-center"
                        onclick="return confirm('Are you sure to delete this crime? {{ $crime->alertName}} - ID {{$crime->id }}')">
                        🚮
                    </button>
                    <a class="bt-adm m-1 d-flex justify-content-center align-items-center" 
                                href="{{ route('editCrime', ['id' => $crime->id]) }}" onclick="return confirm('Are you sure to edit this crime? {{ $crime->alertName}} - ID {{$crime->id }}')">✏️</a> 
                    @endif        
                </form>
                <div>
                    <button class="text-warning"><a href="{{route('inscribe', $crime->id)}}">Inscribe</a></button>
                    <button class="text-warning" onclick="return confirm('Are you sure to unsubscribe this crime? {{ $crime->alertName}} - ID {{$crime->id }}')"><a href="{{route('unscribe', $crime->id)}}">Unsubscribe</a></button>
                </div>
            
            </div>
        </div>
    </a>
    @endforeach
</div>

@endsection
