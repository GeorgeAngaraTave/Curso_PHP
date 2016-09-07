<?php
class DBMock
{ 
  private static $instance;
  protected function __construct()
  {
    echo 'Connecting to a DB...
';
  }
  public static function getInstance()
    {
        if ( static::$instance === null) {
            static::$instance = new static();
            echo 'Creando Nueva instancia
';
        }
        
        return static::$instance;
    }

}

class DBEngine extends DBMock
  {
    
  }
  
  $instanceDBEngine = DBMock::getInstance();
  var_dump($instanceDBEngine === DBMock::getInstance());             // bool(true)

  $instanceDBEngine_2 = DBMock::getInstance();
  var_dump($instanceDBEngine_2 === DBMock::getInstance());