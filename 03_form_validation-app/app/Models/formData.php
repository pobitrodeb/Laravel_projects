<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formData extends Model
{
    use HasFactory;

    private  static $teamMember;
    public static function newMember($request)
    {
        self::$teamMember                       = new formData();
        self::$teamMember->fullName             = $request->fullName;
        self::$teamMember->email                = $request->email;
        self::$teamMember->password             = $request->password;
        self::$teamMember->save();
    }
}
