<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wish extends Model
{
    use HasFactory;

    /*If you do not want these columns to be automatically managed by Eloquent, 
    you should define a $timestamps property on your model with a value of false*/
    public $timestamps = false;

    
    //define the model
    protected $fillable = ['title', 'description', 'is_fulfilled', 'created_at'];
}
