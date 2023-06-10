<?php

namespace App\Http\Livewire;

use App\Artikel;
use Livewire\Component;

class FormArtikel extends Component
{
    public $nama;
    public $judul_task;
    public $deskripsi_task;
    public function render()
    {
        return view('livewire.form-artikel');
    }
    public function simpan(){
        $artikel = Artikel::create([
            'nama' => $this->nama,
            'judul_task' => $this->judul_task,
            'deskripsi_task' => $this->deskripsi_task
        ]);
        // dd($artikel);
        $this->resetInput();
        //trigger
        $this->emit('indexArtikel', $artikel);
    }

    private function resetInput(){
        $this -> nama = null;
        $this -> judul_task = null;
        $this -> deskripsi_task = null;
    }
}
