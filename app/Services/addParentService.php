<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\add_parents;

class addParentService {
    public function add_Parent (Request $request){
        // $numbers = rand (10,1000000);
        $data = $request->input();
        // print_r($data['address']);die;
        // die(json_encode($data));
      if ($data){
        $student = new add_parents;
       
        // $student->name = $data[];
        $student->fname = $data['fname'];
          $student->lname =  $data['lname'];
          $student->gender = $data['Gender'];
          $student->occupation =  $data['occupation'];
          $student->blood_grp =  $data['blood_grp'];
          $student->religion =  $data['religion'];
          $student->email =  $data['email'];
          $student->address =  $data['address'];
          $student->phone =  $data['phone'];
          $student->picture =  $data['picture'];
          $student->message =  $data['message'];
        $student->save();
        // dd($student);
      }

    }

}