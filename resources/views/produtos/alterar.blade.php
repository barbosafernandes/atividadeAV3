@extends('layout.principal')
@section('conteudo')
<form method="post" action="update">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <span>Nome:</span>
        <input class="form-control" type="text" name="nome" value="{{$p->nome}}" />
    </div>
    
    <div class="form-group">
        <span>Valor:</span>
        <input class="form-control" type="text" name="valor" value="{{$p->valor}}" />
    </div>
    
    <div class="form-group">
        <span>Quantidade:</span>
        <input class="form-control" type="text" name="quantidade" value="{{$p->quantidade}}" />
    </div>
    
    <div class="form-group">
        <span>Descrição:</span>
        <textarea class="form-control" name="descricao" >{{$p->descricao}}</textarea>
    </div>
    <button class="btn btn-primary" type="submit">Cadastrar</button>
</form>
@stop
