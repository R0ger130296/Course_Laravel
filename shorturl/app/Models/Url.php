<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps = false;
    //solo trae estos datos de manera masiba
    protected $fillable = ['code','user_id'];
    //relacion en ambos sentidos user en singular por que una url pertenece a un usuario
    public function user(){
       return $this.belongsTo('App\Models\User');
    }
}
