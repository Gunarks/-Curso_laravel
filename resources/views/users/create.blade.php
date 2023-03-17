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
        <h1>Trabalhando com os verbos HTTP -> Create -> CREATE</h1>
        <div class="container">
            <form method="POST" action="{{route('user/store')}}">
                @csrf
                {{-- @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                @endforeach --}}
                @method('post')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control @error('name')
                        is-invalid
                    @enderror" id="name" name="name" placeholder="Digite seu nome aqui" aria-describedby="emailHelp" value="{{old('name')}}">

                    @error('name')
                        <div class="invalid-feedbck">
                           {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                    <input type="email" class="form-control @error('email')
                        is-invalid
                    @enderror" name="email" id="email" placeholder="Digite o seu e-mail aqui" aria-describedby="emailHelp" value="{{old('email ')}}">

                    @error('email')
                    <div class="invalid-feedbck">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="street" class="form-label">Rua</label>
                    <input type="text" class="form-control @error('street')
                                        is-invalid
                                    @enderror" name="street" id="street" placeholder="Digite o seu endereço aqui"
                        aria-describedby="emailHelp" value="{{old('street ')}}">

                    @error('street')
                    <div class="invalid-feedbck">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label">Número</label>
                    <input type="text" class="form-control @error('number')
                                        is-invalid
                                    @enderror" name="number" id="number" placeholder="Digite o número do seu endereço aqui"
                        aria-describedby="number" value="{{old('number ')}}">

                    @error('number')
                    <div class="invalid-feedbck">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control @error('password')
                        is-invalid
                    @enderror" id="password" name="password" placeholder="Digite sua senha aqui">

                    @error('password')
                    <div class="invalid-feedbck">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input class="form-check-input @error('terms')
                        is-invalid
                    @enderror" type="radio" name="terms" id="terms" >
                    <label class="form-check-label" for="terms">Termos de uso</label>

                    @error('terms')
                    <div class="invalid-feedbck">
                        {{$message}}
                    </div>
                    @enderror
                </div>



                <div class="mb-3 btns">
                    <button type="submit" class="btn btn-primary">Criar</button>
                    <a href="{{ route('user/index') }}" class="btn btn-warning">Voltar</a>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </body>

</html>
