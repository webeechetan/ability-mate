<?php

namespace App\Livewire\Website\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Register extends Component
{

    public $name;
    public $email;
    public $password;
    public $phone;
    public $gender;
    public $dob;


    public function render()
    {
        return view('livewire.website.auth.register')->layout('website.register');
    }

    public function register(){
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:10',
            'password' => 'required|min:6',
            'dob' => 'required',
            'gender' => 'required',
        ]);

        $user = new User();
        $user->name = $this->name;
        $user->email = strtolower($this->email);
        $user->phone = $this->phone;
        $user->password = Hash::make($this->password);
        $user->dob = $this->dob;
        $user->gender = $this->gender;
        $user->save();

        Auth::login($user);

        $this->redirect(route('my-profile'),navigate: true);
    }

}
