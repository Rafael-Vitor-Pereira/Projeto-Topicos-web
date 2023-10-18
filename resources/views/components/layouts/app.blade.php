<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locadora de Filmes</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="{{asset('css/loading.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>
<body>
    {{-- Msg de sucesso as cadastrar ou editar --}}
    <x-msg-success />

    {{-- Menu lateral --}}
    <x-menu />

    {{-- Conteúdo da página --}}
    <main class="w-[85%] ml-auto">
        <div class="pt-6 mx-5">
            {{$slot}}
        </div>
    </main>
</body>
</html>
