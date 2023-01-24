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
            padding: 100px;
            margin: 50px auto;
            width: 60%;
        }
        .header a {
            display: block;
            width: 10%;
            margin: 0 auto;
        }

        .header {
            margin-bottom:30px;
        }

        table {
            text-align: center;
        }
    </style>
</head>

<body>
   <div class="header">
        <h1>Trabalhando com os verbos HTTP</h1>
        <a type="button" href="{{route('user/create')}}" class="btn btn-success">Criar usuário</a>
   </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th colspan="2" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('user/show', $user->id) }}" class="btn btn-info">Exibir</a>
                            <a href="{{ route('user/edit', $user->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{route('user/delete', $user->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Deletar</button>
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
