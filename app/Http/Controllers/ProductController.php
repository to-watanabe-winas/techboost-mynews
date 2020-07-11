<?php

namespace App\Http\Controllers;

use App\Product;
use App\Review;
use Illuminate\Http\Request;

/*
* 商品コントローラ
*/
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();

        $product_reviews = [];
        foreach($products as $product) {
            $reviews = $product->reviews;
            $product_reviews[] = [
                'product' => $product,
                'reviews' => $reviews,
            ];
        }

        return view('product.index', [ 'product_reviews' => $product_reviews]);
    }

}
