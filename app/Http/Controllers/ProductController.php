<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $inventry_news = Inventry_new::all();
        return view('products', compact('inventry_news'));
    }


}
