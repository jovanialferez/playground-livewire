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

    public $pageSize = 5;
    public $search = '';

    public function render()
    {
        return view('livewire.users-list', [
            'users' => User::search($this->search)->paginate($this->pageSize),
        ]);
    }
}
