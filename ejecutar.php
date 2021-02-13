<html>


<head><title>CALCULO DE LA HIPOTENUSA DEL TRIANGULO RECTANGULO</title></head>



<body>


<?php
 if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
$co = $_POST['co'];
$ca = $_POST['ca'];
$hipo = null;
 if(!empty($co) or !empty($ca)) {
 echo "<h2 align='center'>CALCULO DE LA HIPOTENUSA DEL TRIANGULO RECTANGULO</h2>";
 $hipo = sqrt(pow($co,2) + pow($ca,2));
 echo "<br>Cateto opuesto: " . $co;
 echo "<br>Cateto adyacente: " . $ca;
 echo "<br/><br/>";
 echo "<br>Hipotenusa: " . round($hipo,2);
 echo "<br/><br/>";
 echo "<a href='datos.html'>Regresar</a>";
 }
 }
?>
</body>



</html>