<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
class productoacontroller extends Controller
{
    public function getProducto(){
        return response()->json(producto::all(),200);
    }
}
