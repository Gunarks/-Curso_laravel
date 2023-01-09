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

        table {
            text-align: center;
        }

        form {
            width: 500px;
            margin: 0 auto;
        }

        .btns {
            display: flex;
            justify-content: center;
            gap: 5px;
        }
    </style>
</head>

<body>
    <h1>Trabalhando com os verbos HTTP -> Update -> PUT</h1>
    <div class="container">
        <form method="POST" action="{{route('user/update', $user->id)}}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}"
                    placeholder="Digite o seu e-mail aqui">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                    placeholder="Digite seu nome aqui">
            </div>
            <div class="mb-3 btns">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="{{ route('users') }}" class="btn btn-warning">Voltar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
