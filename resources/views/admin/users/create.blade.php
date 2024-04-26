@extends('admin.layouts.app')

@section('title', 'Novo Usuário')

@section('content')
    <h1>Novo Usuário</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('admin.users.partials.form')
    </form>
@endsection
