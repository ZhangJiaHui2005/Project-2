<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $products = Product::paginate(15);

        return view("customers.index", compact("products"));
    }

    public function about() {
        return view('customers.about');
    }

    public function furnitures() {
        $products = Product::paginate(15);

        return view('customers.furniture', compact('products'));
    }

    public function blog() {
        return view('customers.blog');
    }

    public function contact() {
        return view('customers.contact');
    }
}
