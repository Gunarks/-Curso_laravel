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
        <h1>Adicionar novo post</h1>
        <div class="container">
            <form method="POST" action="{{route('posts/store')}}">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="user_id" class="form-label">Usuário</label>
                    <select name="user_id" id="user_id" class="form-control">
                        <option value="" selected>Escolha o usuário</option>
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->id}} - {{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control" name="title" placeholder="Insira o título " id="title">

                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Texto</label>
                    <textarea name="content" id="content" class="form-control">
                    </textarea>
                </div>

                <div class="mb-3 btns">
                    <button type="submit" class="btn btn-primary">Adicionar post</button>
                    <a href="{{ route('user/index') }}" class="btn btn-warning">Voltar</a>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </body>

</html>
