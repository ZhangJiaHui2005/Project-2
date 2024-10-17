<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function product_details(Product $product) {
        return view('customers.product_details', compact('product'));
    }

    public function product_comment(Request $request) {
        $request->validate([
            'comment' =>'required|min:10|max:500'
        ], [
            'comment.required' => 'Please do not let the input empty',
            'comment.min' => 'Comment must be at least 10 characters',
            'comment.max' => 'Comment must be at most 500 characters'
        ]);

        Comment::create([
            'user_id' => Auth::guard('web')->id(),
            'product_id' => $request->product_id,
            'content' => $request->comment
        ]);

        \Flasher\Toastr\Prime\toastr("Comment added", "success");

        return redirect()->back();
    }

    public function delete_comment(Comment $comment) {
        if (\auth('web')->user()->can('change_comment', $comment)) {
            $comment->delete();
        }

        \Flasher\Toastr\Prime\toastr("Comment deleted", "success");
        return redirect()->back();
    }

    public function blog() {
        return view('customers.blog');
    }

    public function contact() {
        return view('customers.contact');
    }
}
