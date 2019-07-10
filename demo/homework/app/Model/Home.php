<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';
    protected $primaryKey = 'home_id';
    public $timestamps = false;
}
