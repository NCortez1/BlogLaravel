<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="container">
            <div class="panel">
                <!-- formulario -->
                <div class="col-sm-4 offset-md-4" id="test">
                    <div id="div-bg">
                        <form class="form" method="post" id="form" action="{{ route('login.verify') }}">
                            @csrf
                            <div class="form-group" >
                                <label for="email">Email </label>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Usuario">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                                <br>
                            </div>
                            
                            @error('message')
                                <div id="error" class="alert alert-danger" role="alert" style="text-align:left;">{{ $message }}</div>
                            @enderror
                            
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <button type="button" onclick="location.href = '{{ route('register') }}';" class="col-sm-12 btn btn-primary">Registrarse</button>
                                </div>
                                <div class="col-sm-5 offset-md-2">
                                    <button type="submit" class="col-sm-12 btn btn-success">Iniciar sesión</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
