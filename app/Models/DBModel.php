<?php
namespace App\Models;

use PDO;
use PDOException;


/**
 * Class DBModel
 * @package App\Models
 */
class DBModel{

    const HOST      =   "localhost";
    const USER      =   "root";
    const PASS      =   "root";
    const DBNAME    =   "crud1";

    private $table;
    private $conn;


    /**
     * DBModel constructor.
     * @param null $table
     */
    public function __construct( $table = null )
    {
        $this->table    =   $table;
        $this->setConnection();
    }

    /**
     * @author MiSCapu
     * @return PDOException
     */
    private function setConnection(){
        try {
            $this->conn =   new PDO( 'mysql:host='.self::HOST.';dbname='.self::DBNAME,self::USER, self::PASS );
            $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }catch( PDOException $exception ){
            die( "Error: ".$exception->getMessage() );
        }
    }



    public function readAllRows()
    {
        try {
            $query  =   'SELECT * FROM '.$this->table;
            $stmt   =   $this->conn->prepare( $query );
            $stmt->execute();
            $result =   $stmt->fetchAll( PDO::FETCH_ASSOC );
            $this->conn =   null;
            return $result;
        }catch( PDOException $exception )
        {
            die( "Error read rows MySQL: ".$exception->getMessage() );
        }
    }
}