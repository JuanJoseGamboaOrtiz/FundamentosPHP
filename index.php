<?php
/**
 * !! 5. Introducción a PHP
 * * Es necesaria la estructura  <?php?> para indicar que es codigo PHP 
 * 
 * !! 6. Funciones de Salida
 * * echo() se usa para imprimir en PHP
 */

 echo "Hola Mundo";
  
 /**
  * * Para crear una variable es necesario tener un signo de dolar
  * * printf es similar a echo pero solo imprime una cadena de texto
  * * sprintf devuelve la cadena formateada
  */
 $texto="Antonio";
 printf("Hola %s", $texto);
 
 $cadena=sprintf("Hola $",$texto);

 /*
  !! 7.Variables y constantes 
  * Variable númerica
  */
  $edad=25;

  /*
  *Variable de texto
   */
  $texto="Texto";
  /*
   * Variable Booleana
   */
  $es_valido=true;

  /*
  *Constantes
  *Variable númerica 
   */
  define ('PI',3.1415);
?>