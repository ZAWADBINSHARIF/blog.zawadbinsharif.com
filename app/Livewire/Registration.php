<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Registration extends Component
{
    #[Validate([
        'required',
        'min:3'
    ])]
    public $name;

    #[Validate([
        'required',
        'email:rfc,dns'
    ])]
    public $email;

    #[Validate([
        'min:4',
        'required',
        'confirmed'
    ])]
    public $password;

    public $password_confirmation;

    public function submit()
    {

        $validation = $this->validate([
            'name' => [
                'required',
                'min:3'
            ],
            'email' => ['required', 'email:rfc,dns', Rule::unique('users', 'email')],
            'password' => 'min:4|required|confirmed'
        ]);

        // $validation['password'] = bcrypt($validation['password']);
        $validation['password'] = Hash::make($validation['password'], [
            'rounds'=> 12
        ]);

        $user = User::create($validation);

        Auth::login($user);
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
