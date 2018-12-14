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
<form method="post" action="/login">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <span>Email:</span>
        <input class="form-control" type="text" name="email"/>
    </div>

    <div class="form-group">
        <span>Password:</span>
        <input class="form-control" type="password" name="password"/>
    </div>
    <button class="btn btn-primary" type="submit">Login</button>
</form>
@stop