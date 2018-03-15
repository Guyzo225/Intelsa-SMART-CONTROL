<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapports extends Model
{
    protected $fillable = ['date','kwh'];
    public $timestamps = false;
}
