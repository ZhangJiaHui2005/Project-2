<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        return view("customers.index");
    }

    public function about() {
        return view('customers.about');
    }

    public function furnitures() {
        return view('customers.furniture');
    }

    public function blog() {
        return view('customers.blog');
    }

    public function contact() {
        return view('customers.contact');
    }
}
