<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserCreate extends Component
{
    public UserForm $form;

    public function save()
    {
        $this->validate();

        User::create($this->form->all());

        $this->redirectRoute('users', navigate: true);
    }

    public function render()
    {
        return view('livewire.user-create');
    }
}
