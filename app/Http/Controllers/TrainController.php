<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $date = "2022-05-13";
        $trains = Train::whereDate("departure_date", ">=" , $date)->get();

        return view('trains.index', ["trains" => $trains]);
    }

    public function createNewTrain($agency, $departure_station, $arrival_station, $departrure_date, $departure_time, $arrival_date,
    $arrival_time, $train_code, $carriages_number, $is_in_time,$is_deleted){
        $newTrain = new Train();
        $newTrain->fill([
            "agency" => $agency,
            "departure_station" => $departure_station,
            "arrival_station" => $arrival_station,
            "departrure_date" => $departrure_date,
            "departure_time" => $departure_time,
            "arrival_date" => $arrival_date,
            "arrival_time" => $arrival_time,
            "train_code" => $train_code,
            "carriages_number" => $carriages_number,
            "is_in_time" => $is_in_time,
            "is_deleted" => $is_deleted,
        ]);

        $newTrain->save();
    }
}
