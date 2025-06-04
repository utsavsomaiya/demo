<?php

namespace App\Livewire;

use Livewire\Component;

class Demo2 extends Component
{
    public function render()
    {
        sleep(30);
        return view('livewire.demo2');
    }
}
