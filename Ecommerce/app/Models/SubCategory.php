<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'subcategories';
    
    public function childsubcategory(){
        // return $this->hasMany('App\Models\Category::class','parent_id')->with('status',1);
        //return $this->hasMany(Category::class, 'parent_id')->with('status',1);
        return $this->hasMany('App\Models\SubCategory','parent_id')->where('status',1);
     }
 
     public function section(){
         return $this->belongsTo('App\Models\Section','section_id')->select('id','name');
     }
 
     public function parentsubcategory(){
         return $this->belongsTo('App\Models\SubCategory','parent_id')->select('id','subcategory_name');
     }

     public static function subcatDetails($url){
        $subcatDetails = SubCategory::select('id','subcategory_name','url')->with([
            'childsubcategory' => function($query){
                $query->select('id','parent_id')->where('status',1);
            }
            ])->where('url',$url)->first()->toArray();
        $subcateIds = array();
        $subcateIds[] = $subcatDetails['id'];
        foreach($subcatDetails['childsubcategory'] as $key => $childsubcategory){
            $subcateIds[] = $childsubcategory['id'];
        }
        return array('subcateIds'=>$subcateIds,'subcatDetails'=>$subcatDetails);
     } 
}
