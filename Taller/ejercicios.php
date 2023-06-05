<?php

$planetas1=["Venus","Tierra","Marte","Neptuno","Urano","Pluton","Saturno","Jupiter"];
$planetas2=["Pluto","Sedna","Marte","Quaoar","Urano","Pluton","Saturno","Jupiter"];

$texto=array_diff($planetas1,$planetas2);
$texto2=array_diff($planetas2,$planetas1);

header('Location: index.php?existe=' . urlencode(json_encode($texto)) . '&existe2=' . urlencode(json_encode($texto2)));

?>