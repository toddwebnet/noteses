<?php

namespace App\Models;

use App\Models\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Model;

class ActiveModel extends Model
{

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ActiveScope());
    }

    public function deactivate()
    {
        $this->is_active = false;
        $this->save();
    }
}
