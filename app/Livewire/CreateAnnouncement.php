<?php

namespace App\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    #[Validate]
    public $title;
    #[Validate]
    public $body;
    #[Validate]
    public $price;

    public $category= 1;


    protected function rules() {

        return [

            'title'=>'required',
            'body'=>'required',
            'price'=>'required|max:100000000|numeric',

        ];

    }

    protected function messages() {

        return [

            'title.required'=>'Il Titolo è obbligatorio',
            'body.required'=>'La Descrizione è obbligatoria',
            'price.required'=>'Il Prezzo è obbligatorio',
            'price.max'=>'Il Prezzo deve essere in cifre (massimo 8)',

        ];
    }

    public function store ()
    {
        $this->validate();

        Announcement::create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'category_id' => $this->category,
        ]);

        $this->resetForm();


        session()->flash('success', 'Annuncio creato correttamente');

    }

    public function resetForm()
    {
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->category =1;

    }


    public function render()
    {

        return view('livewire.create-announcement');
    }


}
