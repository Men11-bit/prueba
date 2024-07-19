<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>HOLA MUNDO DATW!!!</h1>
   <?php
   //comentarios de linea
   /**
    * comentario de bloque
    */

   # comentario de linea &&


   $a=3;
   $b=5;// si es la ultima linea no es obligatorio poner el ; aunque es recomendable ponerlo
   $c=$a+$b;
   echo"el resultado de la suma es $a + $b = $c";//se comenta con . o con ,
   $nombre="JUANA";
   $nombre.="DIAZ";
   echo "<br>". $nombre;
   echo "<br>". gettype($a);
   echo "<br>". gettype($nombre);
   const IVA = 21;
   echo "<br>EL IVA ES ".IVA."%";
   echo "<br>". M_PI;
   echo "<br>".__LINE__;
   /*
    * Variables generadas dinamicamente
   * */
   $m_en="Hello";
   $m_es="Hola";
   $m_it="Ciao";
   //variable para definir el idioma que se va a usar
   $idioma="es";
   //variable con el nombre generado dinamicamente
   $bienvenida="m_".$idioma;
   //la salida final, mostrara de la variable
   echo "<br>";
   echo "¡".$$bienvenida."!";

//*******************/
   $radio= 3;
   const pi= M_PI;
   $longitud= 2* M_PI*($radio);
   $superficie=  M_PI*($radio**2);
   $volumen= (4/3)* M_PI*($radio**3);
   echo "<br>";
   echo "<h1> $longitud</h1>";
   echo "<h2> $superficie</h2>";
   echo "<h3> $volumen</h3>";






   ?>



</body>
</html>
