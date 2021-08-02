<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SubCategory;
use App\Models\Product;
class ProductsController extends Controller
{
    //
    public function listing($url){
        $subcategoryCount = SubCategory::where(['url'=>$url,'status'=>1])->count();
        if($subcategoryCount > 0){
            $subcatDetails = SubCategory::subcatDetails($url);
            
            $subcatProducts = Product::whereIn('subcategory_id',$subcatDetails['subcateIds'])->where('status',1)->get()->toArray();
            
            //print_r($subcatDetails); die;
            return view('product-list')->with(compact('subcatProducts','subcatDetails'));
            
        }else{
            abort(404);
        }
    }

}
