
<?php


$archivo = "contador.txt";

$contador= 0;

$fp = fopen($archivo, "r");

$contador = fgets($fp,10);

fclose($fp);

$contador++;
$fp = fopen($archivo,"w+");

fwrite($fp,$contador,10);

fclose($fp);
?>


<link rel="stylesheet" href="css/view.css">

<div class="view" style="margin-top:20px;"><?php echo "$contador Veces vista";?></div>