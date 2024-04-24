@extends('admin.layouts.app')

@section('title', 'Novo Usuário')

@section('content')
<h1>Novo Usuário</h1>

<form action="{{ route('users.store') }}" method="post">
  @csrf
  <input type="text" name="name" id="name" placeholder="Nome">
  <input type="email" name="email" id="email" placeholder="E-mail">
  <input type="password" name="password" id="password" placeholder="Senha">
  <input type="submit" value="Cadastrar">
</form>
@endsection

