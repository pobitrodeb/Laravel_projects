<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Enroll extends Model
{
    use HasFactory;
    private static $enroll;
    public static function newEnroll($request,$student_id,$course_id)
    {
        self::$enroll = new Enroll();
        self::$enroll->student_id       = $student_id;
        self::$enroll->course_id       = $course_id;
        self::$enroll->enroll_date      = date('y-m-d');
        self::$enroll->enroll_timestamp = strtotime(date('y-m-d'));
        self::$enroll->payment_type     = $request->payment_type;
        self::$enroll->save();
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }
    public static function updateEnrollStatus($id)
    {
        self::$enroll = Enroll::find($id);
        if(self::$enroll->enroll_status == 'Pending'){
            self::$enroll ->enroll_status = 'Complete';
            self::$enroll ->payment_status = 'Complete';
            self::$enroll ->payment_amount = self::$enroll->course->offer_fee>0 ? self::$enroll->course->offer_fee : self::$enroll->course->fee;


            self::$enroll->save();
        }
    }
}
