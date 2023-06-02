<?php

$planetas=["SOL","MERCURIO","VENUS","TIERRA","MARTE","JUPITER","SARTURNO","URANO","NEPTUNO"];


$mayus=strtoupper($_POST['nombre']);
$texto='';
var_dump($mayus);
if(in_array($mayus,$planetas)){
  $texto="El planeta " . $mayus . ' Si está en el sistema Solar';
}else{
  $texto="El planeta " . $mayus . ' No está en el sistema Solar';
}


header('Location: index.php?existe=' . urlencode($texto) );

?>