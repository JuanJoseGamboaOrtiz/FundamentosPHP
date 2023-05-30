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

  /**
   !! 8. Tipos de datos
   ** Boolean
   */
   $logueado=true;
   var_dump($logueado);
   /**
    * *Enteros
    */
    $numero=200;
    var_dump($numero);
    /**
     * *Floats
     */
    $float=200.5;
    var_dump($numero);
    /**
     * *Strings
     */
    $nombre="Juan";

    /**
     * *Array
     */
    $array=[];
    var_dump($array);
    /**
     !! 9 Números y operadores
     */

     $numero1=20;
     $numero2=10;
     $numero3=15;
     $numero4='20';

     /**
      * Operador Mayor que >
      */
     var_dump($numero1 > $numero2);
     echo '<br>';

    /**
     * Operador Menor que <
     */
     var_dump($numero1 < $numero2);
     echo '<br>';

     /**
     * Operador Mayor o igual  >=
     */
    var_dump($numero1 >= $numero2);
    echo '<br>';

     /**
     * Operador Menor o igual  <=
     */
    var_dump($numero1 <= $numero2);
    echo '<br>';

    /**
     * Operador igual ==
     */
    var_dump($numero1 == $numero2);
    echo '<br>';
    /**
     * Operador estrictamente igual ===
     */
    var_dump($numero1 == $numero4);
    echo '<br>';

    /**
     * * -1 Si izquierda es menor,
     * * 0 Si es igual,
     * * 1 Si izquierda es mayor
     */

    var_dump($numero1 <=> $numero2);
    echo '<br>';

    $nombreCliente= "Juan Cliente";

    /**
    * *Conocer extension de un string
    */

    echo strlen($nombreCliente);
    var_dump($nombreCliente);

    /**
     * * Eliminar espacios en blanco
     */
    $texto=trim($nombreCliente);
    var_dump($tetxo);
    /**
     * * Convertirlo a mayusculas
     */
    echo strtoupper($nombreCliente);

    /**
     * * Convertir a minusculas
     */
      echo strtolower($nombreCliente);

    /**
     * * Revisar si un string existe o no
     */

     echo strpos($nombreCliente,'Pedro');
    
?>