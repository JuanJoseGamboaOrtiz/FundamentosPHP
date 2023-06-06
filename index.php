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

      var_dump(array_rand($array1));

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

      function test_print($elemento2, $clave){
        echo "$clave. $elemento2<br />\n";
        }

      $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

      array_walk($fruits, 'test_print');


     /**
     !! 11 Isset() y Empty()
 
     ** Son funciones utilizadas para saber si una variable ha sido declarada o si tiene un valor definido o no
     */

     $miVariable="Hola";

     if(isset($miVariable)){
      echo "La variable está definida y tiene un valor";
     }else{
      echo "La variable no está definida o no tiene un valor";
     }

     $miVariable="";

     if(empty($miVariable)){
      echo "La variable está vacía o no está definida";
     }else{
      echo "La variable tiene un valor";
     }

     $clientes=[];
     $clientes2=array();
     $cliente3=array("Pedro","Juan","Karen");
     $cliente=[
      'nombre'=>"Juan",
      'saldo'=>200
     ];

     /**
      * * Isset- Revisar si un arreglo está creado o una propiedad está definida
      */

      echo "<br>";
      var_dump(isset($cliente4));
      var_dump(isset($cliente));
      var_dump(isset($cliente2));
      var_dump(isset($cliente3));
  
    /**
    * Isset permite revisar si una propiedad de un arreglo asociativo existe!
    */

    var_dump(isset($cliente['nombre']));
    var_dump(isset($cliente['codigo']));

    
      /**
     !! 12 Estructuras de Control
 
     ** Las estructuras de control en programación son herramientas que se utilizan para controlar el flujo
      **de ejecución de un programa. Estas estructuras permiten que el programa tome decisiones y realice
      **diferentes acciones en función de ciertas condiciones.



     !! 12.1 Estructuras condicionales
      **Las estructuras condicionales son una estructura de control de flujo en programación que permite que
      **el programa tome decisiones basadas en si se cumple o no una condición. En otras palabras, una
      **estructura condicional permite que el programa ejecute diferentes bloques de código en función de
      **si se cumple o no una determinada condición.

     !! 12.1.1 if
     */

     if(10>3){
      echo "10 es mayor que 3";
     }

     if(10<3){
      echo "10 es mayor que 3";
     }else{
      echo "3 es mayor que 10";
     }

     if(10>3){
      //Instrucciones
     }else if(10<20){
      //Instrucciones
     }else{
      //Instrucciones
     }

    /**
     !! 12.1.2 Switch 
     ** En PHP, el "switch" es una estructura de control que permite ejecutar diferentes bloques de código
     ** dependiendo del valor de una variable.
     ** La sintaxis básica del switch en PHP es la siguiente:
     * */ 

     $numero=5;
     switch ($numero){
      case 3:
        echo "El número es 3";
        break;
      case 5:
        echo "El número es 5";
        break;
      default:
        echo "El número no es ni 3 ni 5";
      break;
     }

     /**
      * Ejemplos
      ** Ejemplo de if
      */

      $autenticado=true;
      $admin=false;
      

      if($autenticado && $admin){
        echo "Usuario autenticado correctamente";
      }else{
        echo "Usuario no autenticado, inicia sesión";
      }

      /**
       ** Ejemplo de Else if
       */

       $cliente=[
        'nombre'=> "Juan",
        'saldo'=>0,
        'informacion'=>[
          'tipo'=>'Regular'
        ]
       ];

       if($cliente['saldo']>0){
        echo "El cliente tiene saldo";
       }else if($cliente['informaicion']['tipo']==='premium'){
        echo "El cliente es premium";
       }else{
        echo "No hay cliente definido o no tiene saldo o no es premium";
       }

       /**
       ** Ejemplo de switch
       */

       echo "<br>";

       $tecnologia='HTML';

       switch($tecnologia){
        case 'HTML':
          echo "PHP,un excelente lenguaje";
          break;
        case 'JavaScript':
          echo "Genial, el lenguaje de la web";
          break;
        default:
          echo "ALgún otro lenguaje";
          break;
       }


       /**
       !! 13 Estructuras Repetitivas 
      ** Las estructuras repetitivas, también conocidas como estructuras de control de bucle, son
      ** herramientas fundamentales en la programación que permiten repetir la ejecución de un bloque de
      ** código varias veces. Estas estructuras son utilizadas cuando se desea realizar una tarea repetitiva sin
      ** tener que escribir el mismo código una y otra vez.
     * */ 


     /**
      * While
      ** Es una estructura que repite el codigo mientras se cumpla una condición
      ** Ejemplo
      */

      $i=0;

      while($i<10){
        echo $i ."<br/>";

        $i++;
      }

     /**
      * Do While
      ** FUnciona igual que el while con la unica diferencia que ejecuta el codigo almenos una vez
      */

      $i=100;

      do{
        echo $i ."<br>";
        $i++;
      }while($i<10);

      /**
       * For es una estructura de control que repite el codigo una cantidad determinada de veces
       */

       $clientes = array('Pedro','Juan','Karen');

       foreach($clientes as $cliente):
          echo $cliente .'<br>';
       endforeach;

       $cliente=[
        'nombre' => 'Juan',
        'saldo' => 200,
        'tipo'=> 'Premium'
       ];

      foreach($cliente as $key => $valor):
        echo $key . " - " . $valor . '<br/>';
     endforeach;

      /**
      !! 14 Funciones
        **En programación, las funciones definidas por el usuario son bloques de código que se pueden llamar
        **y ejecutar en cualquier parte de un programa para realizar una tarea específica. Estas funciones
        **permiten que el código sea modular y reutilizable, lo que facilita la programación y el
        **mantenimiento del código.
     * */ 

     /**
      * ? Funciones que no retornan valor 
      */

      function sumar(int $numero1 = 0, int $numero2) : void {
        echo $numero1+ $numero2;
       }
 
       sumar(10,3);
 
     /**
       * ? Funciones que  retornan valor 
       */
      
       function usuarioAutenticado(bool $autenticado) : ?string{
         if($autenticado){
           return "El usuario esta autenticado ";
         }else{
           return null;
         }
       }
       echo "<br>";
       $usuario = usuarioAutenticado(true);
       echo $usuario;


      /**
      !! 14 include, require, include_once, require_once
      **En PHP, include, require, include_once y require_once son funciones que se utilizan para incluir
      **archivos externos en un programa.
      **include y include_once permiten incluir un archivo PHP en el programa. La diferencia entre ellas es
      **que include puede incluir el mismo archivo varias veces mientras que include_once asegura que el
      **archivo solo se incluya una vez en el programa.
      **require y require_once son similares a include y include_once, pero en caso de que el archivo no
      **pueda ser encontrado, se detendrá la ejecución del programa. Al utilizar require_once, se asegura que
      **el archivo solo se incluya una vez en el programa.
     * */
      
?>

<!DOCTYPE html>
     <html lang="en">
     <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/styles.css">
      <title>Document</title>
     </head>
     <body>
      
       <header>
        <?php include ('includes/header.php')?>
      </header>


     </body>
     </html>