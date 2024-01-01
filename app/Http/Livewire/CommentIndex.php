<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\comment;

class CommentIndex extends Component
{
    protected $listeners = [
        'commentStored' => '$refresh'
    ];
    
    public function render()
    {
        $comment = comment::where('undangan_id', '3')->latest()->get();
        return view('livewire.comment-index',[
            'comment' => $comment
        ]);
    }
    

    
}
