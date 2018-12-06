<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Irrigation extends Model
{
    protected $table='irrigations';
    protected $fillable = [
        'temp1', 'humi1', 'temp2', 'humi2', 'temp3', 'humi3', 'temp4', 'humi4'
    ];
}
