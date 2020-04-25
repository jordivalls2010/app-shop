<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Show product
    public function Show($id)
    {
        return 'Eo que tal!, estas al producte : ' . $id;
    }
}
