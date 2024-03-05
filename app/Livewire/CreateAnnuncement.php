<?php

namespace App\Livewire;

use App\Models\Annuncement;
use Livewire\Component;

class CreateAnnuncement extends Component
{
    public $title;
    public $body;
    public $price;

    public function store ()
    {
        Annuncement::create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);
    }


    public function render()
    {
        return view('livewire.create-annuncement');
    }
}
