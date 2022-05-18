<?php

namespace App\Http\Livewire\Status;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    public $body = "";

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'body' => 'string|max:255',
        ]);
    }

    public function store()
    {
        $this->validate([
            'body' => 'required',
        ]);

        $status = Auth::user()->statuses()->create([
            'hash' => Str::random(22) . strtotime(Carbon::now()),
            'body' => $this->body,
        ]);

        $this->body = "";

        $this->emit('statusCreated', $status->id);

        return redirect()->back();

    }

    public function render()
    {
        return view('livewire.status.create');
    }
}
