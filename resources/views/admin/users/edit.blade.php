@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">Editar Usuário {{ $user->name }}</h2>

        <form action="{{ route('users.update', $user->id) }}" method="post">
            @method('put')
            @include('admin.users.partials.form')
        </form>
    </div>
@endsection
