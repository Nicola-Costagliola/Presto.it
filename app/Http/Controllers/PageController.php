<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home ()
    {
        $announcements = Announcement::take(6)->orderBy('created_at', 'DESC')->get();
        return view('home',  compact('announcements'));
    }

    public function categoryShow(Category $category){

        return view('categories.show-one', compact('category'));
    }

}
