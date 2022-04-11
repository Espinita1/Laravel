<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NickNameModel;
use App\Models\SectionModel;
use App\Models\PostTeacher;

class NickNameController extends Controller
{
    

    public function Index() 
    {
        
        //Arr::($teachers);
        $teachers = NickNameModel::all();
        $sections = SectionModel::all();
        $teacherId = NickNameModel::where('idTeacher', 1)->get();
       // var_dump($teacherId);
        return view('mytestpage',
        ['arrteachers' => $teachers, 
        'arrTeacher' => $teacherId, 
        'arrSections' => $sections]);
    
    }

    public function PostIt()
    {
        $sections = SectionModel::all();
        return view('post-teacher', ['arrSections' => $sections]);
    }

    public function TeacherInsert(Request $fromPostTeacher)
    {

        //var_dump($fromPostTeacher);
        
        $postTeacher = new PostTeacher();
        var_dump($postTeacher);
        $postTeacher->fill(
            ['teaFirstName' => $fromPostTeacher['fName'], 
            'teaLastName' => $fromPostTeacher['lName'],
            'teaGender' => $fromPostTeacher['gender'],
            'teaOrigin' => $fromPostTeacher['sName'],
            'teaSurname' => $fromPostTeacher['txtbxOrigin'],
            'fkSection' => $fromPostTeacher['section']
        ])->save();
        return redirect()->back()->with('message', "Is this a succes?");
    }

}
