<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnuncementController extends Controller
{
    public function createAnnuncement () 
    {
        return view('annuncements.create');
    }
}
