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

      <?php
    
    /**
     *    !! 15 json_encode() y json_decode
     ** La función json_encode() en PHP se utiliza para convertir una estructura de datos en PHP en una
     ** cadena JSON.
     * */

     $productos=[
      [
        'nombre'=> 'Tablet',
        'precio'=> 200,
        'disponible'=> true
      ],
      [
        'nombre'=> 'Televisión 24"',
        'precio'=> 300,
        'disponible'=> true
      ],
      [
        'nombre'=> 'Monitor Curvo',
        'precio'=> 400,
        'disponible'=> false
      ],
    ];
    $json='{"nombre":"Jose Manuel","edad":16,"ciudad":"Nueva york"}';
    $data=json_decode($json);
    ?>

    <h1>Uso de JSON Example</h1>

    <pre class="resultado">
      <?php

      var_dump($productos);
      $json=json_encode($productos,JSON_UNESCAPED_UNICODE);
      echo '<echo>';

      var_dump($json);
      ?>
    </pre>

    <table class="contenido">
      <thead>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Ciudad</th>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $data->nombre?></td>
          <td><?php echo $data->edad?></td>
          <td><?php echo $data->ciudad?></td>
        </tr>
      </tbody>
    </table>

     

    <?php
     /**
     *    !! PHP intermedio
    **   !! 2.1 Programación orientada a objetos
    **  La programación orientada a objetos (POO) es un paradigma de programación que se basa en el
    **  concepto de "objetos". Los objetos son entidades que representan conceptos del mundo real y que
    **  pueden tener propiedades (atributos) y realizar acciones (métodos).
    **  En la programación orientada a objetos, los objetos son la base fundamental y se crean a partir de
    **  clases. Una clase es una plantilla o un molde que define las propiedades y comportamientos que
    **  tendrán los objetos que se creen a partir de ella

    * ? Principales conceptos de la programación
    **   Clase: Es una plantilla o definición que describe las características y comportamientos de los objetos que se pueden crear a partir de ella.

    **   Objeto: Es una instancia de una clase. Representa un individuo o entidad específica y tiene sus propias propiedades y comportamientos.

    **   Atributos: Son las propiedades o características de un objeto. Definen el estado de un objeto y se representan mediante variables en la clase.

    **   Métodos: Son las acciones o comportamientos que un objeto puede realizar. Representan las operaciones que pueden realizarse con un objeto y se definen como funciones en la clase.
    **   Encapsulación: Es el principio que establece que los atributos y métodos relacionados deben
    **   agruparse en una clase para ocultar los detalles internos y exponer solo una interfaz pública.
    **   Esto se logra mediante la especificación de niveles de acceso (público, privado, protegido)
    **   para los atributos y métodos.

    **   Herencia: Es un mecanismo que permite crear nuevas clases basadas en clases existentes. La
    **   clase que se utiliza como base se denomina "clase padre" o "superclase", y la clase que se
    **   deriva se llama "clase hija" o "subclase". La herencia permite la reutilización de código y la
    **   creación de jerarquías de clases.

    **   Polimorfismo: Es la capacidad de un objeto de tomar diferentes formas o comportarse de
    **   diferentes maneras según el contexto. Permite utilizar una interfaz común para objetos de
    **   diferentes clases y proporciona flexibilidad y extensibilidad en el diseño de programas.

    * !! Modificadores de acceso en PHP

    **  Los modificadores de acceso son palabras clave utilizadas en la programación orientada a objetos
    **  para controlar la visibilidad y el acceso a los miembros (atributos y métodos) de una clase. Estos
    **  modificadores permiten establecer qué partes del código pueden acceder y modificar dichos
    **  miembros.
    **  public: Los miembros declarados como public son accesibles desde cualquier lugar, ya sea
    **  desde dentro de la clase, desde las clases heredadas o desde fuera de la clase. Son visibles para todos.

    **   private: Los miembros declarados como private solo son accesibles desde dentro de la
    **   misma clase en la que se definen. No pueden ser accedidos desde fuera de la clase, ni
    **   siquiera por las clases heredadas.

    **   protected: Los miembros declarados como protected son accesibles desde dentro de la
    **   misma clase y desde las clases heredadas (subclases). Sin embargo, no pueden ser accedidos
    **   desde fuera de la clase directamente.


    * !! Clases
    * */

    class Persona{
      private string $nombre;
      protected int $edad;
      private static $nombreAux;

      public function __construct($nombre,$edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
        self::$nombreAux=$nombre;
      }

      public function getNombre(){
        return $this->nombre;
      }

      public function setNombre($name){
        $this->nombre=$name;
      }

      public function getEdad(){
        return $this->edad;
      }

      public function setEdad($edad){
        $this->edad=$edad;
      }

      public static function saludar(){
        return '<br> Hola como estas ' .self::$nombreAux;
      }

     }

    $alumno= new Persona('Jose Manuel', 18);

    ?>

    <pre class='resultado'>
    
      <?php echo $alumno->getNombre();?>
      <?php echo $alumno->getEdad();?>
    </pre>

    <?php
    /**
     * !! Metodos estaticos
     ** En programación, un método estático es un método que pertenece a la clase en sí y no a una
     ** instancia específica de la clase. A diferencia de los métodos de instancia, los métodos estáticos se
     ** pueden llamar directamente en la clase sin necesidad de crear un objeto o instancia de la misma.
     *
     * ? Caracteristicas importantes
     ** No requieren una instancia: Los métodos estáticos se pueden invocar directamente desde la
     ** clase, utilizando la sintaxis Clase::metodoEstatico(), sin necesidad de crear un objeto de la
     ** clase.
     ** No pueden acceder a propiedades de instancia: Los métodos estáticos no pueden acceder
     ** directamente a las propiedades de instancia de la clase, ya que no tienen una instancia
     ** específica asociada. Solo pueden acceder a propiedades estáticas (variables estáticas) que
     ** pertenezcan a la clase.
     ** No pueden utilizar $this: En un método estático, no se puede utilizar la palabra clave $this
     ** para hacer referencia a la instancia actual de la clase, ya que no hay una instancia asociada.
     ** Útiles para utilidades compartidas: Los métodos estáticos son útiles para definir funciones o
     ** utilidades que no dependen del estado de una instancia específica. Se pueden utilizar para
     ** operaciones globales, cálculos matemáticos, acceso a bases de datos, manipulación de
     ** archivos, etc.
     */

  

     $alumno= new Persona("Juan José",24,"Very");
    ?>
    <pre class='resultado'>
      <?php echo $alumno->getNombre();?>
      <?php echo $alumno->getEdad();?>
      <?php echo Persona::saludar();?>
    </pre>   

    <?php
    /**
     * !! Herencia
     **  La herencia en programación es un concepto que permite crear nuevas clases basadas en clases
     **  existentes, aprovechando y extendiendo su funcionalidad. La clase existente se conoce como clase
     **  base o clase padre, mientras que la nueva clase creada se llama clase derivada o clase hija.
     *
     * ? Conceptos importantes
     **Clase base / Clase padre: Es la clase original de la cual se deriva una nueva clase. Define los
     **atributos y métodos básicos que serán heredados por las clases derivadas.

     **Clase derivada / Clase hija: Es la nueva clase creada que se basa en la clase base. Hereda los
     **atributos y métodos de la clase base y puede agregar nuevos atributos y métodos, así como
     **modificar o ampliar los existentes.

     **Herencia simple y herencia múltiple: La herencia simple se refiere a la relación en la que una
     **clase derivada hereda de una sola clase base. Por otro lado, la herencia múltiple se refiere a
     **la relación en la que una clase derivada hereda de múltiples clases base. No todos los lenguajes
     **de programación admiten la herencia múltiple.

     **Polimorfismo: El polimorfismo es la capacidad de un objeto de una clase derivada para ser
     **tratado como un objeto de su clase base. Esto permite utilizar una referencia de la clase base
     **para manipular objetos de diferentes clases derivadas sin tener que conocer la clase concreta
     **en tiempo de compilación.
     */


     class Transporte{
      public function __construct(protected int $ruedas,protected int $capacidad){

      }

      public function getInfo() : string{
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";      
      }

      public function getRuedas():int{
        return $this->ruedas;
      }
    }


     class Bicicleta extends Transporte{
        public function getInfo() :  string {
          return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y No gasta gasolina";   
        }
     }

     class Automovil extends Transporte{
      public function __construct(protected int $ruedas,protected int $capacidad,protected string $transmision){

      }

      public function getTransmision():string{
        return $this->transmision;
      }
    }

    $bicicleta= new Bicicleta(2,1);
    $auto = new Automovil(4,4,'Manual');
    ?>
    <pre class='resultado'>
      <?php echo $bicicleta->getInfo();?>
      <?php echo $bicicleta->getRuedas();?>
    </pre>   
    <pre class='resultado'>
      <?php echo $auto->getInfo();?>
      <?php echo $auto->getTransmision();?>
    </pre>   


    /**
     * !! Clases Abstractas
     ** En PHP, una clase abstracta es una clase que no se puede instanciar directamente, sino que sirve
     **como una plantilla o base para otras clases. Se utiliza para definir la estructura común y los métodos
     **que deben implementar las clases hijas.
     */

    <?php
    abstract class Animal{
      abstract public function hacerSonido();
    }

    class Perro extends Animal{
      public function __construct(){

      }
      
      public function hacerSonido(){
        echo "¡Guau!";
      }
    }

    class Gato extends Animal{
      public function __construct(){}

      public function hacerSonido(){
        echo "Miua";
      }
    }

    $pluto=new Perro();
    $garfield=new Gato();
    ?>

    <h1> Clases Abstractas</h1>
      <pre class='resultado'>
        <h2>El perro hace</h2>
        <?php echo $pluto->hacerSonido()?>
      </pre>  
      <pre class='resultado'>
        <h2>El gato hace</h2>
        <?php echo $garfield->hacerSonido()?>
      </pre> 
    <?php
    /**
     * !! Interfaces
     **En la programación orientada a objetos, una interfaz es una estructura que define un conjunto de
     **métodos que una clase debe implementar. Es un contrato que especifica qué métodos debe
     **proporcionar una clase sin especificar cómo se implementan esos métodos.  
     */

     interface Figura{
        public function calcularArea();
     }

     class Circulo implements Figura{
        private $radio;

        public function __construct($radio) {
          $this->radio=$radio;
        }

        public function calcularArea()
        {
          return pi()* pow($this->radio,2);
        }
     }

     $circulo=new Circulo(5);
     echo $circulo->calcularArea();

     /**
      * ? En PHP, es posible lograr herencia entre interfaces mediante la utilización de la palabra clave
      * ? extends. Esto permite extender una interfaz existente para agregar nuevos métodos o requerir la
      * ? implementación de métodos adicionales.
      */

      interface Figura3D extends Figura{
        public function calcularVolumen();
      }

      class Cubo implements Figura3D{
        private $lado;

        public function __construct($lado)
        {
          $this->lado=$lado;
        }

        public function calcularArea()
        {
          return 6 * pow($this->lado,2);
        }

        public function calcularVolumen()
        {
          return pow($this->lado,3);
        }
      }

      $cubo= new Cubo(5);
      echo $cubo->calcularArea();
      echo '<br>';
      echo $cubo->calcularVolumen();

      /**
     * !! Polimorfismo
    **El polimorfismo en la programación orientada a objetos es un concepto que permite tratar objetos
    **de diferentes clases de manera uniforme, utilizando una interfaz común. Se basa en la capacidad de
    **los objetos de una jerarquía de clases de responder de manera diferente a la misma llamada de
    **método.
     */

     interface TransporteInterfaz{
      public function getInfo():string;
      public function getRuedas():int;
     }

     class Transport implements TransporteInterfaz{
      public function __construct(protected int $ruedas,protected int $capacidad){
        
      }

      public function getInfo():string{
        return "El transporte tiene ". $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
      }

      public function getRuedas(): int
      {
        return $this-> ruedas;
      }
      
     }

     class Automo extends Transport implements TransporteInterfaz{
      public function __construct(protected int $ruedas,protected int $capacidad,protected string $color)
      {
        
      }

      public function getInfo() : string{
        return "El transporte tiene ". $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y tiene el color " .$this->color;
       }
      
      public function getColor(){
        return "El color es " . $this->color;
      }
     }

     echo "<pre>";

     var_dump($transporte= new Transport(8,20));
     var_dump($auto= new Automo(4,4,"Rojo"));

     echo  $transporte->getInfo();
     echo "<br>";

     echo $auto->getColor();
     echo "<br>";

     echo $auto->getInfo();
     echo "<br>";

    ?>



    </body>
  </html>