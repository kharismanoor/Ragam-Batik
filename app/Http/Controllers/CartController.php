<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;

use Illuminate\Http\Request;


class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $carts = session()->get('cart', []);

        $id = $request->id;
        $product = Product::find($id);

        if (isset($carts[$id])) {
            $carts[$id]['quantity']++;
        } else {
            $carts[$id] = [
                "title" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "size" => $product->size,
            ];
        }

        session()->put('cart', $carts);

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function showCart()
    {
        $carts = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }
    


}
