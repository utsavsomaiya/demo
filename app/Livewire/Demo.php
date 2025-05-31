<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class Demo extends Component
{
    use WithFileUploads;

    public $photos = [];

    public function save(): void
    {
        $this->validate([
            'photos.*' => ['image', 'max:100'], // 100KB Max
        ]);

        dd($this->photos);
    }

    public function render(): View
    {
        return view('livewire.demo')->title('Hey there!');
    }
}
