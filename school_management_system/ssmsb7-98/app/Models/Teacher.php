<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    private static $image,$imageUrl,$teacher,$imageName,$directory;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'img/teacher-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newTeacher($request){
        self::$teacher = new Teacher();
        self::$teacher->name = $request->name;
        self::$teacher->email = $request->email;
        self::$teacher->password =bcrypt($request->password);
        self::$teacher->mobile = $request->mobile ;
        self::$teacher->image = self::getImageUrl($request);
        self::$teacher->save();
    }
    public static function updateTeacher($request,$id){
        self::$teacher = Teacher::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imageUrl=self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$teacher->image;

        }
        self::$teacher->name = $request->name;
        self::$teacher->email = $request->email;
        if (isset($request->password)){
            self::$teacher->password =bcrypt($request->password);
        }
        self::$teacher->mobile = $request->mobile ;
        self::$teacher->image = self::$imageUrl;
        self::$teacher->save();
    }
    public static function deleteTeacher($id)
    {
        self::$teacher = Teacher::find($id);

        if (file_exists(self::$teacher->image))
        {
            unlink(self::$teacher->image);
        }
        self::$teacher->delete();
    }
}
