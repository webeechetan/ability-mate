<?php

namespace App\Livewire\Website\Auth;

use Livewire\Component;

class Register extends Component
{

    public function render()
    {
        return view('livewire.website.auth.register')->layout('website.register');
    }

    public function mount()
    {
    }
}
