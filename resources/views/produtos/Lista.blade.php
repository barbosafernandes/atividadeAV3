@extends('layout.principal')

@section('conteudo')
<h1>Listagem dos produtos</h1>
<table class="table">
    <tr>
        <th>#Nome</th><th>#Valor</th><th>#Descrição</th><th>#Quantidade</th><th>#Tamanho</th><th>#Categoria</th>
    </tr>
    @foreach($produtos as $p)

    <tr class="{{$p->quantidade <= 6 ? 'danger' : ''}}">

        <td>{{ $p->nome }}</td>
        <td>R$ {{ $p->valor }}</td>
        <td>{{ $p->descricao }}</td>
        <td>{{ $p->quantidade }}</td>
        <td>{{ $p->tamanho }}</td>
        <td>{{ $p->categoria->name}}</td>
        <td>
            <a href="/produtos/mostrar/{{$p->id}}">
                Visualizar
            </a>
        </td>
        @if(!Auth::guest())
        <td>
            <a href="/produtos/delete/{{$p->id}}">
                deletar
            </a>
        </td>

        <td>
            <a href="/produtos/alterar/{{$p->id}}">
                alterar
            </a>
        </td>
        @endif
    </tr>
    @endforeach
    @if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado com sucesso!
    </div>
    @endif
</table>
@stop