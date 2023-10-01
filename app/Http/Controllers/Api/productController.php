<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;


class productController extends Controller
{
  public function index()
  {
        $products = Product::all();
        return response()->json([
            'status' => 200,
            'data'=> $products
        ]);
    
  }
}
