<?php

namespace App\Livewire;

use Livewire\Component;

class Board extends Component
{
    #[Layout(KanbanLayout::class)]
    public function render()
    {
        return view('livewire.board');
    }
}
