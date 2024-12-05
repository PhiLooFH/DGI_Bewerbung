<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wish;


class WishController extends Controller
{
    //
    public function showdata()
{
return view('WishList')->with('wishes', Wish::all());
}
    
}
