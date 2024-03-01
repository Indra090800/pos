<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //all products
        $products = Product::orderBy("id","desc")->get();
        return response()->json([
            'success' => true,
            'message' => 'List Data Products',
            'data' => $products
        ], 200);
    }
}
