<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    
    public function render()
    {
        return view('livewire.register');
    }

    protected $rules = [
        'name' => ['required', 'string', 'max:255','min:3'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string'],
        'password_confirmation' => ['required', 'string','same:password'],

    ];

    protected $messages = [

        'name.required' => 'Tidak Boleh Kosong',
        'email.required' => 'Tidak Boleh Kosong',
        'email.email' => 'Alamat Email Tidak Valid.',
        'email.unique' => 'Email Sudah Tersedia.',

    ];
    //ini function updated bawaan livewire
    public function updated($propertyName)
    {
        
        $this->validateOnly($propertyName);
    }

    // public function storeUser()
    // {
    //     $this->validate();

        
    //     dd('Berhasil');
    // }
}