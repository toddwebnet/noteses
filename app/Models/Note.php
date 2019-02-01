<?php

namespace App\Models;

class Note extends ActiveModel
{
    protected $fillable = ['category_id', 'title', 'note'];
}
