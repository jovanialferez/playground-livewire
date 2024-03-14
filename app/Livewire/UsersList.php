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
    public $sortColumn = 'name';
    public $sortDirection = 'ASC';

    public function delete(User $user)
    {
        $user->delete();
    }

    public function sortBy(String $column)
    {
        if ($this->sortColumn !== $column)
        {
            $this->sortColumn = $column;
            $this->sortDirection = 'ASC';
            return;
        }

        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection === 'ASC' ? 'DESC' : 'ASC';
    }

    public function render()
    {
        return view('livewire.users-list', [
            'users' => User::search($this->search)
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate($this->pageSize),
        ]);
    }
}
