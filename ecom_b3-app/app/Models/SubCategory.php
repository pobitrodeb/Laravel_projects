<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private  static  $subcategory;
    private  static  $imageName;
    private  static  $directory;
    private  static  $imageUrl;
    public static  function  getImageUrl($image){
        self::$imageName =$image->getClientOriginalName();
        self::$directory = 'sub-category-image/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public  static function newSubcategory($request){
        self::$subcategory = new SubCategory();
        self::$subcategory->category_id         =$request->category_id ;
        self::$subcategory->name                =$request->name;
        self::$subcategory->description         =$request->description;
        self::$subcategory->image               =self::getImageUrl($request->file('image'));
        self::$subcategory->status              =$request->status;
        self::$subcategory->save();
    }
}
