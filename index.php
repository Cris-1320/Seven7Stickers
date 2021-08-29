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
    <title>Etiquetin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #C0392B;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">Etiquetin</a>
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
        <div class="bd-example">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=""
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3" class=""></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555"
                                dy=".3em">Primer slide</text>
                        </svg>

                    </div>
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444"
                                dy=".3em">segundo slide</text>
                        </svg>

                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333"
                                dy=".3em">tercer slide</text>
                        </svg>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </div>
    <div class="tarjetas text-center">
        <div class="row row-cols-1 row-cols-md-4 g-4 ">
            <div class="col">
                <a href="#">
                    <!-- //TODO: LINKS CATEGORIAS PHP DB  -->
                    <div class="card bg-dark text-white text-center">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                                dy=".3em">Imagen 1</text>
                        </svg>
                        <div class="card-img-overlay">
                            <h5 class="card-title">Etiquetas autoadhesivas</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <!-- //TODO: LINKS CATEGORIAS PHP DB  -->
                    <div class="card bg-dark text-white text-center">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                                dy=".3em">Imagen 2</text>
                        </svg>
                        <div class="card-img-overlay">
                            <h5 class="card-title">Impresoras de etiquetas</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <!-- //TODO: LINKS CATEGORIAS PHP DB  -->
                    <div class="card bg-dark text-white">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                                dy=".3em">Imagen 3</text>
                        </svg>
                        <div class="card-img-overlay text-center">
                            <h5 class="card-title">Ribbons</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col  text-center">
                <a href="#">
                    <!-- //TODO: LINKS CATEGORIAS PHP DB  -->
                    <div class="card bg-dark text-white">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                                dy=".3em">Imagen 4</text>
                        </svg>
                        <div class="card-img-overlay text-center">
                            <h5 class="card-title  text-center">Software</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>