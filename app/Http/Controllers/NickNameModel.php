<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class NickNameModel extends Model
{

    protected $table ='t_teachers';

    /*protected $table = [
        'teaFirstName',
        'teaLastName',
        'teaGender',
        'teaSurname',
        'teaOrigin',
        'fkSection'
    ];*/
/*
    public static function GetTeachers()
    {
        $teachers = DB::select('select * from t_teacher');//'t_teacher')->select('*')->get();
        var_dump($teachers);
        return [$teacherArray = $teachers];//->toArray();
    }*/
}
