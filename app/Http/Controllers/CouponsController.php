<?php

namespace App\Http\Controllers;

use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    //Store a coupon
    public function store(Request $request) {
        $coupon = Coupon::findByCode($request->code);
        
        if(!$coupon) {
            return redirect()->route('checkout.index')->with('error', 'Your coupon code is invalid');
        }

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
        ]);

        return redirect()->route('checkout.index')->with('success', 'Your coupon code has been applied');
    }

    //Destroy a coupon
    public function destroy() {
        session()->forget('coupon');

        return redirect()->route('checkout.index')->with('success', 'Your coupon has been removed!');
    }
}
