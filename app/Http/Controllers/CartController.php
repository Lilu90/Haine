<?php
namespace App\Http\Controllers;


use http\Env\Request;

class CartController extends Controller
{
    public function cart($id) {
        $mightAlsoLike = Product::inRandomOredr()->take(4)->get();

        return view('cart')->with('mightAlsoLike', $mightAlsoLike);
    }

    public function store(Request $request) {
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Ite, was added to your cart!');
    }

    public function empty() {
        Cart::destroy();
    }
}
