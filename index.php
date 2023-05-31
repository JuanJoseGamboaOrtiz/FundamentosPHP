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

    /**
     !! 10 Arreglos,Arreglos asociativos y funciones para arreglos
     ** Se pueden crear arrays de dos maneras usando la palabra reservada array o con corchetes
     */

     $Arreglo=array('Valor1','Valor2','Valor3');
    
     $carrito=['Tablet','Televisión','Computadora'];

     /**
      ** Snippet para ver los contenidos de un array
    */
     echo "<pre>";
     var_dump($carrito);
     echo "</pre>";

     /**
      * * Acceder a un elemento del array
      */
    echo $carrito[0];

    /**
     * * Añadir un elemento mediante el indice
     */
    $carrito[3]='Nuevo Producto...';

    /**
     * * Añadir un nuevo elemento al final
     */
    array_push($carrito,'Audifonos');

    /**
     * * Añadir al inicio
     */

     array_unshift($carrito,'Smartwatch');

    /**
     * ? Arrays Asociativos
     */

     $arrayAsociativo= array(
      "clave1"=>'valor1',
      "clave2"=>'valor2',
      "clave3"=>'valor3',
     );

    /**
     * * Para imprimir valores de un array asociativo
     */

    echo $arrayAsociativo["clave1"];
    echo $arrayAsociativo["clave2"];
    echo $arrayAsociativo["clave3"];

    /**
     * * Recorrer un array asociativo con un foreach
     */

     foreach($arrayAsociativo as $clave=> $valor){
      echo "Clave: " . $clave . ", Valor " . $valor;
     }

     /**
      * * Ejemplo
      */

      $cliente=[
        'nombre' =>'Juan',
        'saldo' => 200,
        'informacion'=>[
          'tipo'=> 'premium',
          'disponible'=>100
        ]
      ];

      echo "<pre>";
      var_dump($cliente);
      echo '</pre>';

      /**
       * * Buscar elementos en un arreglo
       */

       $carrito=['Tablet','Computadora','Television'];

       var_dump(in_array('Tablet',$carrito));
       var_dump(in_array('Audifonos',$carrito));

      /**
       * * Ordenar elementos de un arreglo
       */

       $numeros= array(1,7,5,4,2,3,6,4);
       sort($numeros); //de menor a mayor
       rsort($numeros); // de mayor a menor
       
       echo "<pre>";
      var_dump($numeros);
      echo '</pre>';

      /**
       * * Ordenar arreglos asociativos
       */

       asort($cliente);
       arsort($cliente);
       ksort($cliente);
       krsort($cliente);

?>