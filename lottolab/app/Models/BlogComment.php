<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected   $table = 'blog_comments';
    protected   $primaryKey = 'id';
    protected   $guarded =[];
    protected   $fillable = ['blog_id', 'name', 'email', 'comment', 'status'];

    public function blog()
    {
        return $this->belongsTo(Blog::class,'blog_id');
    }
}
