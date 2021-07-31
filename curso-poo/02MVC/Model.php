<?php
//Clase Abstracta que nos permitirá conectarnos a Mysql 
abstract class Model{
  //Atributos
  private static $db_host = 'localhost';
  private static $db_user = 'root';
  private static $db_pass = '';
  //private static $db_name = 'mexflix';
  protected $db_name;
  private static $db_charset = 'utf8';
  private $conn;
  protected $query;
  protected $rows = array();
  
  //Métodos
  //métodos abstractos para CRUD de clases que hereden 
  abstract protected function create();
  abstract protected function read();
  abstract protected function update();
  abstract protected function delete();

  //método privado para conectarse a la base de datos

  private function db_open(){
    $this->conn = new mysqli(
      self::$db_host,
      self::$db_user,
      self::$db_pass,
      $this->db_name;

    );
    $this->conn->set_charset(self::$db_charset);
    
  }
  //método privado para desconectarse de la base de datos

  private function db_close(){
    $this->conn->close();

  }
  //establecer un query que afecte datos (INSERT, DELETE o UPDATE)
  protected function set_query(){
    $this->db_open();
    $this->conn->query($this->query);
    $this->db_close();

  }


  //obtener datos de un query(SELECT)
  protected function get_query(){
    $this->db_open();

    $result = $this->conn->query($this->query);

    while( $this->rows[] = $result->fetch_assoc() );
    /* Limpia de la memoria de la aplicación los datos que ya no estamos utilizando */
    $result->close();

    $this->db_close();

    return $this->rows;

  }

}