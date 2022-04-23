<?php

namespace App\Http\Livewire\Follow;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Button extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function follow()
    {
        Auth::user()->follow($this->user);
        $this->emit('followed');
    }

    public function unfollow()
    {
        Auth::user()->unfollow($this->user);
        $this->emit('followed');
    }

    public function render()
    {
        return view('livewire.follow.button');
    }
}