<?php

namespace App\Http\Controllers;

use App\Note;
use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
  public function create()
    {


    return view('groups/create');
    
    }

   public function store()
    {

     request()->validate([ 'name' => 'required']);

     $group = new Group;
     $group->name =request()->name;
     $group->save();

     return redirect('notes');
    }

   
}



