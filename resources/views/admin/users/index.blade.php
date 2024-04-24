<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Usuários</title>
</head>
<body>
  <h1>Usuários</h1>

  <a href="{{ route('users.create') }}">Novo usuário</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
      </tr>
    </thead>

    <tbody>
      @forelse ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>-</td>
          </tr>
      @empty
          <tr>
            <td colspan="100">Nenhum usuário cadastrado no banco.</td>
          </tr>
      @endforelse
    </tbody>
  </table>

  {{ $users->links() }}
</body>
</html>