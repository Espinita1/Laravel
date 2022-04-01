<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NickNameModel;
use App\Models\SectionModel;

class NickNameController extends Controller
{
    

    public function index() 
    {
        
        //Arr::($teachers);
        $teachers = NickNameModel::all();
        $mydata = [['type' => 'Red', 'price' => '9']];

    return view('mytestpage',['arrteachers' => $teachers]);
    }

    public function shown($id)
    {
        return view('mytestpagecopy', ['id' => $id]);
    }
}
