<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

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
        
    }

    public function render()
    {
        return view('livewire.send-email');
    }
}
