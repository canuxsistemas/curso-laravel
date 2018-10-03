<?php

namespace App\Http\Controllers;


use App\Note;
use App\Group;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index(Group $group)
    {

    $groups = Group::all();
    $notes = \Auth::user()->notes()->where('group_id' , $group->id)->get();
   // $notes = Note::all();
     //$notes = $group->notes()->where('user_id',\Auth::user()->id)->get();

    return view('notes/index' , compact('notes','groups'));

    }

    public function show(Note $note)
    {


    return view('notes/show' , ['note' => $note]);
    
    }

     public function create()
    {

    $groups = Group::all();
    return view('notes/create', compact('groups'));
    
    }

    public function store()
    {
        
        request()->validate([

            'title' => 'required',
            'body' => 'required|max:140',

        ]);

        $note = new Note(request()->all());
        \Auth::user()->notes()->save($note);

    	//return redirect('/notes');
    	return redirect('notes/all');
    }

    public function edit(Note $note)
    {

        $groups = Group::all();
        return view('/notes/edit',compact('note','groups'));
    
    }

      public function update(Note $note)
    {

         request()->validate([

            'title' => 'required',
            'body' => 'required|max:140',

        ]);

        $note->update(request()->all());

        return redirect('notes/all');
    
    
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return back();
       // return redirect('notes/all');
    }

}
