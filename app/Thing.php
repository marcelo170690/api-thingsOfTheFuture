<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];
}
