<?php

namespace App\Http\Livewire;

use App\Models\comment;
use Livewire\Component;

class NewComment extends Component
{
    protected $listeners = [
        'commentStored' => '$refresh'
    ];

    public function render()
    {
        $comment = comment::latest()->get();
        return view('livewire.new-comment',['comment' => $comment]);
    }
}
