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
    $notes = $group->notes;

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

    	Note::create(request()->all());
    	//$note = new Note;
    	//$note->title = request()->title;
    	//$note->body = request()->body;
    	//$note->important = is_null(request()->important) ? 0 : 1;
    	//$note->save();

    	//return redirect('/notes');
    	return back();
    }

    public function edit(Note $note)
    {

        $groups = Group::all();
        return view('notes/edit',compact('note','groups'));
    
    }

      public function update(Note $note)
    {

         request()->validate([

            'title' => 'required',
            'body' => 'required|max:140',

        ]);

        $note->update(request()->all());

        return redirect('notes');
    
    
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect('/notes');
    }

}
