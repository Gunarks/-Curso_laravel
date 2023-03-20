<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curso Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        h1 {
            text-align: center;
            color: purple;
            background-color: #000;
            padding: 20px 0;
        }
        .header a {
            display: block;
            margin: 50px auto;
        }

        .header {
            margin-bottom:30px;
        }

        table {
            text-align: center;
        }

        .table thead tr th {
            border-bottom:2px solid #000;
        }
    </style>
</head>

<body>
   <div class="header">
        <h1 class="text-uppercase">Index</h1>
       <div class="d-flex">
            <a type="button" href="{{route('user/create')}}" class="btn btn-primary text-uppercase">Criar usuário</a>
            <a type="button" href="{{route('posts/create')}}" class="btn btn-info text-uppercase">Novo Post</a>
       </div>
   </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-uppercase">ID</th>
                    <th scope="col" class="text-uppercase">Name</th>
                    <th scope="col" class="text-uppercase">E-mail</th>
                    <th scope="col" class="text-uppercase">Data de criação</th>
                    <th colspan="2" scope="col" class="text-uppercase">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('user/show', $user->id) }}" class="btn btn-success text-uppercase">Exibir</a>
                            <a href="{{ route('user/edit', $user->id) }}" class="btn btn-warning text-uppercase">Editar</a>
                            <form action="{{route('user/delete', $user->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger text-uppercase">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
