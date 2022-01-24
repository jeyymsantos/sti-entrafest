<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;
use App\Student;
use App\User;
use Auth;

class EditController extends Controller
{

    function index(){
        return view('profile');
    }

    function insertData(Request $req){
        $req -> validate([
            'birthplace'    => 'required',
            'status'        => 'required',
            'nationality'   => 'required',
            'religion'      => 'required'
        ]);

        $image_file = $req->profile;
        $image = Image::make($image_file);

        $form_data = array(
            'user_id'       => Auth::user()->id,
            'birthplace'    => $req -> birthplace,
            'status'        => $req -> status,
            'nationality'   => $req -> nationality,
            'religion'      => $req -> religion,
            'profile'       => $req -> profile
        );

        Student::create($form_data);
        return redirect()->route('profile');
    }

    function editData(Request $req){

        $req -> validate([
            'birthplace'    => 'required',
            'status'        => 'required',
            'nationality'   => 'required',
            'religion'      => 'required',
            'profile'       => 'required'
        ]);

        $student = new Student;

        $student -> user_id = Auth::user()->id;
        $student -> birthplace = $req -> birthplace;
        $student -> status = $req -> status;
        $student -> nationality = $req -> nationality;
        $student -> religion = $req -> religion;

        $file = $req->profile;
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file -> move('pics/', $filename);
        $student->profile = $filename;
        
        $student -> save();

        return redirect()->route('profile');
    }

    public function Profile(){

        $student = Student::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->first();
        return view('profile.profile')->with (['student' => $student]);
    }

    public function EditProfile(){

        $student = Student::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->take(2);
        return view('profile.edit')->with (['student' => $student]);
    }


    
}
