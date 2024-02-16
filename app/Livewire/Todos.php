<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;
use Livewire\Attributes\Validate; 


class Todos extends Component
{
    #[Validate('required|max:255|string')] 
    public $body = '';

    public function render()
    {
        return view('livewire.todos');
    }
    
    public function addtodo()
    {
        $this->validate(); 
        $todo = Todo::create([
        'body' => $this->body,
        ]);
        if ($todo->save()) {
        session()->flash('message', 'Todo added successfully!');
        } else {
            session()->flash('message','Error While Creating!');
        }
        $this->dispatch('todoAdded');
        $this->body = '';
    }
}
