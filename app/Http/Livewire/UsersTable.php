<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Systemattic\LivewireSort\Traits\WithSorting;

class UsersTable extends Component
{
    use WithSorting;

    public $sortField;

    public $sortDirection;

    protected $listeners = ['sorting'];

    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::orderBy($this->sortField, $this->sortDirection)->get()
        ]);
    }
}
