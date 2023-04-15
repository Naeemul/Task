<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contact;

class FrontendController extends Controller
{
    public function index()
    {
        $product = new Product();
        $category = new Category();
        return view('frontend.home', ['products' => $product->all() , 'categories' => $category->all()]);
    }
    public function product()
    {
        $product = new Product();
        return view('frontend.product', ['products' => $product->all()]);
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function contactFormSubmit(Request $contactData)
    {
        Contact::contactFormSubmited($contactData);
        return redirect()->route('contact')->with('msg', 'Your message is receieved.');
    }
    public function productDetail($productID)
    {
        $product = Product::find($productID);
        return view('frontend.productDetail', ['product' => $product]);
    }
}


