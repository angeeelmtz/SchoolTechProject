<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar Sesion</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="icon" href="logo.png">
	<link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
</head>
  
<body class="body-login">

<!-- Topbar Start -->
<div class="container-fluid d-none d-lg-block">
      <div class="row align-items-center py-4 px-xl-5">
        <div class="col-lg-3">
          <a href="" class="text-decoration-none d-flex align-items-center">
            <img width="70px" src="./img/Diseño sin título.png" alt="" />
            <h1 class="m-0"><span class="text-primary">TECH</span>VERSITY</h1>
          </a>
        </div>
        <div class="col-lg-3 text-right">
          <div class="d-inline-flex align-items-center">
            <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
            <div class="text-left">
              <h6 class="font-weight-semi-bold mb-1">Nuestra Dirección</h6>
              <small>Panamá City, Panamá</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-right">
          <div class="d-inline-flex align-items-center">
            <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
            <div class="text-left">
              <h6 class="font-weight-semi-bold mb-1">Email</h6>
              <small>info@techversity.com</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-right">
          <div class="d-inline-flex align-items-center">
            <i class="fa fa-2x fa-phone text-primary mr-3"></i>
            <div class="text-left">
              <h6 class="font-weight-semi-bold mb-1">LLámanos</h6>
              <small>+255 2438</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid">
      <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
          <a
            class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none"
            data-toggle="collapse"
            href="#navbar-vertical"
            style="height: 67px; padding: 0 30px"
          >
            <h5 class="text-primary m-0">
              <i class="fa fa-book-open mr-2"></i>Carreras
            </h5>
            <i class="fa fa-angle-down text-primary"></i>
          </a>
          <nav
            class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
            id="navbar-vertical"
            style="width: calc(100% - 30px); z-index: 9"
          >
            <div class="navbar-nav w-100">
              <div class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown"
                  >Diseño web<i class="fa fa-angle-down float-right mt-1"></i
                ></a>
                <div
                  class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0"
                >
                  <a href="" class="dropdown-item">JS</a>
                  <a href="" class="dropdown-item">PHP</a>
                  <a href="" class="dropdown-item">Python</a>
                </div>
              </div>
              <a href="" class="nav-item nav-link"
                >Lic. Ingeniería en informática</a
              >
              <a href="" class="nav-item nav-link">Lic. Ciencia de datos</a>
              <a href="" class="nav-item nav-link">Lic. Comercio Electrónico</a>
              <a href="" class="nav-item nav-link">Lic. Ciberseguridad</a>
            </div>
          </nav>
        </div>
        <div class="col-lg-9">
          <nav
            class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0"
          >
            <a href="" class="text-decoration-none d-block d-lg-none">
              <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
            </a>
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarCollapse"
            >
              <div class="navbar-nav py-0">
                <a href="index.html" class="nav-item nav-link active">Inicio</a>
                <a href="about.html" class="nav-item nav-link">Acerca</a>
                <a href="course.html" class="nav-item nav-link">Cursos</a>
                <a href="teacher.html" class="nav-item nav-link">Profesores</a>
                <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    >Blog</a
                  >
                  <div class="dropdown-menu rounded-0 m-0">
                    <a href="blog.html" class="dropdown-item">Blog List</a>
                    <a href="single.html" class="dropdown-item">Blog Detail</a>
                  </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contacto</a>
              </div>
              <a
                class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"
                href="login.php"
                >Iniciar Sesion</a
              >
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->
	<div class="black-fill"><br /> <br />
		<div class="d-flex justify-content-center align-items-center flex-column">
			<form class="login" method="post" action="req/login.php">

				<div class="text-center">
					<img src="./img/Diseño sin título.png" width="55">
					<br>
					<br>
				
				</div>
				<h3>Iniciar Sesión</h3>
				<?php if (isset($_GET['error'])) { ?>
					<div class="alert alert-danger" role="alert">
						<?= $_GET['error'] ?>
					</div>
				<?php } ?>
				<div class="mb-3">
					<label class="form-label">Usuario</label>
					<input type="text" class="form-control" name="uname">
				</div>

				<div class="mb-3">
					<label class="form-label">Contraseña</label>
					<input type="password" class="form-control" name="pass">
				</div>

				<div class="mb-3">
					<label class="form-label">Acceder como</label>
					<select class="form-control" name="role">
						<option value="1">Admin</option>
						<option value="2">Profesor@</option>
						<option value="3">Estudiante</option>
						<option value="4">Acceso Staff</option>
					</select>
				</div>
				<div class="btn-flex">
				<button type="submit" class="btn btn-primary">Accder</button>
				<a href="./index.html" class="btn btn-primary text-decoration-none">Inicio</a>
				</div>
			</form>
			<br>
			<br>

		</div>
	</div>
	<!-- Footer Start -->
  <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px">
      <div class="row pt-5">
        <div class="col-lg-7 col-md-12">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px">Contáctanos</h5>
              <p><i class="fa fa-map-marker-alt mr-2"></i>Panamá City, Panamá</p>
              <p><i class="fa fa-phone-alt mr-2"></i>+255 2438</p>
              <p><i class="fa fa-envelope mr-2"></i>info@techversity.com</p>
              <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="col-md-6 mb-5">
              <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px">Nuestros bachilleres</h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bachiller en Ciencias</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bachiller en Comercio</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bachiller en Humanidades</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bachiller en Tecnología</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 mb-5">
          <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px">Newsletter</h5>
          <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>
          <div class="w-100">
            <div class="input-group">
              <input type="text" class="form-control border-light" style="padding: 30px" placeholder="Tu correo electrónico"/>
              <div class="input-group-append">
                <button class="btn btn-primary px-4">Regístrate Ahora</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, 0.1) !important">
      <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
          <p class="m-0 text-white">
            &copy; <a href="#">techversity</a>. Todos los derechos reservados. <!-- Designed by
            <a href="https://htmlcodex.com">TerryDev</a> -->
          </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
          <ul class="nav d-inline-flex">
            <li class="nav-item"><a class="nav-link text-white py-0" href="#">Privacidad</a></li>
            <li class="nav-item"><a class="nav-link text-white py-0" href="#">Términos</a></li>
            <li class="nav-item"><a class="nav-link text-white py-0" href="#">FAQs</a></li>
            <li class="nav-item"><a class="nav-link text-white py-0" href="#">Ayuda</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Footer End -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>