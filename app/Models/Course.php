<?php

namespace exchange\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "course";
    public $timestamps = false;
    public $primaryKey = 'Id';
}
