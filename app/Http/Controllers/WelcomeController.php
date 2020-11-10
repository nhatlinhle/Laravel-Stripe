<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('featured', true)->take(8)->get();
        return view('welcome', compact('products'));
    }
}
