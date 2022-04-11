<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTeacher extends Model
{

        protected $table = 't_teachers';
        protected $fillable = [
            'teaFirstName',
            'teaLastName',
            'teaGender',
            'teaSurname',
            'teaOrigin',
            'fkSection'
        ];
}
