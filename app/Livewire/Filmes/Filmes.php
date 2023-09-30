<?php

namespace App\Livewire\Filmes;

use App\Models\film;
use Livewire\Component;

class Filmes extends Component
{
    public $filmes;

    public $pesquisa_nome = '';

    public $pesquisa_classificacao = '';

    public function filtro(){
        if(empty($this->pesquisa_nome) && empty($this->pesquisa_classificacao)):
            $this->filmes = film::all();
        elseif(!empty($this->pesquisa_nome) && empty($this->pesquisa_classificacao)):
            $this->filmes = film::where("nome", "like", "%$this->pesquisa_nome%")->get();
        elseif(empty($this->pesquisa_nome) && !empty($this->pesquisa_classificacao)):
            $this->filmes = film::where("classificacao", "like", "%$this->pesquisa_classificacao%")->get();
        endif;
    }

    public function render()
    {
        $this->filtro();

        return view('livewire.filmes.filmes');
    }
}
