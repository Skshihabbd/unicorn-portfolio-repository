<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicemodel extends Model
{
    protected $fillable=["image","title","description"];
    protected $table="servicecategorys";
}
