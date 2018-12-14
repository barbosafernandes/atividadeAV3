@extends('layout.principal')
@section('conteudo')

@if(count($errors) > 0)
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>  
@endif
<form method="post" action="adiciona">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <span>Nome:</span>
        <input class="form-control" type="text" name="nome" value="{{old('nome')}}" />
    </div>

    <div class="form-group">
        <span>Valor:</span>
        <input class="form-control" type="text" name="valor" value="{{old('valor')}}" />
    </div>
    
    <div class="form-group">
        <span>Categoria:</span>
        <select name="categoria_id" class="form-control">
            @foreach($Categorias as $c)
            
            <option value="{{$c->id}}">{{$c->name}}</option>
            
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <span>Quantidade:</span>
        <input class="form-control" type="text" name="quantidade" value="{{old('quantidade')}}" />
    </div>

    <div class="form-group">
        <span>Tamanho:</span>
        <input class="form-control" type="text" name="tamanho" value="{{old('tamanho')}}"/>
    </div>

    <div class="form-group">
        <span>Descrição:</span>
        <textarea class="form-control" name="descricao">{{old('descricao')}}</textarea>
    </div>
    <button class="btn btn-primary" type="submit">Cadastrar</button>
</form>
@stop