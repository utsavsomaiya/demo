<?php

namespace App\Livewire;

use App\Livewire\Forms\Demo1Form;
use Livewire\Component;

class Demo1 extends Component
{
    public Demo1Form $form;

    public function render()
    {
        return view('livewire.demo1');
    }
}
