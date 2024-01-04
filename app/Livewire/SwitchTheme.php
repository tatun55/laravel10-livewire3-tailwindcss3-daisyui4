<?php

namespace App\Livewire;

use Livewire\Component;

class SwitchTheme extends Component
{
    public $theme = 'light';

    public function render()
    {
        return view('livewire.switch-theme');
    }
}
