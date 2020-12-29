<?PHP
session_start();
if ($_POST['name']!="" and $_POST['password']!='' and isset($_POST['submit'])){
    
    
    $_SESSION['paciente_id']=1;
    header('Location:questionario.php');
}
    




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>SoftDiet</title>
	<meta charsudo apt-get install sublime-textºset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<script>
		function login()
		{
                        var x=1;
			var location='';
			var name = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			if(name=='Miguel' && password == '12345')
			{	
				window.open("questionario.php?name="+name+"&pass=123&45");
			
			}
			else
			{
				window.alert("wrong username or password");
			}
			
			this.location.href=location;
		}
	</script>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container" style="display:flex; align-items:center; justify-content:center">
			<a class="navbar-brand" href="#"><p style="margin:0; margin-left:550%">Soft<span style="text-align:center">diet</span></p></a>
			

			<div class="collapse navbar-collapse" id="ftco-nav">
				
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			
		</div>
		
		
	</div>
	
	<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4" style="text-align:center">Entrar no sistema</h3>
									<form id="contactForm" name="contactForm" method="POST" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Utilizador</label>
													<input type="text" class="form-control" name="name" id="username" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Password</label>
													<input type="password" class="form-control" name="password" id="password" placeholder="password">
												</div>
											</div>
											<div class="col-md-12" style="width:100%; position:relative; display:flex; flex-flow:column wrap; align-items:center">
												<div class="form-group">
													<input type="submit" value="Entrar" name='submit' class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										
										</div>
									</form>
								</div>
	<footer class="ftco-footer ftco-footer-2 ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-footer-logo">Soft<span>Diet</span></h2>
						<p>Fique a par de todo o nosso trabalho entrando numa das redes sociais abaixo. Visite já a nossa página, e fique a par das ultimas novidades</p>
						<ul class="ftco-footer-social list-unstyled mt-2">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
                            <!--
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Explore</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Sobre</a></li>
							<li><a href="#" class="py-2 d-block">Registo</a></li>
							<li><a href="#" class="py-2 d-block">Funcionalidades</a></li>
							<li><a href="#" class="py-2 d-block">Planos &amp; Preços</a></li>
							<li><a href="#" class="py-2 d-block">Politica de Reembolso</a></li>
							<li><a href="#" class="py-2 d-block">Contacte-nos</a></li>
						</ul>
					</div>
				</div>-->
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Legal</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Junte-se a nós</a></li>
							<li><a href="#" class="py-2 d-block">Blog</a></li>
							<li><a href="#" class="py-2 d-block">Politica &amp; Privacidade</a></li>
							<li><a href="#" class="py-2 d-block">Termos &amp; Condições</a></li>
							<li><a href="#" class="py-2 d-block">Planos alimentares</a></li>
							<li><a href="#" class="py-2 d-block">Contacto</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Endereço</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon fa fa-map marker"></span><span class="text">Rua Elias Garcia, Nº 23 4490-650 Póvoa de Varzim Portugal</span></li>
								<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">(+351) 936669133</span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">geral@softdiet.pt</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> SoftDiet
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
		
	</body>
	</html>