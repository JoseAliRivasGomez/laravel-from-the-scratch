<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $guarded = ['id']; //All are fillable except id

    //protected $guarded = []; //If we want to make all the fields mass assignable

    //protected $guarded = ['*']; //If we want to block all the fields from being mass-assigned

    protected $fillable = [
        'title',
        'excerpt',
        'body',
    ];
}
