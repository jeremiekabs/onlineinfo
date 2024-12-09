<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [

        'name' =>'required|string|min:3|max:255',
        'email' =>'required|email|min:3|max:255',
        'message' =>'required|string|min:3|max:1000'

    ];

    public function render()
    {
        return view('livewire.contact-form');
    }
    public function updated($propertyName){

        $this->validateOnly($propertyName);

    }
    public function send(){
        $validatedDate = $this->validate();

        //send mail
        Session()->flash('success', 'Message envoyé');
        $this->reset();
    }
}
