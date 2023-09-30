<section>
    <div class="flex flex-row mx-3">
        <div class="flex flex-start w-2/6">&nbsp;</div>

        <div class="flex justify-center w-2/6">
            <h1 class="text-2xl font-medium">Filmes</h1>
        </div>

        <div class="flex justify-end w-2/6 items-center">
            <div wire:loading class="pr-1 w-[10%]">
                <x-loading />
            </div>
            <input type="text" wire:model.live="pesquisa_nome" class="mt-1 block w-[40%] rounded-md shadow-sm mr-3" placeholder="Filtrar por nome">
            <input type="text" wire:model.live="pesquisa_classificacao" class="mt-1 block w-[40%] rounded-md shadow-sm" placeholder="Filtrar por classificação">
        </div>
    </div>

    <table class="mx-auto m-5 w-3/6 rounded-t-lg bg-gray-300">
        <thead>
            <tr class="text-left border-b border-slate-400">
                <th class="px-4 py-3">ID</th>
                <th class="px-4 py-3">NOME</th>
                <th class="px-4 py-3">CLASSIFICAÇÃO</th>
                <th class="px-4 py-3">DIÁRIA</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($filmes as $filme)
                <tr>
                    <td class="px-4 py-3">{{$filme->id}}</td>
                    <td class="px-4 py-3">{{$filme->nome}}</td>
                    <td class="px-4 py-3">{{$filme->classificacao}}</td>
                    <td class="px-4 py-3">R$ {{$filme->diaria}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-4 py-3 text-center">Não existem filmes disponíveis no momento</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
