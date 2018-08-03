<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Coopfutura</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700,700i" rel="stylesheet"> 
</head>
<body>
	<header class="header">
		<div class="container">
			<nav class="row justify-content-between align-items-center">
				<div class="img-brand col-8 col-md-2">
					<a href="index.php"><img src="img/logo.png" alt="" class="img-fluid"></a>
				</div>
				<div class="btn_toggle col-3 d-md-none">
					<img src="img/menu.png" alt="" class="img-fluid">
				</div>
				<div class="col-12 col-md-8">
					<ul class="nav justify-content-end">
						<li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
						<li class="nav-item"><a href="index.php#quienes-somos" class="nav-link">¿Quiénes somos?</a></li>
						<li class="nav-item link_dropdown">
							<div class="item_dropdown">
								<a href="index.php#nuestros-servicios" class="nav-link">Servicios</a>
								<div class="div_img">
									<img src="img/back(1).png" alt="" class="img-fluid">
								</div>
							</div>
							
							<ul class="nav flex-column content_dropdown">
								<li class="nav-item"><a href="credito-pensionados.php" class="nav-link">Crédito por libranza para pensionados</a></li>
								<li><hr class="separator"></li>
								<li class="nav-item"><a href="empleados-publicos.php" class="nav-link">Crédito por libranza para empleados públicos</a></li>
							</ul>
						</li>
						<li class="nav-item"><a href="index.php#nuestro-blog" class="nav-link">Blog</a></li>
						<li class="nav-item"><a href="index.php#contacto" class="nav-link">Contacto</a></li>
					</ul>	
				</div>
			</nav>
		</div>
	</header>
	<div class="back-to-top">
		<a href="#home"><img src="img/up-arrow(1).png" alt="" class="img-fluid"></a>
	</div>
	<div class="float-buttons">
		<ul>
			<li>
				<div class="img_left">
					<a href="#"><img src="img/mail-black-envelope-symbol.png" alt="" class="img-fluid"></a>
				</div>
				<div class="text_right">
					<a href="#contacto">Envíanos un mensaje</a>	
				</div>
			</li>
			<li>
				<div class="img_left">
					<a href="#" data-toggle="modal" data-target="#exampleModal"><img src="img/office-worker-outline.png" alt="" class="img-fluid"></a>
				</div>
				<div class="text_right">
					<a href="#" data-toggle="modal" data-target="#exampleModal">Trabaja con nosotros</a>	
				</div>
			</li>
		</ul>
	</div>

	<!-- Large modal -->

		<!-- Modal -->
		<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Trabaja en <span class="color_green">Coopfutura</span></h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<p class="text-center">Envíanos tus datos para acceder a nuestras convocatorias de empleo y haz parte de esta gran empresa.</p>
		        <form action="" class="form_contact">
		        	<div class="form-row">
		        		<div class="form-group col-12 col-md-6">
							<label for="nombre"><img src="img/man-user.png" alt=""><span class="line_separator">|</span></label>
							<input type="text" class="form-control" name="nombre" placeholder="Nombres y apellidos*" id="nombre">
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="edad"><img src="img/cake.png" alt=""><span class="line_separator">|</span></label>
							<input type="text" class="form-control" name="edad" placeholder="Edad en años*" id="edad">
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="profesion"><img src="img/businessman.png" alt=""><span class="line_separator">|</span></label>
							<input type="text" class="form-control" name="profesion" placeholder="Profesión*" id="profesion">
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="ciudad"><img src="img/building.png" alt=""><span class="line_separator">|</span></label>
							<input type="text" class="form-control" name="ciudad" placeholder="Ciudad*" id="ciudad">
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="cargo"><img src="img/working-with-laptop.png" alt=""><span class="line_separator">|</span></label>
							<input type="email" class="form-control" name="cargo" placeholder="Cargo al que te postulas*" id="cargo">
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="correo"><img src="img/mail-black-envelope-symbol(1).png" alt=""><span class="line_separator">|</span></label>
							<input type="email" class="form-control" name="correo" placeholder="Correo*" id="correo">
						</div>
						<div class="form-group col-12">
							<label for="telefono"><img src="img/icon.png" alt=""><span class="line_separator">|</span></label>
							<input type="phone" class="form-control" name="telefono" placeholder="Teléfono fijo o móvil*" id="telefono">
						</div>
						<div class="col-12 text-center">
							<input type="submit" class="btn btn-secondary" value="ENVIAR">
						</div>
		        	</div>
		        </form>
		      </div>
		      <div class="modal-footer">
		       <span>*Campo obligatorio</span>
		      </div>
		    </div>
		  </div>
		</div>