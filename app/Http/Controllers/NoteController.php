<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{



public function index()
    {
        
      
         $query=Note::query();
         $filters = request()->only(['title']);
         if (isset($filters['title']) && $filters['title']) {
            $query->where('title', 'like', '%' . $filters['title'] . '%')
            ->orWhere('content', 'like', "%$query%")
            ->get();
            }
            $user = Auth::user(); 
            $notes = $user->notes;
           
         return view('notes.index',compact('notes'));
       

    }

    public function create()
    {
        $notes = Note::latest()->get();
        return view('note.create', compact('notes'));
    }

    public function store(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'string',
        ]);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->user_id = Auth::user()->id;

        $note->save();
       
       
        return redirect()->route('note.index')->with('message','note has been Added successfully');
    }

    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('note.show', compact('note'));
    }

    public function adminShow($id)
    {
        $note = Note::findOrFail($id);
        return view('note.adminShow', compact('note'));
    }

    
   

    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('note.edit', compact('note'));
    }

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $request->validate([
            'title' => 'required|string',
            'content' => 'string',
        ]);


        $note->title = $request->title;
        $note->content = $request->content;

        $note->update();
        
        return redirect()->route('note.index')->with('update','note has been updated successfully');
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
      

        $note->delete();

        return redirect()->back()->with('delete','note has been Deleted successfully');
    }


}
