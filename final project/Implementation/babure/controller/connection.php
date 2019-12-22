<?php
 class connection 
 {
    public static $host="localhost" ;
    public static $user="root";
    public static $pass="";
    public static $database="babure";
    public $conn;
    public function setter()
    {
        
        
         $this->conn=new mysqli(self::$host , self::$user , self::$pass, self::$database);
    }
    public function connect()
     {
         $this->setter();
        // echo "username pass and host and db are ".connection::$host." ". connection::$user;
     
        if($this->conn->connect_error)
        {
            echo "connection problem".$this->conn->connect_error;
        } 
        else
        {
            //echo "connected succesfully";
            
        }
     }
    
 }

?>