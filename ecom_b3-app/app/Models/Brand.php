<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private  static $brand;
    private  static $imageName;
    private  static $directory;
    private  static $imageUrl;
    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'brand-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newBrand($request)
    {
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image = self::getImageUrl($request->file('image'));
        self::$brand->status = $request->status;
        self::$brand->save();
    }
    public static function updateBrand($request, $id){
        self::$brand = Brand::find($id);
        if($request->file('image')){
            if(file_exists(self:: $brand->image)){
                unlink(self:: $brand->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else{
            self::$imageUrl = self:: $brand->image;
        }
        self::$brand->name            = $request->name;
        self::$brand->description     = $request->description;
        self::$brand->image           = self::$imageUrl;
        self::$brand->status          = $request->status;
        self::$brand->save();
    }
    public static function deletebrand($id){
        self:: $brand = brand::find($id);
        if(file_exists(self:: $brand->image)){
            unlink(self:: $brand->image);
        }
        self:: $brand->delete();
    }
}

