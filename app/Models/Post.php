<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = []; //If we want to make all the fields mass assignable

    //protected $guarded = ['id']; //All are fillable except id

    //protected $guarded = ['*']; //If we want to block all the fields from being mass-assigned

    // protected $fillable = [ //All these are fillable
    //     'title',
    //     'excerpt',
    //     'body',
    // ];

    //Alternativa para buscar por slug
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function category() 
    {
        //hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }
}
