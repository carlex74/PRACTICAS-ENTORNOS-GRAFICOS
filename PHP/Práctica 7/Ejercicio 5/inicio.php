<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name:"viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 justify-content-center">
                <div class="p-4 rounded-4 shadow-lg bg.light">
                    
                    <form action="sesion.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="username" class="form-label"><b>Nombre de Usuario</b></label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label"><b>Contraseña</b></label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div >
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>