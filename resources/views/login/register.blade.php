<?
    $col_l = 3;
    $col_i = 8;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registro</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>

    <body>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <form class="form" method="post" id="form" action="{{ route('register.create') }}">
                @csrf
                <div class="row">
                    <div class="col-sm-8 offset-md-2" style="text-align: right;">
                        <h3 style="text-align: center;">Registrarse</h3>
                        <br>
                        <div id="error" class="alert alert-danger" role="alert" style="display:none; text-align:left;"></div>

                        <div class="form-group row">
                            <label class="col-sm-<?=$col_l?>" for="name">Usuario</label>
                            <div class="col-sm-<?=$col_i?>" >
                                <input type="text" class="form-control" id="name" name="name" maxlength="50" placeholder="Usuario" required>
                                <br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-<?=$col_l?>" for="email">Email</label>
                            <div class="col-sm-<?=$col_i?>" >
                                <input type="text" class="form-control" id="email" name="email" maxlength="50" placeholder="Email" required>
                                <br>
                            </div>
                        </div>
                        
                        <div class="col-sm-12" id="div_clave" name="div_clave">
                            <div class="form-group row">
                                <label class="col-sm-<?=$col_l?>" for="password">Contraseña</label>
                                <div class="col-sm-<?=$col_i?>">
                                    <input type="password" class="form-control" value="" id="password" name="password" maxlength="50" placeholder="********************" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-<?=$col_l?>" for="password2">Repetir Contraseña</label>
                                <div class="col-sm-<?=$col_i?>">
                                    <input type="password" class="form-control" value="" id="password2" name="password2" maxlength="50" placeholder="********************" required>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-<?=$col_l?>" for="rol_id">Rol</label>
                            <div class="col-sm-<?=$col_i?>" >
                                <select class="form-control" id="rol_id" name="rol_id">
                                    <option value="2" selected>Usuario</option>
                                    <option value="1">Administrador</option>
                                </select>
                            <br>
                            <br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-<?=$col_l?>"></label>
                            <div class="form-group row col-sm-<?=$col_i?>">
                                <div class="col-sm-5">
                                    <button type="submit" class="col-sm-12 btn btn-primary">Registrarse</button>
                                </div>
                                <div class="col-sm-5 offset-md-2">
                                    <button type="button" onclick="location.href = '{{ route('login') }}';" class="col-sm-12 btn btn-success">Iniciar sesión</button>
                                </div>
                            </div>
                        </div>

                    </div>
                        
                </div>
            </form>
        </div>
    </body>
</html>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>