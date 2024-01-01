<?php

namespace App\Http\Livewire;

use App\Models\comment;
use Livewire\Component;

class NewCommentPost extends Component
{
    public $undangan_id;
    public $nama;
    public $asal;
    public $ucapan;

    public function render()
    {
        return view('livewire.new-comment-post');
    }

    public function tambah()
    {


        $this->validate([
            
            'nama' => 'required|min:3|max:15',
            'asal' => 'required',
            'ucapan' => 'required',
        ]);

       $data = comment::create([
            'undangan_id' => '3',
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
