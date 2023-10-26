<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class FilmesFormObject extends Form
{
    #[Rule('required|string|min:6')]
    public $nome;

    #[Rule('required|string|size:3', as: 'descrição')]
    public $classificacao;

    #[Rule('required|decimal:0,2', as: 'valor da diária')]
    public $diaria;

    #[Rule('required|string')]
    public $sinopse;
}
