<?php

namespace App\Livewire\Page;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layout.layout')]
    public function render()
    {
        return view('livewire.page.index');
    }
}
