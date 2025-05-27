<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request) {
    $results = Product::with(['brand', 'category'])->filter($request->all())->paginate(20);
    return view('products.search', compact('results'));
}

public function index() {
    return view('products.index');
}
}
