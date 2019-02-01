<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\NoteCategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function form($noteId)
    {
        if ($noteId == 0) {
            $note = (object)[
                'id' => 0,
                'category_id' => '',
                'title' => '',
                'note' => ''
            ];
        } else {
            try {
                $note = Note::findOrFail($noteId);
            } catch (ModelNotFoundException $e) {
                return $this->form(0);
            }
        }
        $categories = NoteCategory::orderBy('name')->get();

        $data = [
            'categories' => $categories,
            'note' => $note
        ];
        return view('note.form', $data);
    }

    public function formSave(Request $request)
    {
        $noteId = $request->input('noteId');
        $data = [
            'category_id' => $request->input('categoryId'),
            'title' => $request->input('title'),
            'note' => $request->input('note'),
        ];
        if ($noteId == 0) {
            Note::create($data);
        } else {
            $note = Note::find($noteId);
            $note->update($data);
            $note->save();
        }
        return "Note data saved";
    }

    public function getNotes()
    {
        $data = [
            'noteCategories' => NoteCategory::orderBy('name')->get()
        ];
        return view('note.list', $data);
    }
}
