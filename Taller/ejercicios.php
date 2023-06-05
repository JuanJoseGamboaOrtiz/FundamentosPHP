<?php

$planetas=["Mercurio","Venus","Tierra","Marte","Jupiter","Saturno","Urano","Neptuno"];

$texto=array_rand(array_flip($planetas));

header('Location: index.php?existe=' . urlencode($texto));

?>