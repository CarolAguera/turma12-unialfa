<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes Produto {{ $produto->id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UniAlfa</a>
        </div>
    </nav>

    <br><br>
    <div class="container">
        <div class="card" style="max-width: 300px">
            <div class="card-header">
                Detalhes do Produto: {{ $produto->nome }}
            </div>
            <div class="card-body">
                <p><strong>ID: </strong>{{ $produto->id }}</p>
                <p><strong>Nome: </strong>{{ $produto->nome }}</p>
                <p><strong>Preço: </strong>{{ $produto->preco }}</p>
                <p><strong>Quantidade: </strong>{{ $produto->quantidade }}</p>
                <br>
                <div class="text-center">
                    <a href="{{ route('produtos.index') }}" class="btn btn-success">
                        Voltar para a lista de Produtos
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
