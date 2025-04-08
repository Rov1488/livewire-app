<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]
class Todos extends Component
{
    public $todo = '';

    public $todos = [
        'Learn Laravel',
        'Learn Vue',
        'Build something awesome',
    ];

    public function updated($propertyName, $value)
    {
        //dd($propertyName, $value);
        $this->$propertyName = strtoupper($value);
    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }
    public function render()
    {
        return view('livewire.todos');
    }
}
