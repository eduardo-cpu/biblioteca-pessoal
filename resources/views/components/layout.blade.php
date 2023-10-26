<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} - Biblioteca Pessoal</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <style>
        /* Estilo para a barra preta */
        .navbar {
            background-color: black;
            color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Sombra */
            padding: 10px 0; /* Espaçamento interno */
        }
    </style>
</head>
<body>
    <header>
        <!-- Barra preta com o título em branco -->
        <div class="navbar">
        <a href="{{ route('livros.index') }}" style="text-decoration: none; color: inherit;">
            <h1 style="font-size: 24px; padding: 5px 20px; cursor: pointer;">{{$title}}</h1>
        </a>
        <a href="{{ route('livros.create') }}" class="btn btn-dark mb-2">Adicionar Livro</a>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>
</html>
