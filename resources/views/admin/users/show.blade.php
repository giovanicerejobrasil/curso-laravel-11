@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
{{--    @include('admin.users.partials.breadcump')--}}
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">Detalhes do Usuário</h2>
    </div>

    <ul class="max-w-md space-y-1 text-gray-200 list-disc list-inside">
        <li>ID: {{ $user->id }}</li>
        <li>Nome: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
    </ul>

    <x-alert />

    @can('is-owner', $user)
        <p class="py-3 px-5 bg-yellow-200 text-black my-3 rounded-lg">Minha Conta</p>
    @endcan

    @can('is-admin')
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="text-white bg-red-600 hover:bg-red-800 py-1 px-3 my-3">Deletar</button>
        </form>
    @endcan
@endsection
