<?php

namespace App\Livewire;

use App\Models\Annuncement;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateAnnuncement extends Component
{
    #[Validate]
    public $title;
    #[Validate]
    public $body;
    #[Validate]
    public $price;
    public $category;


    protected function rules() {

        return [

            'title'=>'required',
            'body'=>'required',
            'price'=>'required|max:8',
        ];

    }

    protected function messages() {

        return [

            'title.required'=>'Il Titolo è obbligatorio',
            'body.required'=>'La Descrizione è obbligatoria',
            'price.required'=>'Il Prezzo è obbligatorio',
            'price.max'=>'Il Prezzo è massimo 8 cifre',
        ];
    }

    public function store ()
    {
        $this->validate();

        Annuncement::create([
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

    }


    public function render()
    {

        return view('livewire.create-annuncement', ['categories' => Category::all()]);
    }


}
