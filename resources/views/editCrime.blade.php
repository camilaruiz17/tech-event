@extends('layouts.app')

@section('content')
<div class="containerCreate">
    <div class="row justify-content-center" style="border: solid 3px red">
        <div class="col-md-8" style="border: solid 3px blue">
            <h2 class="card-title">Edit an alert</h2>
            <form class="justify-content-center" action="{{ route('updateCrime', $crime->id) }}" method="POST">
            @method('PATCH')
            @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Alert</span>
                    <input type="text" name="alertName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $crime->alertName }}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Heroes Required</span>
                    <input type="text" name="heroesRequired" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $crime->heroesRequired }}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                    <input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $crime->description }}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                    <input type="text" name="img" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $crime ->img}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Date Time</span>
                    <input type="text" name="datetime" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $crime->datetime }}">
                </div>

                <div class="float-right">
                    <a href="{{ route('home') }}">🔙</a>
                </div>

                <div class="btnCreate">
                    <button type="submit" class="btn btn-outline-succes" value="Create">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>  

@endsection
