<?php

$tipoNaves=["crusero","consular","exploracion"];

$texto = '';
if(in_array(strtolower(str_replace(' ', '',$_POST['tipo'])), $tipoNaves)){
 $texto = 'El tipo de nave EXISTE';
}else{
  $texto = 'El tipo de nave NO EXISTE';
}

header('Location: index.php?existe=' . urlencode($texto));

?>