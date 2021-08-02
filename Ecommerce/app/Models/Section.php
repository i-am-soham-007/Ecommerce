<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Section extends Model
{
  //  use HasFactory;
    use Notifiable;

    protected $table = "sections";
    protected $fillable = ['id','name','status'];

    public static function sections(){
      $getSections = Section::with('subcategories')->where('status',1)->get();
      $getSections = json_decode(json_encode($getSections), true);
      return $getSections;
    }

    

    public function subcategories()
    {
      return $this->hasMany('App\Models\SubCategory','section_id')->where(['parent_id'=>'ROOT','status'=>1])->with('childsubcategory');
    }
}
