<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Category extends Model
{
    //use HasFactory;
    //use Notifiable;

    protected $table = "categories";
    protected $fillable = [
        'id',
        'category_name',
        'category_image',
        'category_discount',
        'description',
        'url',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'status'
    ];


    public function category(){
       // return $this->hasMany('App\Models\Category::class','parent_id')->with('status',1);
       //return $this->hasMany(Category::class, 'parent_id')->with('status',1);
       return $this->hasMany('App\Models\Category')->where('status',1);
    }

    public static function categories(){
        $getCategory = Category::where('status',1)->get();
        $getCategory = json_decode(json_encode($getCategory), true);
        //echo '<pre>'; print_r($getCategory); die;
        return $getCategory;
    }

}
