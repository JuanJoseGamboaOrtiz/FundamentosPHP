<?php

$planetas=[
  'Sol'=> false,
  'Mercurio'=> false,
  'Venus'=> false,
  'Tierra'=> true,
  'Marte'=> false,
  'Jupiter'=> false,
  'Saturno'=> false,
  'Urano'=> false,
  'Neptuno'=> false
];


$planetasH=array_filter($planetas);

$planetasStr = json_encode($planetasH);

header('Location: index.php?planetas='. urlencode($planetasStr));



?>