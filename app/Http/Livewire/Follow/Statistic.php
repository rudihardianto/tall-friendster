<?php

namespace App\Http\Livewire\Follow;

use Livewire\Component;

class Statistic extends Component
{
    public $user;
    protected $listeners = ['followed'];

    public function followed()
    {}

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.follow.statistic');
    }
}