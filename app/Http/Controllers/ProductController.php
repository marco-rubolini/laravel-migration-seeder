<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $prodotti = Product::all();
        // dd($prodotti);
        $data = [
            'lista_prodotti' => $prodotti
        ];
        return view('products', $data);
    }
}
