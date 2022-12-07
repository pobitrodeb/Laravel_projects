<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private  static $category;
    private  static $imageName;
    private  static $directory;
    private  static $imageUrl;
    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'category-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newCategory($request)
    {
        self::$category                 = new Category();
        self::$category->name           = $request->name;
        self::$category->description    = $request->description;
        self::$category->image          = self::getImageUrl($request->file('image'));
        self::$category->status         = $request->status;
        self::$category->save();
    }
    public static function updateCatetory($request, $id){
            self::$category = Category::find($id);
            if($request->file('image')){
                if(file_exists(self::$category->image)){
                    unlink(self::$category->image);
                }
                self::$imageUrl = self::getImageUrl($request->file('image'));
            }
            else{
                self::$imageUrl = self::$category->image;
            }
        self::$category->name            = $request->name;
        self::$category->description     = $request->description;
        self::$category->image           = self::$imageUrl;
        self::$category->status          = $request->status;
        self::$category->save();
    }
    public static function deletecategory($id){
        self::$category = category::find($id);
        if(file_exists(self::$category->image)){
            unlink(self::$category->image);
        }
        self::$category->delete();
    }
}
