<?php 
class Perro{
  /*
  public: Acceso desde cualquier método de la clase u objeto que lo invoque
  private: Acceso sólo desde los métodos de la clase, los objetos no los pueden invocar
  protected: Acceso sólo desde los métodos de la clase y subclases que la hereden, los objetos no los pueden invocar
  */
  //ATRIBUTOS
  public $nombre;
  public $raza;
  public $edad;
  public $sexo;
  public $adiestrado;
  public $foto;
  public $comida;
  private $pulgas;

  
  //MÉTODOS MÁGICOS
  //CONSTRUCTOR: método que se ejecuta automáticamente al inicio de instanciar la clase

  public function __construct($n,$r,$e,$s,$a,$f,$p){
    $this->nombre = $n;
    $this->raza = $r;
    $this->edad = $e . ' años';
    $this->sexo = ($s) ? 'Macho' : 'Hembra';
    $this->adiestrado = ($a) ? 'Adiestrado' : 'No adiestrado';
    $this->foto = $f;
    $this->pulgas =$p;
    echo '<mark>Hola, soy el constructor de la clase</mark>';
    
  }
  
  //DESTRUCTOR: método que se ejecuta automáticamente al final de instanciar la clase. 
  public function __destruct(){
    echo '<mark>Adios, soy el destructor de la clase</mark>';
    
  }

  //MÉTODOS
  public function ladrar(){
    echo '<p><mark>GUAUUUU GUAUUU</mark></p>';


  }
  public function comer($c){
    $this->comida = $c;
    echo '<p>'. $this->nombre . ' come '.$this->comida . '</p>';
  }
  public function aparecer(){
    echo '<img src="' . $this->foto . '"/>';
  }
  public function tiene_pulgas(){
    echo ($this->pulgas) ? '<p>Tiene pulgas</p>' : '<p>No tiene pulgas</p>';
  }
  public function ladrar_y_comer(){
    self::ladrar();
    Perro :: comer('huesos');
    echo self::$nombre;

  }

}
//Instanciar un objeto de la clase
$kenai = new Perro('kEnAi','Firefox',3,true,true,'http://jonmircha.github.io/slides-poo-js/img/kenai.jpg',false);

//echo $kenai;
//var_dump($kenai); /* Como la consola en javascript*/
echo '<h1>' . $kenai->nombre . '</h1>';
echo '<h2>' . $kenai->raza . '</h2>';
echo '<h3>' . $kenai->edad . '</h3>';
echo '<h4>' . $kenai->sexo . '</h4>';
echo '<h5>' . $kenai->adiestrado . '</h5>';
//echo '<h6>' . $kenai->pulgas . '</h6>';

$kenai->ladrar();
$kenai->comer('croquetas');
$kenai->comer('tacos');
$kenai->aparecer();
$kenai->tiene_pulgas();
$kenai->ladrar_y_comer();