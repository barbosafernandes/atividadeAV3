<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.css">
        <title>Listagem de produtos</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">Estoque Laravel</a>
                    </div>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{action('ProdutosController@lista')}}">Listagem</a></li>
                        @if(!Auth::guest())                       
                        <li><a href="{{action('ProdutosController@novo')}}">Novo produto</a></li>
                        <li><a  href="{{action('CategoriaController@index')}}">Nova categoria</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
            @yield('conteudo')  
            <footer class="footer">
                <p>© Livro de Laravel do Alura.</p>
            </footer>
        </div>
    </body>
</html>