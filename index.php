<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">



    <title>Prestamos</title>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <div class="row">

        <div class="col s12 m4 offset-m4">
            <div class="card z-depth-4">

                <div class="card-content blue white-text">
                    <span class="card-title" align="center"><b>LOGIN</b></span>
                </div>

                <div class="card-content white">

                    <form action="lib/login.php" method="POST" autocomplete="off">
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <label for="uid">Nro. de Carnet</label>
                            <input type="number" name="ci" class="form-control" id="uid" required autofocus>
                            

                        </div>
                        <br>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <label for="uid">Contraseña</label>
       
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
    
                        </div>
                        <br>
                        <div>

                            <button class="waves-effect waves-light btn green" style="width: 100%;">Login</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>

    </div>




    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>


</html>