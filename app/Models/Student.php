<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    private static $student;

    public static function saveInfo($request){
        self::$student = new Student();
        self::$student->name        = $request->name;
        self::$student->email       = $request->email;
        self::$student->phone       = $request->phone;
        self::$student->address     = $request->address;
        self::$student->save();
    }
    public static function updateInfo($request){
        self::$student =  Student::find($request->id);
        self::$student->name        = $request->name;
        self::$student->email       = $request->email;
        self::$student->phone       = $request->phone;
        self::$student->address     = $request->address;
        self::$student->save();
    }
}
