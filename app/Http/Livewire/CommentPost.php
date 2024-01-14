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
    public $undanganId;
    public $color;


    public function render()
    {
        return view('livewire.comment-post', [
            'color' => $this->color,
        ]);
    }

    public function tambah()
    {



        $this->validate([

            'nama' => 'required|min:3|max:15',
            'asal' => 'required',
            'ucapan' => 'required',
        ]);

        $data = Comment::create([
            'undangan_id' => $this->undanganId,
            'nama' => $this->nama,
            'asal' => $this->asal,
            'ucapan' => $this->ucapan
        ]);


        $this->resetInput();
        $this->emit('commentStored', $data);
    }

    private function resetInput()
    {
        $this->nama = null;
        $this->asal = null;
        $this->ucapan = null;
    }
}
