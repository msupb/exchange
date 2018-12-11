<?php

namespace exchange\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "city";
    public $timestamps = false;
    public $primaryKey = 'Id';
}
