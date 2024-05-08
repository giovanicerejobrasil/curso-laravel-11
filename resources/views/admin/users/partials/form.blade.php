{{-- @include('admin.includes.errors') --}}
<x-alert />

@csrf
<div class="flex flex-col max-w-2xl">
    <input type="text" name="name" id="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}" class="my-2">
    <input type="email" name="email" id="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}"
           class="my-2">
    <input type="password" name="password" id="password" placeholder="Senha" class="my-2">
    <input type="submit" value="Enviar" class="text-white bg-green-600 hover:bg-green-800 py-1 px-3 my-3 w-1/5 cursor-pointer">
</div>
