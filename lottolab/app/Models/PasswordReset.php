<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $table = "password_resets";
    protected $guarded = ['id'];
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'email', 'token'
    ];
}
