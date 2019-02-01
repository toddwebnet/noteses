<?php

namespace App\Models;

class NoteCategory extends ActiveModel
{
    protected $fillable = ['name'];

    public function notes()
    {
        return $this->hasMany(Note::class, 'category_id');
    }
}
