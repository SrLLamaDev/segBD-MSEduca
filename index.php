<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a la escuela</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body-home">
    <div class="black-fill"><br/><br/>
        <div class="container">
        <!--asd-->
            <nav class="navbar navbar-expand-lg bg-light" id="homeNav">
                <div class="container-fluid">
                    <a class="navbar-brand me-auto" href="#">
                        <img src="img/logo.webp" width="50">
                    </a>

                    <button class="navbar-toggler me-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">
                                    Acerca de
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">
                                    Contacto
                                </a>
                            </li>
                            
                        </ul>
                        
                        <ul class="navbar-nav me-right mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Login
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div>
                        
                    </div>
                    

                </div>
            </nav>
        <!--asd-->
            <section class="welcome-text d-flex justify-content-center align-items-center flex-column">
                <img src="img/logo.webp">
                <h4>Bienvenido a las E</h4>
                <p>Esta es una plataforma de gestión escolar que te permite administrar estudiantes, profesores y cursos de manera eficiente.</p>	
            </section>

            <section class="welcome-text d-flex justify-content-center align-items-center flex-column">
                <div class="card mb-3 card-1">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/logo.webp" class="img-fluid rounded-start" >
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">About Us</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Y School</small></p>
                            </div>
                        </div>
                    </div>
			    </div>                
            </section>

            <section id="contact"
                 class="d-flex justify-content-center align-items-center flex-column">
        	    <form>
                    <h3>Contactanos</h3>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Direccion de email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">AAAAAAAAA</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellidos</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <h1>Bienvenido a la escuela</h1>
</body>
</html>