<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Repositories\UserRepository;

class Index extends Component
{

    #[Layout('layout.layout')]

    public function render()
    {
        $profile = User::with('detail')->find(auth()->user()->id);
        return view('livewire.profile.index', compact('profile'));
    }
}
