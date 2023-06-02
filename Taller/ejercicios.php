<?php

$gravedadesFrac=[
  'Sol'=> 28.04,
  'Mercurio'=> 0.377,
  'Venus'=> 0.903,
  'Tierra'=> 1,
  'Marte'=> 0.37,
  'Jupiter'=> 2.52,
  'Saturno'=> 1.06,
  'Urano'=> 0.903,
  'Neptuno'=> 1.13
];

 function multiplicar(float $gravedad): float{
    return $gravedad*9.84;
}

$gravedadesCal=array_map("multiplicar",$gravedadesFrac);


$gravedadesStr = json_encode($gravedadesCal);

header('Location: index.php?gravedades='. urlencode($gravedadesStr));



?>