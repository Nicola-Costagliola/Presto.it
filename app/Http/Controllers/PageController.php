<?php

namespace App\Http\Controllers;

use App\Models\Annuncement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home ()
    {
        return view('home', ['annuncements' => Annuncement::all()]);
    }
}
