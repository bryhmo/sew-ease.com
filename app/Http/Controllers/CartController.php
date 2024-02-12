<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cartitems = Cart::instance('cart')->content();
        return view('cart',['cartitems' =>$cartitems]);
    }

    public function addtoCart(Request $request)
    {
        $product = Product::find($request->id);
        $price = $product->sale_price? $product->sale_price : $product->regular_price;
        Cart::instance('cart')->add($product->id,$product->name,$request->quantity,$price)->associate('App\Models\Product');
        return redirect()->back()->with('message','success ! item has been added successfully');
    }
}