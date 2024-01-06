<?php

namespace App\Livewire\Website\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    public $password;

    public function render()
    {
        return view('livewire.website.auth.login')->layout('website.login');
    }

    public function login(){
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt(['email' => strtolower($this->email), 'password' => $this->password])){
            $this->redirect(route('my-profile'),navigate: true);
        }else{
            session()->flash('error', 'Invalid Credentials');
        }
    }
}
