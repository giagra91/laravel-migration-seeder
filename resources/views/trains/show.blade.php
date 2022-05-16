@extends('layouts.main')

@section('title', "Train detail")

@section('main-content')
    <div class="single-train">
        <div class="row">
            <div class="col-6 py-3">
                <a class="btn btn-success" href="{{route("trains.show", $train->id-1)}}">Prevoius train</a>
            </div>
            <div class="col-6">
                <a class="btn btn-success" href="{{route("trains.show", $train->id+1)}}">Next train</a>
            </div>
        </div>
        <h2>Company: {{ $train->company }}</h2>
        <h3>From {{ $train->departure_station }} to {{ $train->arrival_station }}</h3>
        <h3>Departure time: {{ $train->departure_time }} - Arrival time: {{ $train->arrival_time }}</h3>
        <div class="check-infos">
            <h3>
                In time: 
                <span class="{{ $train->is_in_time ? "train-check bg-green" : "train-check bg-red" }}"></span>
            </h3>
            <h3> 
                Circulating:
                <span class="{{ $train->is_deleted ? "train-check bg-red" : "train-check bg-green" }}"></span>
            </h3>
        </div>
    </div>
@endsection