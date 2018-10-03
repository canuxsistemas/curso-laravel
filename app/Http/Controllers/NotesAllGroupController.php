<?php

namespace App\Http\Controllers;
use App\Group;
use App\Note;

use Illuminate\Http\Request;

class NotesAllGroupController extends Controller
{
    public function index ()
    {

    	$groups = Group::all();
    	$notes = Note::all();

    	return view('notes/index', compact('notes','groups'));
    }
}
