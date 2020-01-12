<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function author()
    {
        return $this->belongsTo('App\Employee', 'created_by');
    }

    public function permissionAuthor()
    {
        return $this->belongsTo('App\Employee', 'status_changed_by');
    }
}
