<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return view('pages.user.about');
    }

    public function service(){
        return view('pages.user.service');
    }

    public function contact(){
        return view('pages.user.contact');
    }

    public function cekresi(){
        return view('pages.user.cek-resi');
    }

    public function checkResi(Request $request)
    {
        $request->validate([
            'resi' => 'required|string'
        ]);

        $product = Product::where('resi', $request->resi)->first();

        return view('pages.user.cek-resi', ['product' => $product]);
    }
}
