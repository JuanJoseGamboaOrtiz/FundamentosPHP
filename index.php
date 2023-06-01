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

       /**
        * ? Metodos para los arreglos en PHP
        */

      /**
      ** Intercambia las claves con sus valores correspondientes en un array. 
      */
      $array1=array(
        'clave1' =>'key1',
        'clave2' =>'key2',
        'clave3' =>'key3',
        'clave4' =>'key');

      echo "Array Original";
      echo '<pre>';
      var_dump($array);
      echo '/<pre>';
      echo "Array con claves intercambiadas";
      echo '<pre>';
      var_dump(array_flip($array));
      echo '/<pre>';
      /**
       * * array_fill() Rellena un Array con un valor especificado
       */
      $arrayEmpty=[];
      echo '<pre>';
      var_dump(array_fill(0,2,'Two Times'));
      echo '/<pre>';
      /**
       * * array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
       */
      $numeros=[1,2,3,4,5,6,8,7,9,1,1,2,5,42,3];

      function mayores2($var){
        return $var>2;
      }

      var_dump(array_filter($numeros,'mayores2'));

      /**
       * * array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
       */

       function por2($n){
        return ($n*2);
       }
      
      var_dump(array_map('por2',$numeros));
      /**
       ** array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
       */

       function suma($carry, $item){
        $carry += $item;
        return $carry;
      } 

      var_dump(array_reduce($numeros,'suma'));

      /**
       ** array_key_exists(): Comprueba si una clave existe en un array.
      */

       var_dump(array_key_exists('clave1',$array1));

      /**
      * *in_array(): Comprueba si un valor existe en un array.
      */

      var_dump(in_array('key1',$array1));

      /**
      * *array_rand(): Devuelve una o varias claves aleatorias de un array.
      */

      var_dump($aleatoria=array_rand($array));

       /**
      * *array_unique(): Elimina los valores duplicados de un array.
      */

      var_dump(array_unique($numeros));
      /**
      * *array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
      */

      $array1 = array("a" => "green", "red", "blue");
      $array2 = array("b" => "green", "yellow", "red");
      $result = array_intersect($array1, $array2);
      var_dump($result);

      /**
      * *array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
      */

      $array1    = array("a" => "green", "red", "blue", "red","orange");
      $array2    = array("b" => "green", "yellow", "red");
      $resultado = array_diff($array1, $array2);

      print_r($resultado);

      /**
      * *array_push(): Agrega uno o más elementos al final de un array.
      */

      var_dump(array_push($array1,"black"));

       /**
      * *array_pop(): Extrae y elimina el último elemento de un array.
      */

      var_dump($color=array_pop($array1));

      /**
      * *array_reverse(): Revierte el orden de los elementos en un array.
      */

      var_dump(array_reverse($array1));

      /**
      * *array_sum(): Devuelve la suma de todos los valores de un array numérico.
      */

      var_dump(array_sum($numeros));

      /**
      * *array_product(): Devuelve el producto de todos los valores de un array numérico.
      */

      var_dump(array_product($numeros));

      /**
      * *array_chunk(): Divide un array en fragmentos más pequeños.
      */
      var_dump(array_chunk($numeros,3,true));

      /**
      * *array_keys(): Devuelve todas las claves de un array.
      */
      var_dump(array_keys($array1));

      /**
      * *array_values(): Devuelve todos los valores de un array.
      */

      var_dump(array_values($array1));

      /**
      * *array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.
      */  
      $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
      echo "Before ...:\n";
      array_walk($fruits, 'test_print');





      
?>