<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps = false;
    //solo trae estos datos de manera masiba
    protected $fillable = ['url','user_id'];
    //relacion en ambos sentidos user en singular por que una url pertenece a un usuario
    public function user(){
       return $this.belongsTo('App\Models\User');
    }
    public function short_url($long_url){
        //crear url
        $url = self::create([
            'url' => $long_url,
            'user_id' => auth()->user()->id
        ]);
        //generar el codigo
            $code = (new CodeGenerator())->get_code($url->id);
        //Actualizar el codigo en la $url
            $url->code =$code;
            $url->save();

            return $url->code;

    }
}
