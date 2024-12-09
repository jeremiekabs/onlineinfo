<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 text-center">
            <i class="fas fa-sign-in-alt fa-3x mb-3"></i> <!-- Icône de connexion -->
            <h1 class="text-center">Espace de connexion</h1>
            @if (session('fail'))
                <div class="alert alert-danger">
                    {{ session('fail') }}
                </div>
            @endif
            <form method="POST" action="{{route('handleLogin')}}">
                @csrf
                @method('POST')
                <div class="form-group">
                    @if (Session::get('error_msg'))
                        <div class="alert alert-danger">
                            {{ Session::get('error_msg') }}
                        </div>
                    @endif
                    <input type="text" name="email" value="{{old('email')}}" class="form-control mb-3" placeholder="Entrez votre email"/>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Entrez votre mot de passe"/>
                    <button class="btn btn-primary btn-block">Se connecter</button>
                    <div class="mt-4">
                        <a href="{{route('register')}}">Je n'ai pas de compte</a>
                    </div>
                    <div class="mt-4">
                        <a href="{{route('home')}}">Retour au site</a>
                    </div>
                </div>
            </form>    
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
