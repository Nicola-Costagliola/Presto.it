<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;

use App\Models\Announcement;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    #[Validate]
    public $title;
    #[Validate]
    public $body;
    #[Validate]
    public $price;

    public $category;

    public $categorySele=1;
    public $categoryOgg;

    public $finalCategory='';

    #[Validate(['temporary_images.*' => 'image|max:2048'])]
    public $temporary_images= [];

    #[Validate(['images.*' => 'image|max:2048'])]
    public $images = [];

    public $announcement;


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
            'temporary_images.*.image'=> 'I file devono essere immagini',
            'temporary_images.*.max'=> 'L\'immagine dev\'essere massimo di 2048',
            'images.image'=> 'I file devono essere immagini',
            'images.max'=> 'L\'immagine dev\'essere massimo di 2048',

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

        if($this->categoryOgg == null){
         $this->finalCategory = $this->categorySele;
        } else {
            $this->finalCategory = $this->categoryOgg->id;
        }


        $this->validate();



        $this->announcement= Announcement::create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'category_id' => $this->finalCategory,
        ]);



        $this->announcement->user_id = auth()->user('')->id;

        $this->announcement->save();


        if (count($this->images)) {

            foreach ($this->images as $image) {

                // $this->announcement->images()->create(['path'=>$image->store('images', 'public')]);
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create([
                    'path'=> $image->store($newFileName, 'public')
                ]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400, 250),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);

            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

         $this->reset();


        session()->flash('success', 'Annuncio creato correttamente');

    }

    public function resetForm()
    {
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->categorySele=1;
        $this->images = [];
        $this->temporary_images = [];

    }


    public function render()
    {

        return view('livewire.create-announcement');
    }


}
