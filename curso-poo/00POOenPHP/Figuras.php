<?php
require 'Poligono.php';
require 'Triangulo.php';
require 'Cuadrado.php';
require 'Rectangulo.php';


echo '
  <h1>Polígonos</h1>
  <p>Figura geométrica plana que está limitada por tres o más rectas y tiene tres ó más ángulos y vertices. </p>
  <h2>Perímetro</h2>
  <p>El perímetro de un plígono es igual a la suma de las longitudes de sus lados.</p>
  <h2>Áreas</h2>
  <p> El área de un polígono es la región o superficie encerrada por un polígono.</p>
  <hr/>
';

echo '
<h3>Triángulo</h3>
<img src="http://bextlan.com/img/para-cursos/triangulo.png"/>

';
$triangulo = new Triangulo(3,6,9,10);
echo '<p>' . $triangulo->lados() . '</p>';
echo '<p> Perímetro del ' . get_class($triangulo) . ' : <mark>  '.$triangulo->perimetro() . '</mark></p>';
echo '<p> Área del ' . get_class($triangulo) . ' : <mark>  '.$triangulo->area() . '</mark></p>';
echo '<hr/>';
echo '<h3>Cuadrado</h3>';
$cuadrado = new Cuadrado(7);
echo '<p>' . $cuadrado->lados() . '</p>';
echo '<p> Perímetro del ' . get_class($cuadrado) . ' : <mark>  '.$cuadrado->perimetro() . '</mark></p>';
echo '<p> Área del ' . get_class($cuadrado) . ' : <mark>  '.$cuadrado->area() . '</mark></p>';
echo '<hr/>';
echo '<h3>Rectángulo</h3>
<img src="https://bextlan.com/img/para-cursos/poo-rectangulo.png"/>
';
$rectangulo= new Rectangulo(5,6);
echo '<p>' . $rectangulo->lados() . '</p>';
echo '<p> Perímetro del ' . get_class($rectangulo) . ' : <mark>  '.$rectangulo->perimetro() . '</mark></p>';
echo '<p> Área del ' . get_class($rectangulo) . ' : <mark>  '.$rectangulo->area() . '</mark></p>';
echo '<hr/>';