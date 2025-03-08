<?php

namespace App\Livewire\Frontend;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class HomePage extends Component
{
    public function render(): View
    {
        return view('frontend.home-page');
    }
}
