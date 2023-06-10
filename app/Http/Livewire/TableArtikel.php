<?php

namespace App\Http\Livewire;

use App\Artikel;
use Livewire\Component;

class TableArtikel extends Component
{
    protected $listeners = [
        'indexArtikel'
    ];
    public function render()
    {
        $art = Artikel::orderBy('id', 'desc')-> limit(10)->get();
        return view('livewire.table-artikel', ['art' => $art]);
    }
    public function indexArtikel($artikel){
        // dd($artikel);
    }
    
}
