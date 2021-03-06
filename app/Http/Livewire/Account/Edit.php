<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $picture;
    public $username;
    public $name;
    public $description;

    public function mount()
    {
        $this->username    = Auth::user()->username;
        $this->name        = Auth::user()->name;
        $this->description = Auth::user()->description;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'username' => 'string|max:255|unique:users,username,' . Auth::id(),
            'name'     => 'string|max:255',
        ]);
    }

    public function update()
    {
        $this->validate([
            'picture'  => $this->picture ? 'image|mimes:jpeg,png,jpg,gif,svg' : '',
            'username' => 'required|min:5|max:25|unique:users,username,' . Auth::id(),
            'name'     => 'required|string|min:5|max:255',
        ]);

        if ($this->picture) {
            Storage::delete($this->picture);
            $picture = $this->picture->store('images/profile');
        } else {
            $picture = Auth::user()->picture ?? null;
        }

        Auth::user()->update([
            'picture'     => $picture,
            'username'    => $this->username,
            'name'        => $this->name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Your account has been updated!');

        $identifier = Auth::user()->usernameOrHash;

        return redirect()->route('account.show', $identifier);
    }

    public function render()
    {
        return view('livewire.account.edit');
    }
}