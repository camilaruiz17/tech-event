@extends('layouts.app')

@section('content')
    <div>
        <button class=""btn btn-primary">
            <a href="{{ route('createCrime') }}">
                <div class="text-warning">CREATE NEW ALERT</div>
            </a>
        </button>
    </div>
    <section class="slider">
        <div class="slider__container container">
          <img src="./imgslider/leftarrow.svg" class="slider__arrow" id="before">
          @foreach ($important as $importantCrime)
            <section class="slider__body" data-id="{{ $importantCrime->id }}">
                <div class="slider__texts">
                <h2 class="subtitle" >{{ $importantCrime->alertName }}</h2>
                <p class="slider__review">
                    {{ $importantCrime->description }}
                </p>
                </div>
                <figure class="slider__picture">
                <img src="{{ $importantCrime->img }}" class="slider__img">
                </figure>
            </section>
        @endforeach
          <img src="./imgslider/rightarrow.svg" class="slider__arrow" id="after">
        </div>
      </section>
<div class="d-flex flex-wrap wrap justify-content-center my-4 px-xxl-5">

@foreach ($crimes as $crime)
    <a href="{{ route('showCrime', $crime->id) }}">
        <div class="cardHero" style="width: 18rem;">
            <img src="{{ $crime->img }}" class="card-img-top" alt="..."> 
            <div class="card-body bg-dark">
                <h5 class="card-title text-primary">{{ $crime->alertName }}</h5>
                <h5 class="card-title text-danger">{{ $crime->heroesRequired }} Heroes Required</h5>
                <h5 class="card-title text-white">{{ $crime->datetime }}</h5>
                <!-- <h5 class="card-title text-warning">{{ $crime->description }}</h5> -->

                @if (strtotime(date("Y-m-d H:i:00",time())) > strtotime($crime->datetime))
                    <h5>Evento ya paso</h5>
                @endif
                <form action="{{ route('deleteCrime',['id' =>$crime->id])}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit"
                    class="bt-adm m-1 d-flex justify-content-center aling-items-center"
                    onclick="return confirm('¿Estas seguro de querer eliminar este Evento? {{ $crime->alertName}} - ID {{$crime->id }}')">
                    🚮
                    </button>
                    <a class="bt-adm m-1 d-flex justify-content-center align-items-center" 
                                href="{{ route('editCrime', ['id' => $crime->id]) }}">✏️</a>         
                </form>
            </div>
        </div>
    </a>
    @endforeach
</div>

<div class="d-flex justify-content-end">
    {!! $crimes->links() !!}
</div>

@endsection
