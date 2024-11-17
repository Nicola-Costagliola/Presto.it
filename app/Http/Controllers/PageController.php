<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class PageController extends Controller
{

    public function home ()
    {
        $announcements = Announcement::where('is_accepted', true)->take(6)->orderBy('created_at', 'DESC')->get();
        return view('home',  compact('announcements'));
    }

    public function categoryShow(Category $category)
    {
        $announcements = $category->announcements()->where('is_accepted', true)->orderBy('created_at', 'DESC')->get();

        return view('categories.show-one', compact('category', 'announcements'));
    }

    public function showAnnouncement(Announcement $announcement){

        return view('categories.show_announcement', compact('announcement'));
    }

    public function searchAnnouncements(Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(4);

        return view('announcements.show-all', compact('announcements'));
    }

    public function setLocale($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }

}
