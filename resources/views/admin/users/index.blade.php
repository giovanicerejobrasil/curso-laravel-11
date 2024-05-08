@extends('admin.layouts.app')

@section('title', 'Usuários')

@section('content')
    <div class="my-8 flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">Usuários</h2>

        <a href="{{ route('users.create') }}" class="text-white bg-blue-600 hover:bg-blue-800 py-1 px-3">
            <i class="fa-solid fa-plus" aria-hidden="true"></i> Novo usuário
        </a>
    </div>

    <x-alert/>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sky-900">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-500">
            <tr>
                <th class="px-3">ID</th>
                <th class="px-3">Nome</th>
                <th class="px-3">E-mail</th>
                <th class="px-3">Ações</th>
            </tr>
            </thead>

            <tbody class="text-gray-400 text-sm font-light">
            @forelse ($users as $user)
                <tr>
                    <td class="py-2 px-3">{{ $user->id }}</td>
                    <td class="py-2 px-3">{{ $user->name }}</td>
                    <td class="py-2 px-3">{{ $user->email }}</td>
                    <td class="py-2 px-3">
                        <a href="{{ route('users.edit', $user->id) }}"
                           class="hover:underline hover:decoration-gray-500 hover:dark:decoration-gray-400">Editar</a> |
                        <a href="{{ route('users.show', $user->id) }}"
                           class="hover:underline hover:decoration-gray-500 hover:dark:decoration-gray-400">Detalhes</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100" class="py-2">Nenhum usuário cadastrado no banco.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="py-4">
        {{ $users->links() }}
    </div>
@endsection
