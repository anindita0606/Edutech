<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\addParentService;

class addParentsController extends Controller
{
    public function addParent(){
        

     
   

        return view('addParent');
    }
    public function post(Request $request)
    {
      
        
        $list = new addParentService();
        $list->add_parent($request);
        return redirect()->back()->with('Successfull', 'Invalid Credentials!')->withInput();
    }
}
