<?php

namespace App\Livewire\Website;

use Livewire\Component;
use App\Models\User;

class Home extends Component
{
    public function render()
    {
        return view('livewire.website.home')->title(env('APP_NAME').' - About');
    }

}
