<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class Demo1Form extends Form
{
    public array $options = [];

    public function rules()
    {
        return [
            'options' => ['required', 'array', 'min:2', 'max:6'],
            'options.*' => ['required', 'array:text,explaination,is_correct'],
            'options.*.text' => ['required', 'string'],
            'options.*.explaination' => ['required', 'string'],
            'options.*.is_correct' => ['required', 'boolean'],
        ];
    }
}
