<?php

$planetas1=["Venus","Tierra","Marte","Neptuno","Urano","Pluton","Saturno","Jupiter"];
$planetas2=["Pluto","Sedna","Marte","Quaoar","Urano","Pluton","Saturno","Jupiter"];

$texto=array_intersect($planetas1,$planetas2);

header('Location: index.php?existe=' . urlencode(json_encode($texto)));

?>