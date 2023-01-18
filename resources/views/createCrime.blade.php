@extends('layouts.app')

@section('content')
  <div class="containerCreate">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Create a new alert</h2>
                    <form class="justify-content-center" action="{{ route('storeCrime') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Alert</span>
                            <input type="text" name="alertName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Alert">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Heroes Required</span>
                            <input type="text" name="heroesRequired" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Heroes Required Max">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                            <input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Description">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                            <input type="text" name="img" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="url image">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Date Time</span>
                            <input type="text" name="datetime" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Date Time">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Is Important?</span>
                            <select class="form-select" aria-label="Is important?" name="important">
                                <option value="1">Yes</option>
                                <option value="0" selected>No</option>
                              </select>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('home') }}">🔙</a>
                        </div>

                        <div class="btnCreate">
                            <button type="submit" class="btn btn-outline-succes" value="Create">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>  

@endsection
