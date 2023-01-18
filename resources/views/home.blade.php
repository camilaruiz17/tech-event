@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->isAdmin)
        <div class="buttonNewCrime">
            <button class="btn btn-primary" style="background-color: black !important; border: solid 1px black !important;">
                <a href="{{ route('createCrime') }}">
                    <div class="text-warning2"style="color:white !important;" >CREATE NEW ALERT</div>
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
                <h4 class="event__date">{{date_format(date_create($importantCrime->datetime),"Y/m/d H:i:s");}}</h4>
                <h5 class="heroes__count">We need {{$importantCrime->heroesRequired}} heroes!</h5>
                
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
        <div class="cardHero" >
            <img src="{{ $crime->img }}" class="cardImg" alt="Crime that is happening"> 
            <div class="cardBody">
                <div class="text">
                    <h5 class="card-title-text-primary">{{ $crime->alertName }}</h5>
                    <h6 class="card-title-text-danger">{{ $crime->heroesRequired }} Heroes Required</h6>
                    <p class="card-title-text-white">{{ $crime->datetime }}</p>
                    
                    @if (strtotime(date("Y-m-d H:i:00",time())) > strtotime($crime->datetime))
                        <h6>Stroke Overcome</h6>
                    @endif
                    
                    <form class="adminButtons" action="{{ route('deleteCrime',['id' =>$crime->id])}}" method="post">
                        @method('delete')
                        @csrf
                        @if(Auth::check() && Auth::user()->isAdmin)
                        <button>
                            <a type="submit"
                            class="deleteButton" style="padding: 0px !important;"
                            onclick="return confirm('Are you sure to delete this crime? {{ $crime->alertName}} - ID {{$crime->id }}')">🗑️</a>
                        </button>
                        <button>
                            <a class="bt-adm m-1d-flex justify-content-center align-items-center" 
                                href="{{ route('editCrime', ['id' => $crime->id]) }}" onclick="return confirm('Are you sure to edit this crime? {{ $crime->alertName}} - ID {{$crime->id }}')">✏️</a>
                        </button>
                        @endif        
                    </form>
                    <div>
                        <button class="text-warning"><a href="{{route('inscribe', $crime->id)}}">INSCRIBE</a></button>
                        <button class="text-warning1" onclick="return confirm('Are you sure to unsubscribe this crime? {{ $crime->alertName}} - ID {{$crime->id }}')"><a href="{{route('unscribe', $crime->id)}}">UNSUBSCRIBE</a></button>
                    </div>
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