<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        $users = User::paginate(30);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->all());

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário cadastrado com sucesso');
    }

    public function edit(string $id)
    {
        // $user = User::where('id', '=', $id)->first();
        // $user = User::where('id', $id)->first();
        // ->firstOrFail(); => Bom para API

        if (!$user = User::find($id)) {
            return redirect()->route('users.index')->with('message', 'O usuário não foi encontrado');
        }

        return view('admin.users.edit', compact('user'));
    }

    public function update(string $id, Request $request)
    {
        if (!$user = User::find($id)) {
            return redirect()->back()->with('message', 'O usuário não foi encontrado');
        }

        $user->update($request->only([
            'name',
            'email'
        ]));

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário editado com sucesso');
    }
}
