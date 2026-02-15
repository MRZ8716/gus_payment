<?php

namespace App\Http\Modules\Authentication\models;

use Illuminate\Database\Eloquent\Model;

class Authentication_m extends Model
{
    protected $table = 'm_user';
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
