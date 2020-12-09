<!DOCTYPE html>
<html lang="en">



<?php 
if(isset($_POST['signaturesubmit'])){ 
    $signature = $_POST['signature']; //originalmente como POST
    $signatureFileName = uniqid().'.png';
    $signature = str_replace('data:image/png;base64,', '', $signature);
    $signature = str_replace(' ', '+', $signature);
    $data = base64_decode($signature);
    $file = 'signatures/'.$signatureFileName;
    file_put_contents($file, $data);
    $msg = "<div class='alert alert-success'>Signature Uploaded</div>";
} 
?>
<script type="text/javascript">
	 // genero
     var allRadios = document.getElementsByName('sex');
	 var booRadio;
     var x = 0;
     for(x = 0; x < allRadios.length; x++){
		allRadios[x].onclick = function() {
		if(booRadio == this){
			this.checked = false;
			booRadio = null;
		} else {
			booRadio = this;
	}
	};
	}
	
	//idade=document.getElementByID('idade');
	
	allRadios = document.getElementsByName('smoke')
	var x = 0;
     for(x = 0; x < allRadios.length; x++){
		allRadios[x].onclick = function() {
		if(booRadio == this){
			this.checked = false;
			booRadio = null;
		} else {
			booRadio = this;
	}
	};
	}
	
	
	allRadios = document.getElementsByName('Q1')
	var x = 0;
     for(x = 0; x < allRadios.length; x++){
		allRadios[x].onclick = function() {
		if(booRadio == this){
			this.checked = false;
			booRadio = null;
		} else {
			booRadio = this;
	}
	};
	}
	
	
	allRadios = document.getElementsByName('Q2')
	var x = 0;
     for(x = 0; x < allRadios.length; x++){
		allRadios[x].onclick = function() {
		if(booRadio == this){
			this.checked = false;
			booRadio = null;
		} else {
			booRadio = this;
	}
	};
	}
	
	allRadios = document.getElementsByName('Q3')
	var x = 0;
     for(x = 0; x < allRadios.length; x++){
		allRadios[x].onclick = function() {
		if(booRadio == this){
			this.checked = false;
			booRadio = null;
		} else {
			booRadio = this;
	}
	};
	}
	allRadios = document.getElementsByName('Q4')
	var x = 0;
     for(x = 0; x < allRadios.length; x++){
		allRadios[x].onclick = function() {
		if(booRadio == this){
			this.checked = false;
			booRadio = null;
		} else {
			booRadio = this;
	}
	};
	}
	
	
	var url = window.location.href;
	var nurl = new URL(url);
	var name = nurl.searchParams.get("name");
	alert(name);
	document.getElementById("user").setAttribute('value',name);
</script>


<head>
  <title>SoftDiet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/meuestilo.css">
  
  
  <script type="text/javascript" src="asset/jquery.signature.min.js"></script>
  <link rel="stylesheet" type="text/css" href="asset/jquery.signature.css">


      <style>
        .kbw-signature { width: 400px; height: 400px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>
</head>
<body>
  <div class="wrap">
   <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md d-flex align-items-center">
       <p class="mb-0 phone"><span class="mailus">Contacto:</span> <a href="#">+351 936669133</a> or <span class="mailus">email:</span> <a href="#">softdiet@geral.pt</a></p>
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
   <!--<img src="https://softdiet.pt/img/logo.jpg" width="130" height="80"> -->
   <a class="navbar-brand" href="index.html" id="link"><img src="https://scontent.fopo2-2.fna.fbcdn.net/v/t1.0-9/122958446_640492499969556_8572259873588969268_o.png?_nc_cat=105&ccb=2&_nc_sid=09cbfe&_nc_ohc=tRaSdZ7jf7QAX94tIvJ&_nc_oc=AQn8LNUqF0VckvHhOltMS2omxehE0e6tDrOlOAYvutmuXKuO16grgJLf5uKI1OpTC49SmgP0EnIovp7Vm0Pb6Ki8&_nc_ht=scontent.fopo2-2.fna&oh=0ee814649f6e9e188e1690556fd878a1&oe=5FE5FC3C" style="width:50px; height:50px">&nbsp;<p id="span-title-softdiet">Soft<span>diet</span></p></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="oi oi-menu"></span> Menu11
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
       <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
       <li class="nav-item"><a href="about.html" class="nav-link">Sobre</a></li>
       <li class="nav-item"><a href="services.html" class="nav-link">Preços</a></li>
       <li class="nav-item"><a href="cases.html" class="nav-link">Registar</a></li>
       <li class="nav-item active"><a href="blog.html" class="nav-link">Blog</a></li>
       <li class="nav-item"><a href="contact.html" class="nav-link">Contacte-nos</a></li>
       <li class="nav-item cta"><a href="#" class="nav-link">Fale Connosco</a></li>

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
        <h1 class="mb-3 bread">Questionário</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog single <i class="fa fa-chevron-right"></i></span></p>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <h2 class="mb-3">Questionário estatistico sobre saude</h2>
        
	  
	  <form id="signatureform" method="POST" action="savequiz.php">
		<p>Vamos continuar a recolher e tratar os seus dados com a confiança de sempre, tratando os mesmos unica e exclusivamente para efeitos estatisticos e cientificos.</p>
			
			<br>
			
                        <input type="text" name="username"  value="<?php
                        
                        
                        $uri = $_SERVER['REQUEST_URI'];
                        
                        $url_components = parse_url($uri);
                        parse_str($url_components['query'], $params); 
                        
                        echo $params['name'];
                        
                        ?>" hidden="true">
			
			<label for="vehicle1">Genero</label><br>
			<input type="radio" value="M" id="male" name="sex">
			<label for="male">M</label><br>
			<input type="radio" value="F" id="female" name="sex">
			<label for="male">F</label><br><br>

			<label for="vehicle1">Idade</label>
			<input type="text" name="idade" id="idade"><br><br>
			
			<label for="vehicle1">Fuma ?</label><br>
			<input type="radio" value="Y" id="Y" name="smoke">
			<label for="male">Sim</label><br>
			<input type="radio" value="N" id="N" name="smoke">
			<label for="male">Não</label><br>
			<input type="radio" value="OC" id="OC" name="smoke">
			<label for="male">Ocasionalmente</label><br>

			<br><br>
			<p>Em média quantas vezes tem dores ou problemas dentários durante 1 ano?</p>
			<input type="radio" value="1" id="one" name="Q1">
			<label for="vehicle1">1 ou menos vezes</label><br>
			<input type="radio" value="2" id="twotofive" name="Q1">
			<label for="vehicle1">2 a 5 vezes</label><br>
			<input type="radio" value="3" id="plusthanfive" name="Q1">
			<label for="vehicle1">mais do que 5 vezes</label>
			<br>
			<br>
			<p>Em média quantas vezes por ano efetua um checkup / consulta dentária?</p>
			<input type="radio" value="1" id="nulltotwo" name="Q2">
			<label for="vehicle1">0 a 2 vezes</label><br>
			<input type="radio" value="2" id="twotofour" name="Q2">
			<label for="vehicle1">2 a 4 vezes</label><br>
			<input type="radio" value="3" id="plusthanfive" name="Q2">
			<label for="vehicle1">mais do que 4 vezes</label>
			<br>
			<br>
			<p>Com que frequencia lava os dentes?</p>
			<input type="radio" value="1" id="nulltotwo" name="Q3">
			<label for="vehicle1">Diariamente 2 vezes ao dia</label><br>
			<input type="radio" value="2" id="twotofour" name="Q3">
			<label for="vehicle1">Diariamente 3 vezes ao dia</label><br>
			<input type="radio" value="3" id="plusthanfive" name="Q3">
			<label for="vehicle1">Diariamente 1 vez ao dia (noite ou meio-dia ou manha)</label>
			<br>
			<br>
			<p>Já alguma vez usou aparelhos/proteses dentárias?</p>
			<input type="radio" value="1" id="nulltotwo" name="Q4">
			<label for="vehicle1">Sim </label><br>
			<input type="radio" value="2" id="twotofour" name="Q4">
			<label for="vehicle1">Não</label><br>
			<br>
			<br>
			
			<br>
			<br>
			   <div class="col-md-12">
            <label class="" for="">Assinatura:</label>
            <br/>
            <div id="sig" ></div>
            <br/>
            <button id="clear">Clear Signature</button>
            <textarea id="signature64" name="signed" style="display: none"></textarea>
        </div>
	<input type="submit" value="Avançar" style="width: 180px; height: 40px; background: #64FF33; padding: 10px; text-align: center; border-radius:5px; color: white; font-weight: bold; line-height: 25px">
			
			
        </form>
			
			
			

	  </div>
	  <script type="text/javascript">
    	var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    	$('#clear').click(function(e) {
        	e.preventDefault();
        	sig.signature('clear');
        	$("#signature64").val('');
    });
	</script>

	 

    </div>
  </div>
</section> <!-- .section -->

<footer class="ftco-footer ftco-footer-2 ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-footer-logo">Siga-nos nas redes sociais</h2>
          <p>Fique a par de todo o nosso trabalho entrando numa das redes sociais abaixo. Visite já a nossa página, e fique a par das ultimas novidades</p>
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
            <li><a href="#" class="py-2 d-block">Sobre</a></li>
            <li><a href="#" class="py-2 d-block">Registo</a></li>
            <li><a href="#" class="py-2 d-block">Funcionalidades</a></li>
            <li><a href="#" class="py-2 d-block">Planos &amp; Preços</a></li>
            <li><a href="#" class="py-2 d-block" id="x">Politica de Reembolso</a></li>
            <li><a href="#" class="py-2 d-block" id="x">Contacte-nos</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
       <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Legal</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Junte-se a nós</a></li>
          <li><a href="#" class="py-2 d-block">Blog</a></li>
          <li><a href="#" class="py-2 d-block">Politica &amp; Privacidade</a></li>
          <li><a href="#" class="py-2 d-block">Termos &amp; Condições</a></li>
          <li><a href="#" class="py-2 d-block">Planos Alimentares</a></li>
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
           <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">softdiet@geral.pt</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> Softdiet
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script>
    $(document).ready(() => {
        var canvasDiv = document.getElementById('canvasDiv');
        var canvas = document.createElement('canvas');
        canvas.setAttribute('id', 'canvas');
        canvasDiv.appendChild(canvas);
        $("#canvas").attr('height', $("#canvasDiv").outerHeight());
        $("#canvas").attr('width', $("#canvasDiv").width());
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }
        
        context = canvas.getContext("2d");
        $('#canvas').mousedown(function(e) {
            var offset = $(this).offset()
            var mouseX = e.pageX - this.offsetLeft;
            var mouseY = e.pageY - this.offsetTop;

            paint = true;
            addClick(e.pageX - offset.left, e.pageY - offset.top);
            redraw();
        });

        $('#canvas').mousemove(function(e) {
            if (paint) {
                var offset = $(this).offset()
                //addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
                addClick(e.pageX - offset.left, e.pageY - offset.top, true);
                console.log(e.pageX, offset.left, e.pageY, offset.top);
                redraw();
            }
        });

        $('#canvas').mouseup(function(e) {
            paint = false;
        });

        $('#canvas').mouseleave(function(e) {
            paint = false;
        });

        var clickX = new Array();
        var clickY = new Array();
        var clickDrag = new Array();
        var paint;

        function addClick(x, y, dragging) {
            clickX.push(x);
            clickY.push(y);
            clickDrag.push(dragging);
        }

        $("#reset-btn").click(function() {
            context.clearRect(0, 0, window.innerWidth, window.innerWidth);
            clickX = [];
            clickY = [];
            clickDrag = [];
        });

        $(document).on('click', '#btn-save', function() {
            var mycanvas = document.getElementById('canvas');
            var img = mycanvas.toDataURL("image/png");
            anchor = $("#signature");
            anchor.val(img);
            $("#signatureform").submit();
        });

        var drawing = false;
        var mousePos = {
            x: 0,
            y: 0
        };
        var lastPos = mousePos;

        canvas.addEventListener("touchstart", function(e) {
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var mouseEvent = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchend", function(e) {
            var mouseEvent = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchmove", function(e) {

            var touch = e.touches[0];
            var offset = $('#canvas').offset();
            var mouseEvent = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);



        // Get the position of a touch relative to the canvas
        function getTouchPos(canvasDiv, touchEvent) {
            var rect = canvasDiv.getBoundingClientRect();
            return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top
            };
        }


        var elem = document.getElementById("canvas");

        var defaultPrevent = function(e) {
            e.preventDefault();
        }
        elem.addEventListener("touchstart", defaultPrevent);
        elem.addEventListener("touchmove", defaultPrevent);


        function redraw() {
            //
            lastPos = mousePos;
            for (var i = 0; i < clickX.length; i++) {
                context.beginPath();
                if (clickDrag[i] && i) {
                    context.moveTo(clickX[i - 1], clickY[i - 1]);
                } else {
                    context.moveTo(clickX[i] - 1, clickY[i]);
                }
                context.lineTo(clickX[i], clickY[i]);
                context.closePath();
                context.stroke();
            }
        }
    })

</script>
</html>