<?php
class Banco {
    
    private $pdo;
    private $numRows;
    private $array;

//-------------------PDO-----------------------
    public function __construct($host, $dbname, $dbuser, $dbpass) {
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
            
        } catch (PDOException $e) {
            echo "Falhou: ".$e->getMessage();
            
        }
        
    }
//--------------------FIM---PDO------------------
  
    
   
 
  
}