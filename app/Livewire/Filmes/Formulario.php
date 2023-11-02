<?php

namespace App\Livewire\Filmes;

use App\Livewire\Forms\FilmesFormObject;
use Livewire\Component;

use App\Models\film;

class Formulario extends Component
{
    public FilmesFormObject $form;

    public film $filme;

    public function mount(film $filme){
        $this->filme = $filme;

        $this->form->preencherDados($filme);
    }

    public function Salvar(){
        $this->validate();

        if(isset($this->filme->id)){
            $this->filme->update(
                $this->form->all()
            );
        }else{
            //Mass Assignment
            film::create(
                $this->form->all()
            );
        }

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
