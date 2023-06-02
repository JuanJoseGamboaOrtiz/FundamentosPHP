<?php

$flotaNaves=[
  'Nave1'=> 28.04,
  'Nave2'=> 35.15,
  'Nave3'=> 62.24,
  'Nave4'=> 42.74,
  'Nave5'=> 99.03,
  'Nave6'=> 80.19,
  'Nave7'=> 21.37,

];



$masaFlota=array_sum($flotaNaves);



header('Location: index.php?masaFlota='. urlencode($masaFlota));



?>