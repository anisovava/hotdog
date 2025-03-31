<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" >
    <title>Вход</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Вход в админ панель</h1>
                <div class="tab-content tabs">
                   <form method="POST" action="{{ route('auth') }}" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="exampleLogin">Логин</label>
                        <input type="text" class="form-control" id="exampleLogin" name="name">
                    </div>
                    <div class="form-group">
                        <label for="examplePassword">Пароль</label>
                        <input type="password" class="form-control" id="examplePassword" name="password">
                    </div>
                    <button type="submit" class="btn btn-default">Войти</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
        
</body>
</html>