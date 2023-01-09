<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curso Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        h1{
            text-align:center;
            color:purple;
            background-color:#000;
            padding:100px;
            margin:50px auto;
            width:60%;
        }
        table {
            text-align:center;
        }
    </style>
  </head>
  <body>
    <h1>Trabalhando com os verbos HTTP</h1>
   <div class="container">
     <table class="table">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">E-mail</th>
              <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td>{{ $user->id}}</td>
              <td>{{ $user->name}}</td>
              <td>{{ $user->email}}</td>
              <td>
                <a href="{{route('users')}}" class="btn btn-warning">Voltar</a>
                <a href="#" class="btn btn-primary">Editar</a>
                <a href="#" class="btn btn-danger">Deletar</a>
              </td>
            </tr>
        </tbody>
    </table>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>