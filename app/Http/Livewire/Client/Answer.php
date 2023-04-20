<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Answer extends Component
{


    public $question;

    public $question_created=[
        'open' => false,
        'body' => '',
    ];

    public function render()
    {
        return view('livewire.client.answer');
    }
}
