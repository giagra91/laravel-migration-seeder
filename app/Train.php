<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        "agency",
        "departure_station",
        "arrival_station",
        "departrure_date",
        "departure_time",
        "arrival_date",
        "arrival_time",
        "train_code",
        "carriages_number",
        "is_in_time",
        "is_deleted"
    ];
}
