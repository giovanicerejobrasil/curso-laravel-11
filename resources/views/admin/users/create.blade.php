@extends('admin.layouts.app')

@section('title', 'Novo Usuário')

@section('content')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">Novo Usuário</h2>

        <form action="{{ route('users.store') }}" method="post">
            @csrf
            @include('admin.users.partials.form')
        </form>
    </div>
@endsection
