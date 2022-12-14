<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['title', 'slug', 'component', 'data_order', 'status', 'parent_id'];
}
