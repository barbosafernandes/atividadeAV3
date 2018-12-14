@extends('layout.principal')
@section('conteudo')
@if(old('name'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong> a categoria {{old('name')}} foi adicionado com sucesso!
    </div>
    @endif
<form method="post" action="adciona">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <span>Nome da Categoria:</span>
        <input class="form-control" type="text" name="name" value="{{old('name')}}" />
    </div>
    
    <button type="submit" class="btn btn-success">Cadastrar categoria</button>

    
    
</form>
@endsection