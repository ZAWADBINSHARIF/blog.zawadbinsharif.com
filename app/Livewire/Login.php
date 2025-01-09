<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $errorMessage;


    public function submit()
    {

        try {

            $validation = $this->validate([
                "email" => ['required', 'email'],
                "password" => ['required']
            ]);


            if (Auth::attempt($validation)) {

                // Todo: set session and redirect to "/" page
                session()->regenerate();


                $this->errorMessage = null;
                return redirect()->to('/');
            } else {
                $this->errorMessage = "Invalid email or password.";
            }
        } catch (\Exception $error) {
            $this->errorMessage = "Invalid email or password.";
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
