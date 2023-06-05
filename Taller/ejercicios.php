<?php

$alienigenas=[
  "Midicloriano",
  "Twi'lek",
  "Ewok",
  "Gungan",
  "Trandoshano",
  "Asogiano",
  "Asogiano",
  "Ewok",
  "Midicloriano",
  "Kel Dor"];

$texto=array_unique($alienigenas);

header('Location: index.php?existe=' . urlencode(json_encode($texto)));

?>