<?PHP
session_start();
if($_SESSION['paciente_id']=='')
{
    header('Location:index.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<script>
function submit{
$.ajax(
{
url : "grava-anamnese-auto.php",
type: "POST",
data : {id: "<?=$id?>", anamnese_motivo_consulta: anamnese_motivo_consulta, anamnese_patologias: anamnese_patologias, anamnese_exames: anamnese_exames, anamnese_medicacao: anamnese_medicacao, anamnese_medicacao_descritivo: anamnese_medicacao_descritivo, anamnese_tabaco: anamnese_tabaco, anamnese_alcool: anamnese_alcool, anamnese_alcool_descritivo: anamnese_alcool_descritivo, anamnese_historial_clinico: anamnese_historial_clinico, anamnese_interfere_alimentacao: anamnese_interfere_alimentacao, anamnese_alteracao_gastrointestinal: anamnese_alteracao_gastrointestinal, anamnese_consistencia_alimentacao: anamnese_consistencia_alimentacao, anamnese_consumo_alimentar: anamnese_consumo_alimentar, anamnese_consumo_alimentar_descritivo: anamnese_consumo_alimentar_descritivo, anamnese_alergia_alimentar: anamnese_alergia_alimentar, anamnese_alergia_alimentar_descritivo: anamnese_alergia_alimentar_descritivo, anamnese_hora_acordar: anamnese_hora_acordar, anamnese_gasto_energetico: anamnese_gasto_energetico, anamnese_taxa_metabolica: anamnese_taxa_metabolica, anamnese_fator_atividade: anamnese_fator_atividade, anamnese_gravida_amamentar: anamnese_gravida_amamentar, anamnese_gravidez: anamnese_gravidez, anamnese_aleitamento: anamnese_aleitamento, anamnese_notas_clinicas: anamnese_notas_clinicas},
success:function(data)
{
if(data!=2){
Notiflix.Notify.Success('<?if($idioma==1){echo "Salvo com sucesso!";} else{echo "Saved successfully!";}?>', {showOnlyTheLastOne: false, timeout: 1000});
is_Dirty=false;
}
}
});
}
</script>
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
        <h2 class="mb-3">Questionário</h2>
        
	  
	  <form id="signatureform" method="POST" enctype="multipart/form-data" action="savequiz.php"> 
		<p>Vamos continuar a recolher e tratar os seus dados com a confiança de sempre, tratando os mesmos unica e exclusivamente para efeitos estatisticos e cientificos.</p>
			
			<br>
                        <textarea rows="5" style="width: 100%" type="text" name=""></textarea>
			
			<label for="vehicle1">Genero</label><br>
                        <select type="text" name="sex">
                            <option value="0"></option>
                            <option value="1">homem</option>
                            <option value="2">mulher</option>
                        </select>

			<label style="display:block" for="vehicle1">Idade</label>
			<input style="display:block" type="text" name="idade" id="idade">
			
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