@extends('layout.principal')
@section('conteudo')
<h1>Detalhes do produto {{$p->nome}}</h1>
    <ul class="list-group">
        <li class="list-group-item">Valor: {{$p->valor}}</li>
        <li class="list-group-item">Quantidade: {{$p->quantidade}}</li>
        <li class="list-group-item">Descrição: {{$p->descricao}}</li>
    </ul>
@stop    
