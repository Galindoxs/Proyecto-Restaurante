<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--IMPORT-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Menu</title>
</head>
<body>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Restaurante</a>
        <div class="navbar-nav ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">ORDENES</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="perfilDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="ruta_a_la_foto_de_perfil.jpg" alt="Foto de perfil" class="rounded-circle" width="30" height="30">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="perfilDropdown">
                        <a class="dropdown-item" href="#">Cerrar Sesión</a>
                        <a class="dropdown-item" href="#">Ajustes</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!--MENU-->
    <!--ENTRADA-->
    <div class="container mt-5">
        <h2>ENTRADAS</h2>
        <div class="row">
            <!-- Platillo 1 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Platillo 1">
                    <div class="card-body">
                        <h5 class="card-title">Platillo 1</h5>
                        <p class="card-text">Precio: $10</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#platillo1Modal">Ver detalles</a>
                    </div>
                </div>
            </div>
            <!-- Platillo 2 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Platillo 2">
                    <div class="card-body">
                        <h5 class="card-title">Platillo 2</h5>
                        <p class="card-text">Precio: $12</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#platillo2Modal">Ver detalles</a>
                    </div>
                </div>
            </div>
            <!-- Más tarjetas de platillos aquí -->
        </div>
    </div>

    <!--PLATO FUERTE-->
    <div class="container mt-5">
        <h2>PLATO FUERTES</h2>
        <div class="row">
            <!-- Platillo 3 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Platillo 3">
                    <div class="card-body">
                        <h5 class="card-title">Platillo 3</h5>
                        <p class="card-text">Precio: $10</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#platillo3Modal">Ver detalles</a>
                    </div>
                </div>
            </div>
            <!-- Platillo 4 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Platillo 4">
                    <div class="card-body">
                        <h5 class="card-title">Platillo 4</h5>
                        <p class="card-text">Precio: $12</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#platillo4Modal">Ver detalles</a>
                    </div>
                </div>
            </div>
            <!-- Más tarjetas de platillos aquí -->
        </div>
    </div>
    
    <!--POSTRES-->
    <div class="container mt-5">
        <h2>POSTRES</h2>
        <div class="row">
            <!-- Platillo 5 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Platillo 5">
                    <div class="card-body">
                        <h5 class="card-title">Platillo 5</h5>
                        <p class="card-text">Precio: $10</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#platillo5Modal">Ver detalles</a>
                    </div>
                </div>
            </div>
            <!-- Platillo 6 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Platillo 6">
                    <div class="card-body">
                        <h5 class="card-title">Platillo 6</h5>
                        <p class="card-text">Precio: $12</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#platillo6Modal">Ver detalles</a>
                    </div>
                </div>
            </div>
            <!-- Más tarjetas de platillos aquí -->
        </div>
    </div>

    <!-- BEBIDAS -->
    <div class="container mt-5">
        <h2>BEBIDAS</h2>
        <div class="row">
            <!-- Bebidas 1 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Bebidas 1">
                    <div class="card-body">
                        <h5 class="card-title">Bebida 1</h5>
                        <p class="card-text">Precio: $10</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bebidas1Modal">Ver detalles</a>
                    </div>
                </div>
            </div>
            <!-- Bebidas 2 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Bebidas 2">
                    <div class="card-body">
                        <h5 class="card-title">Bebida 2</h5>
                        <p class="card-text">Precio: $12</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bebidas2Modal">Ver detalles</a>
                    </div>
                </div>
            </div>
            <!-- Más tarjetas de platillos aquí -->
        </div>
    </div>

    <!-- ALCOHOL -->
    <div class="container mt-5">
        <h2>BEBIDAS ALCOHOLICAS</h2>
        <div class="row">
            <!-- ALCOHOL 1 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="alcohol 1">
                    <div class="card-body">
                        <h5 class="card-title">Bebida alcoholica 1</h5>
                        <p class="card-text">Precio: $10</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#alcohol1Modal">Ver detalles</a>
                    </div>
                </div>
            </div>
            <!-- Bebidas 2 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="alcohol 2">
                    <div class="card-body">
                        <h5 class="card-title">Bebida alcoholica 2</h5>
                        <p class="card-text">Precio: $12</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#alcohol2Modal">Ver detalles</a>
                    </div>
                </div>
            </div>
            <!-- Más tarjetas de platillos aquí -->
        </div>
    </div>


    <!-- MODALES PLATILLOS -->
    <!-- ENTRADAS -->
    <!-- Platillo 1 -->
    <div class="modal fade" id="platillo1Modal" tabindex="-1" role="dialog" aria-labelledby="platillo1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="platillo1ModalLabel">Detalles de Platillo 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Platillo 1">
                    <p>Descripción del platillo 1.</p>
                    <p>Precio: $10</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ordenar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Platillo 2 -->
    <div class="modal fade" id="platillo2Modal" tabindex="-1" role="dialog" aria-labelledby="platillo2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="platillo2ModalLabel">Detalles de Platillo 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Platillo 2">
                    <p>Descripción del platillo 2.</p>
                    <p>Precio: $12</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ordenar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PLATOS FUERTES -->
    <!-- Platillo 3 -->
    <div class="modal fade" id="platillo3Modal" tabindex="-1" role="dialog" aria-labelledby="platillo3ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="platillo3ModalLabel">Detalles de Platillo 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Platillo 3">
                    <p>Descripción del platillo 3.</p>
                    <p>Precio: $10</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ordenar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Platillo 4 -->
    <div class="modal fade" id="platillo4Modal" tabindex="-1" role="dialog" aria-labelledby="platillo4ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="platillo4ModalLabel">Detalles de Platillo 4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Platillo 4">
                    <p>Descripción del platillo 4.</p>
                    <p>Precio: $10</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ordenar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- PLATOS FUERTES -->
    <!-- Platillo 5 -->
    <div class="modal fade" id="platillo5Modal" tabindex="-1" role="dialog" aria-labelledby="platillo5ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="platillo5ModalLabel">Detalles de Platillo 5</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Platillo 5">
                    <p>Descripción del platillo 5.</p>
                    <p>Precio: $10</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ordenar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Platillo 6 -->
    <div class="modal fade" id="platillo6Modal" tabindex="-1" role="dialog" aria-labelledby="platillo6ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="platillo6ModalLabel">Detalles de Platillo 6</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Platillo 6">
                    <p>Descripción del platillo 6.</p>
                    <p>Precio: $10</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ordenar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- BEBIDAS -->
    <!-- Bebidas 1 -->
    <div class="modal fade" id="bebidas1Modal" tabindex="-1" role="dialog" aria-labelledby="bebidas1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bebidas1ModalLabel">Detalles de Bebida 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Bebida 1">
                    <p>Descripción del Bebida 1.</p>
                    <p>Precio: $10</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ordenar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bebidas 2 -->
    <div class="modal fade" id="bebidas2Modal" tabindex="-1" role="dialog" aria-labelledby="bebidas2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bebidas2ModalLabel">Detalles de Bebida 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Bebida 2">
                    <p>Descripción del Bebida 2.</p>
                    <p>Precio: $12</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ordenar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- BEBIDAS ALCOHOLICAS -->
    <!-- Alcohol 1 -->
    <div class="modal fade" id="alcohol1Modal" tabindex="-1" role="dialog" aria-labelledby="alcohol1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alcohol1ModalLabel">Detalles de bebida alcoholica 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Bebida alcoholica 1">
                    <p>Descripción del Bebida Alcoholica 1.</p>
                    <p>Precio: $10</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ordenar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bebidas 2 -->
    <div class="modal fade" id="alcohol2Modal" tabindex="-1" role="dialog" aria-labelledby="alcohol2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alcohol2ModalLabel">Detalles de Bebida Alcoholica 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="https://via.placeholder.com/250" class="img-fluid" alt="Bebida alcoholica 2">
                    <p>Descripción del Bebida alcoholico 2.</p>
                    <p>Precio: $12</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Ordenar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DE ORDENES -->
    <div class="modal fade" id="ordenesModal" tabindex="-1" role="dialog" aria-labelledby="ordenesModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ordenesModalLabel">Órdenes del Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="ordenesModalBody">
                    <!-- Aquí se mostrarán las órdenes del usuario -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>




    


    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</body>
</html>