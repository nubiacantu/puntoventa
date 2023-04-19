<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Archivos de Bootstrap 5 -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte/dist/css/adminlte.min.css">

    <!--Estilos -->
    <link href="css/estilosLogin.css" rel="stylesheet">

     <!--Iconos -->
    <script src="https://kit.fontawesome.com/a8a964cfb5.js" crossorigin="anonymous"></script>
    
  </head>
  <body>
  <div style="display: flex; align-items: center; justify-content: center; min-height: 100vh;">
    <div class="container-fluid ">
      <div class="row justify-content-center">
        <div class="col-md-4 m-4 " >
          <div class="card">
              <div class="overflow-auto p-3" style="max-height: 90vh;">
                <div class="card-body ">
                  <div style="display: flex;justify-content: center;">
                    <img src="https://img.freepik.com/vector-gratis/carro-tienda-edificio-tienda-dibujos-animados_138676-2085.jpg" width="50%">
                  </div>
                  <!-- form start -->
                  <form name="form1" id="form1"  method="POST" action="verificarLogin.php">
                    <div class="form-group m-2" style="text-align: center;">
                      <h1>Login</h1>
                      <!--Usuario-->
                      <label for="contra1" class="mb-2">Usuario <span class="obligatorio">(*)</span></label>
                      <div class="input-group mb-3" id="user">
                        <span style="background-color: #23929F;border: 1px solid #23929F;" class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control input" name="usuario" id="usuario" aria-label="Username" placeholder="Ingrese su usuario"  aria-describedby="basic-addon1" required>
                        <div id="userw" class="invalid-feedback">
                        El usuario es obligatorio
                        </div>
                      </div>
                      <!--Contraseña-->
                      <label for="contra1 " class="mb-2">Contraseña <span class="obligatorio">(*)</span></label>
                      <div class="input-group mb-3"  id="contrad">
                        <span style="background-color: #23929F;border: 1px solid #23929F;" class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" class="form-control input" name="contra" id="contra" aria-label="Password" placeholder="Ingrese su contraseña"  aria-describedby="basic-addon2" required>
                        <div id="contra2w" class="invalid-feedback">
                        Las contraseña es obligatoria
                        </div>
                      </div>
                      
                    </div>
                    
                  </div>
                  <!--Acceder-->
                  <div style="display: flex; justify-content: center; " >
                    <button type="submit" class="btn m-1 boton">Log In</button>
                  </div>
                </form><!-- form end -->
              </div><!-- /.overflow-auto -->
          </div><!-- /.card -->
          <div class="card">
            <div class="card-body ">
              Nubia Esmeralda Cantú Sánchez
              <br>
              Vanessa Itzaiana García Cervantes
            </div>
          </div>
        </div><!-- /.col-md-6-->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
  
  </body>
</html>


