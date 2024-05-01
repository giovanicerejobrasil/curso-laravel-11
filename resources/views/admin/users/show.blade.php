@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <h1>Detalhes do Usuário</h1>

    <ul>
        <li>ID: {{ $user->id }}</li>
        <li>Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
    </ul>

    <x-alert />
    @can('is-owner', $user)
        Minha Conta
    @endcan

    @can('is-admin')
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Deletar</button>
        </form>
    @endcan
@endsection
