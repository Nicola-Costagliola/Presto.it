<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index(Announcement $announcement)
    {
        return view('revisor.index', compact(['announcement', 'numbers']));
    }

    public function manage()
    {
        return view('revisor.manage');
    }

    public function acceptAnnouncement (Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect( route('revisor.manage'))->with('message', 'Annuncio accettato');
    }

    public function rejectAnnouncement (Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect( route('revisor.manage'))->with('error', 'Annuncio è stato rifiutato');
    }

    public function becomeRevisor()
    {
        return view('revisor.form');
    }

    public function becomeRevisorSend(Request $request)
    {


        Mail::to('admin@example.com')->send(new BecomeRevisor( Auth::user(), $request->msg ));


        // Mail::to(''$request->user())->send(new OrderShipped($order));

        // return redirect('/orders');

        return redirect()->back()->with(['message' => 'La richiesta è stata inviata correttamente']);

    }


    public function makeRevisor(User $user)
    {
        Artisan::call('presto:MakeUserRevisor', ["email" => $user->email]);
        return redirect('/')->with('message', 'L\' utente ' . $user->name . ' è diventato revisore');
    }

    public function reviewedAnnouncement (Announcement $announcement)
    {
        $announcement->setAccepted(null);
        return redirect()->back()->with('message', 'Annuncio da revisionare');
    }

}
