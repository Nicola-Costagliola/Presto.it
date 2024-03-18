<?php

namespace App\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    #[Validate]
    public $title;
    #[Validate]
    public $body;
    #[Validate]
    public $price;

    public $category= 1;

    #[Validate]
    public $temporary_images ;
    public $images = [];

    public $announcement;



    protected function rules() {

        return [

            'title'=>'required',
            'body'=>'required',
            'price'=>'required|max:100000000|numeric',
            'temporary_images.*'=> 'image|max:2048',

        ];

    }

    protected function messages() {

        return [

            'title.required'=>'Il Titolo è obbligatorio',
            'body.required'=>'La Descrizione è obbligatoria',
            'price.required'=>'Il Prezzo è obbligatorio',
            'price.max'=>'Il Prezzo deve essere in cifre (massimo 8)',
            'temporary_images.required'=> 'L\'immagine è richiesta',
            'temporary_images.*.image'=> 'I file devono essere immagini',
            'temporary_images.*.max'=> 'L\'immagine dev\'essere massimo di 2048',

        ];
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*'=>'image|max:2048',
        ])) {
        foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
           unset($this->images[$key]);
        }
    }

    public function store ()
    {
        $this->validate();

        $announcement= Announcement::create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'category_id' => $this->category,
        ]);

        

        $announcement->user_id = auth()->user('')->id;

        $announcement->save();

        if (count($this->images)) {
            foreach ($this->images as $image) {
                $this->announcement->images()->create(['path'=>$image->store('images', 'public')]);
            }
        }

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
