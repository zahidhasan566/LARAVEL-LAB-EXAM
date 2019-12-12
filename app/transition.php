<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transition extends Model
{
    protected $table = "transition";

    protected $primaryKey = "id";
    public $timestamps = false;
}
