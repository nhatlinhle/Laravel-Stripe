<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mightAlsoLike = Product::mightAlsoLike()->get();
        return view('cart', compact('mightAlsoLike'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $price = $request->price;

        $duplicates = Cart::search( function( $cartItem, $rowId ) use ($request) {
            return $cartItem->id === $request->id;
        });

        if($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('info', 'Item is already in your cart');
        }

        Cart::add($id, $name, 1, $price, 550)->associate('App\Product'); 

        return redirect()->route('cart.index')->with('success', 'Item added to cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cart::remove($id);

        return back()->with('success', 'Item has been removed');
    }

    public function switchToSaveForLater($id) {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search( function( $cartItem, $rowId ) use ($id) {
            return $rowId === $id;
        });

        if($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('info', 'Item is already in your Saved For Later');
        }

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price, 550)->associate('App\Product');
        
        return redirect()->route('cart.index')->with('success', 'Item has been addded to your save for later basket');
    }
}
