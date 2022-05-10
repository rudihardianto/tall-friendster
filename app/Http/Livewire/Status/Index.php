<?php

namespace App\Http\Livewire\Status;

use Livewire\Component;
use App\Models\Timeline\Status;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $perPage = 10;

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {
        $ids = Auth::user()->follows()->pluck('id');
        $ids->push(Auth::user()->id);
        $statuses = Status::whereIn('user_id', $ids)->latest()->paginate($this->perPage);

        return view('livewire.status.index', compact('statuses'));
    }
}