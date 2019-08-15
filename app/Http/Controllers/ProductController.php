<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $products = $products->load('categories');
        // dd($products->toArray());
		return view('product.list_products',['products' => $products]);
    }
}
