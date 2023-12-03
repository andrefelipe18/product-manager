<?php

namespace App\Livewire\Dash;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public function render()
    {
        return view('livewire.dash.users', [
            'users' => User::all(),
        ]);
    }
}
