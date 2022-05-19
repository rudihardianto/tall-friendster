<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;
use App\Models\Timeline\Status;

class Show extends Component
{
    public $user;
    public $perPage = 10;

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function mount($identifier)
    {
        $this->user = User::where('username', $identifier)->orWhere('hash', $identifier)->first();
    }

    public function render()
    {
        $statuses = Status::with('user')->where('user_id', $this->user->id)->latest()->paginate($this->perPage);

        return view('livewire.account.show', compact('statuses'));
    }
}