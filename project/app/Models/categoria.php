<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //no traer en timestand
    public $timestamps = false;
    //solo trae estos datos
    protected $fillable = ['id','nombre','estado'];
}
