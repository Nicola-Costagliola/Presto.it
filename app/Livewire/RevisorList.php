<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class RevisorList extends Component
{

    public $announcements = [];


    // viene richiamato solo appena si inizializza la pagina
    public function mount()
    {
        $this->announcements = Announcement::orderBy('created_at', 'DESC')->orderBy('is_accepted', 'DESC',)->get();
        // $this->announcements = Announcement::all();
    }


    public function render()
    {
        return view('livewire.revisor-list');
    }
}
