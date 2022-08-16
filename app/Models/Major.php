<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $hidden = [];
    protected $fillable = ['name', 'slug', 'description'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
