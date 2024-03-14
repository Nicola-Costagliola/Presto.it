<?php

namespace App\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class RevisorList extends Component
{

    public $announcements = [];
    //public $numbers = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen',];

    // viene richiamato solo appena si inizializza la pagina
    public function mount() {

        $this->announcements = Announcement::all();
        //$this->numbers;
    }


    public function render()
    {
        return view('livewire.revisor-list');
    }
}
