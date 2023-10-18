<?php

namespace App\Livewire\Filmes;

use Livewire\Component;

use App\Models\film;

class Formulario extends Component
{
    public $nome;

    public $classificacao;

    public $diaria;

    public $sinopse;

    public function Salvar(){
        //Cria o objeto do modelo
        $filme = new film();

        //Copia os dados sincronizados do formulario para o objeto
        $filme->nome = $this->nome;
        $filme->diaria = $this->diaria;
        $filme->sinopse = $this->sinopse;
        $filme->classificacao = $this->classificacao;

        //Salva o objeto no BD
        $filme->save();

        //Gravar msg na sessão
        session()->flash('msg', 'Filme salvo no banco de dados, com sucesso');

        //Redireciona para a lista de filmes
        $this->redirect('/Filmes', navigate: true);
    }

    public function render()
    {
        return view('livewire.filmes.formulario');
    }
}
