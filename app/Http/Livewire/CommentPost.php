<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Comment;

class CommentPost extends Component
{
    public $undangan_id;
    public $nama;
    public $asal;
    public $ucapan;

   

    public function render()
    {
        return view('livewire.comment-post');
    }

    public function tambah()
    {


        $this->validate([
            
            'nama' => 'required|min:3|max:15',
            'asal' => 'required',
            'ucapan' => 'required',
        ]);

       $data = Comment::create([
            'undangan_id' => '1',
            'nama' => $this->nama,
            'asal' => $this->asal,
            'ucapan' => $this->ucapan
       ]);


        $this->resetInput();
        $this->emit('commentStored',$data);
    }

    private function resetInput(){
        $this->nama = null;
        $this->asal = null;
        $this->ucapan = null;
        
    }

}
