

<html>
<body>

<h1>The iframe element</h1>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


     //?

    
    $nomePrato = $_POST["nomeprato"];// ??
    $urlCompleto=$url.str_replace(" ", "-", $nomePrato);  //https://www.fatsecret.pt/calorias-nutrição/genérico/Francesinha 
    
    echo $urlCompleto;
    //$test = file_get_contents($urlCompleto);
    //echo $test;
    
    
    
?>

<iframe src="<?php $url = "www.fatsecret.pt/calorias-nutrição/genérico/"; echo $urlCompleto ?>"  width="100%" height="250px">
</iframe>

</body>
</html>