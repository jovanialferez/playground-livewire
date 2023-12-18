<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Users')]
class UsersList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.users-list', [
            'users' => User::paginate(10),
        ]);
    }
}
