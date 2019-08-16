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
        $products = $products->load('category');
        // $category = $category -> load('products');
		return view('product.list_products',['products' => $products]);
    }

    public function createForm ()
	{   
        $categories = Category::all();
		$categories = $categories->load('products');
		return view('product.add_product',['categories' => $categories]);
    }
    public function create()
    {

    }
}
