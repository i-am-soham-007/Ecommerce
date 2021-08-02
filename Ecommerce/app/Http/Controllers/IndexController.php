<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class IndexController extends Controller
{
    //
    public function index(){
        $feturedItemCount = Product::where('is_featured','Yes')->where('status', '1')->count();
        $feturedItems = Product::where('is_featured','Yes')->where('status',1)->get()->toArray();
        $feturedItemsChunks = array_chunk($feturedItems,4);  // features products

        $newProducts = Product::orderBy('id','Desc')->limit(6)->where('status',1)->get()->toArray();
        return view('main')->with(compact('feturedItemCount','feturedItemsChunks','newProducts'));
    }
}
