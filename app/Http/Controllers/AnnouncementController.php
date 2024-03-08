<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncement ()
    {
        return view('announcements.create');
    }


    public function showAnnouncement(Announcement $announcement){

        return view('announcements.show', compact('announcement'));
    }

    public function showAll (){

        $announcements = Announcement::paginate(5);

        return view('announcements.show-all', compact('announcements'));
    }
}
