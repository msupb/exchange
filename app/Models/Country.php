<?php

namespace exchange\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "country";
    public $timestamps = false;
    public $primaryKey = 'Id';
}
