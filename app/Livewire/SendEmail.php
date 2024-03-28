<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactAuthor;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Component
{
    #[Validate]
    public $message;

    public $announcement ;

    protected function rules() {
        return [
            'message'=>'required'
        ];
    }

    protected function messages() {
        return [
            'message.required' => 'Il testo dell\'email è obbligatorio',

        ];
    }

    public function store() {
        
        Mail::to($this->announcement->user->email)->send(new ContactAuthor( Auth::user(), $this->announcement->title, $this->message));

    }

    public function render()
    {
        return view('livewire.send-email');
    }
}
