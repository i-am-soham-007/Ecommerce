<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected  $table = "products";


    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id')->where('status',1)->select('id','category_name');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Models\SubCategory','subcategory_id')->where('status',1)->select('id','subcategory_name');
    }
    public function section()
    {
        return $this->belongsTo('App\Models\Section','section_id')->select('id','name');
    }

    public function parentSubCategory()
    {
        return $this->belongsTo('App\Models\SubCategory','parent_id')->select('id','subcateegory_name');
    }

    public function attributes()
    {
        return $this->hasMany('App\Models\ProductsAttribute')->where('status',1)->orwhere('status',0);
    }
    public function images()
    {
        return $this->hasMany('App\Models\ProductsImage')->where('status',1)->orwhere('status',0);
    }
}
