<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home_component')->layout('layouts.base');
    }
}
