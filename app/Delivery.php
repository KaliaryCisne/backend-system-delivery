<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{

    protected $table = 'delivery';

    protected $fillable = ['client_name', 'delivery_date', 'starting_coordinate', 'destination_coordinate'];

}
