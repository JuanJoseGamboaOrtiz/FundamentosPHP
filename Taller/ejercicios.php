<?php



$planetas=[
  "Mercurio",
  "Venus",
  "Tierra",
  "Marte",
  "Jupiter",
  "Saturno",
  "Urano",
  "Nepturno"
];

$planetas=array_reverse($planetas);

header('Location: index.php?existe=' . urlencode(json_encode($planetas)));

?>