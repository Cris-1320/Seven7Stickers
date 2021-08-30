<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="src/logochico.ico" type="image/x-icon">
    <title>SEVEN7STICKERS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #C0392B;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">SEVEN7STICKERS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">asdf</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">asd</a></li>
                            <li><a class="dropdown-item" href="#">asd</a></li>
                            <li><a class="dropdown-item" href="#">asd</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar... &#x1F50D;" aria-label="Search"
                        name="s">
                    <button class="btn btn-danger" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="giragira">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="src\fotoejemplo.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src\fotoejemplo.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="src\fotoejemplo.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="tarjetas">
        <div class="row row-cols-1 row-cols-md-4 g-4 ">
            <div class="col">
                <a href="#">
                    <div class="card bg-dark text-white">
                        <img src="src\fotoejemplo.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Etiquetas Autoadhesivas</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="card bg-dark text-white">
                        <img src="src\fotoejemplo.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Impresoras de Etiquetas</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="card bg-dark text-white">
                        <img src="src\fotoejemplo.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Ribborn</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="card bg-dark text-white">
                        <img src="src\fotoejemplo.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Software</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js">
        </script>
</body>

</html>