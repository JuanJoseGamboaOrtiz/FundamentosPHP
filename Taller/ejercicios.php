<?php

$numero=intval($_POST['numero']);

$planetas=[
    "sol"=>1,
    "mercurio"=>2,
    "venus"=>3,
    "tierra"=>4,
    "marte"=>5,
    "jupiter"=>6,
    "saturno"=>7,
    "urano"=>8,
    "neptuno"=>9
];

$resultado=array_flip($planetas)[$numero];


header("Location: index.php?resultado=" . urlencode($resultado));
?>