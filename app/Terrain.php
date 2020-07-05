<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];
}
