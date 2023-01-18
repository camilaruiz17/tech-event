@extends('layouts.app')

@section('content')
@if(Auth::check() && Auth::user()->isAdmin)
<div class="buttonNewCrime">
            <button class="btn btn-primary">
                <a href="{{ route('createCrime') }}">
                    <div class="text-warning">CREATE NEW ALERT</div>
                </a>
            </button>
        </div>
    @endif
    <section class="slider">
        <div class="slider__container container">
            <img src="./imgslider/leftarrow.svg" class="slider__arrow" id="before">
            @foreach ($crimesOnSlider as $importantCrime)
            <section class="slider__body" data-id="{{ $importantCrime->id }}" style="background-image: url('{{$importantCrime->img}}')">
                <div class="slider__texts">
                <h2 class="subtitle" >{{ $importantCrime->alertName }}</h2>
                <h4>{{date_format(date_create($importantCrime->datetime),"Y/m/d H:i:s");}}</h4>
                <h5>We need {{$importantCrime->heroesRequired}} heroes!</h5>
                <p class="slider__review">
                    {{ $importantCrime->description }}
                </p>
                </div>
                <figure class="slider__picture">
                </figure>
            </section>
        @endforeach
            <img src="./imgslider/rightarrow.svg" class="slider__arrow" id="after">
        </div>
    </section>

<div class="crimesList">

@foreach ($crimes as $crime)
    <a href="{{ route('showCrime', $crime->id) }}">
        <div class="cardHero" style="width: 18rem;">
            <img src="{{ $crime->img }}" class="card-img-top" alt="..."> 
            <div class="card-body bg-dark">
                <h5 class="card-title text-primary">{{ $crime->alertName }}</h5>
                <h5 class="card-title text-danger">{{ $crime->heroesRequired }} Heroes Required</h5>
                <h5 class="card-title text-white">{{ $crime->datetime }}</h5>
                <form action="{{ route('deleteCrime',['id' =>$crime->id])}}" method="post">
                    @method('delete')
                    @csrf
                    @if(Auth::check() && Auth::user()->isAdmin)
                    <button type="submit"
                    class="deleteButton" style="padding: 0px !important;"
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

<div class="d-flex justify-content-end">
    {!! $crimes->links() !!}
</div>

@endsection

@include('footer')