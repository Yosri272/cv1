<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;
class ProductsController extends Controller
{
    public function index()
    {
    $pro = Products::all();
    return response()->json($pro ,200);
    
    }
}