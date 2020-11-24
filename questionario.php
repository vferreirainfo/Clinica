<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
	
    function validate() {
		var url = window.location.href;
		var nurl = new URL(url);
		var name = nurl.searchParams.get("name");
				
        if (document.getElementById('termos').checked && document.getElementById('pprivacidade').checked && document.getElementById('RGPD').checked) {
            window.open("quiz.php?name="+name+"");
        } else {
            alert("Por favor forneça consentimento, ou se não está de acordo clique em não consinto");
        }
    }
    </script>
<head>
  <title>ITSolution - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
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
  <div class="wrap">
   <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md d-flex align-items-center">
       <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
     </div>
     <div class="col-12 col-md d-flex justify-content-md-end">
       <div class="social-media">
        <p class="mb-0 d-flex">
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
         <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
       </p>
     </div>
   </div>
 </div>
</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
 <div class="container">
   <img src="https://softdiet.pt/img/logo.jpg" width="130" height="80">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
       <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
       <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
       <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
       <li class="nav-item"><a href="cases.html" class="nav-link">Case Study</a></li>
       <li class="nav-item active"><a href="blog.html" class="nav-link">Blog</a></li>
       <li class="nav-item"><a href="contact.html" class="nav-link">Contact us</a></li>
       <li class="nav-item cta"><a href="#" class="nav-link">Free Consultation</a></li>

     </ul>
   </div>
 </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">Consentimento de dados pessoais</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog single <i class="fa fa-chevron-right"></i></span></p>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <h2 class="mb-3">Consentimento de dados</h2>
        <p style="text-align:justify">Por forma a proteger a sua informação, nós atualizamos as condições de utilização do sistema e a politica de protecção de dados pessoais do sistema, em linha com o novo regulamento geral de protecção de dados (RGPD). Este novo quadro legal, em vigor a partir do dia 25 de maio de 2018, establece regras sobre a protecção e utilização de dados pessoais das pessoas singulares, tornando mais claros os direitos e deveres das empresas e dos clientes sobre estes dados </p>
        <p>Vamos continuar a recolher e tratar os seus dados com a confiança de sempre, tratando os mesmos unica e exclusivamente para efeitos estatisticos e cientificos.</p>
      
	  <br>
	  <form onsubmit="validate()">
			<input type="checkbox" id="termos">
			<label for="vehicle1"> Eu aceito os termos de utilização</label><br>
			<input type="checkbox" id="pprivacidade">
			<label for="vehicle2"> Eu tenho conhecimento e aceito a politica de privacidade</label><br>
			<input type="checkbox" id="RGPD">
			<label for="vehicle2"> Eu autorizo o tratamento de dados pessoais para fins estatisticos e cientificos</label><br>
  
			<input type="submit" value="Avançar" style="width: 180px; height: 40px; background: #64FF33; padding: 10px;
			text-align: center; border-radius:5px; color: white;
			font-weight: bold; line-height: 25px">
			
			<a style="display: inline-block; margin-top:-8px; width: 180px; height: 40px; background: #FF3F33; padding: 10px;
			text-align: center; border-radius:5px; color: white;
			font-weight: bold; line-height: 25px" href="end.php"> Não consinto</a>
			
			
		</form>
	  </div>
	  
	 

    </div>
  </div>
</section> <!-- .section -->

<footer class="ftco-footer ftco-footer-2 ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-footer-logo">IT<span>solution</span></h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled mt-2">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Explore</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">About</a></li>
            <li><a href="#" class="py-2 d-block">Contact</a></li>
            <li><a href="#" class="py-2 d-block">What We Do</a></li>
            <li><a href="#" class="py-2 d-block">Plans &amp; Pricing</a></li>
            <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
            <li><a href="#" class="py-2 d-block">Call Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
       <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Legal</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Join Us</a></li>
          <li><a href="#" class="py-2 d-block">Blog</a></li>
          <li><a href="#" class="py-2 d-block">Privacy &amp; Policy</a></li>
          <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
          <li><a href="#" class="py-2 d-block">Careers</a></li>
          <li><a href="#" class="py-2 d-block">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
           <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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