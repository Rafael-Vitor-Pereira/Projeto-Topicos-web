<div>
    <h1 class="text-2xl text-black font-medium text-center">Filmes - Formulário de cadastro</h1>
    <form class="mt-4 flex flex-col space-y-4 w-[70%] m-auto" wire:submit.prevent="Salvar">
        <div>
            <label for="nome">Nome do filme</label>
            <input type="text" id="nome" class="mt-1 block rounded-md w-full shadow-md" wire:model.blur="form.nome" />
            @error('form.nome')
                <span class="text-red-700"><small>{{$message}}</small></span>
            @enderror
        </div>

        <div>
            <label for="classificacao">Classificação indicativa</label>
            <input type="text" id="classificacao" class="mt-1 block rounded-md w-full shadow-md" wire:model.blur="form.classificacao" />
            @error('form.classificacao')
                <span class="text-red-700"><small>{{$message}}</small></span>
            @enderror
        </div>

        <div>
            <label for="diaria">Diária do filme</label>
            <input type="number" step="any" min="0" id="diaria" class="mt-1 block rounded-md w-full shadow-md" wire:model.blur="form.diaria" />
            @error('form.diaria')
                <span class="text-red-700"><small>{{$message}}</small></span>
            @enderror
        </div>

        <div>
            <label for="sinopse">Sinopse</label>
            <textarea id="sinopse" cols="20" rows="5" class="mt-1 block rounded-md w-full shadow-md" wire:model.blur="form.sinopse"></textarea>
            @error('form.sinopse')
                <span class="text-red-700"><small>{{$message}}</small></span>
            @enderror
        </div>

        {{-- Botão submit --}}
        <div class="self-end w-[10%]">
            <x-btn-submit />
        </div>
    </form>
</div>
