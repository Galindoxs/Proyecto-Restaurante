<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--IMPORT-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/style1.css">
    
    <title>RESTAURANTE</title>
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <a class="navbar-brand" href="#">Restaurante</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Menu</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Registrarse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
      </nav>
      

    <!--CAROUSEL-->
        <div id="carousel-control" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/Designer.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-control" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-control" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    <!--CARDS-->
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-sm-6">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="./" class="img-fluid" alt="Imagen de Registro">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="card-title">Registrarse</h5>
                                <p class="card-text">Haz clic para registrarte.</p>
                                <a href="registro.html" class="btn btn-primary">Registrarse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card custom-card-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="./img/Login.jpeg" class="img-fluid" alt="Imagen de Inicio de Sesión">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="card-title">Iniciar Sesión</h5>
                                <p class="card-text">Haz clic para iniciar sesión.</p>
                                <a href="inicio_sesion.html" class="btn btn-primary">Iniciar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    <footer class="footer mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="./img/Logo.jpeg" class="footer-logo" alt="Logo del restaurante">
                </div>
                <div class="col-md-6 text-right">
                    <a href="#" class="btn btn-social-icon btn-twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-social-icon btn-facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-social-icon btn-instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
      

    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>