<?php

class dbcontroller
{

    //DB CONNECTION
    protected $host="localhost";
    protected $username = "root";
    protected $password = "";
    protected $db_name = "boutick";
    protected $errors = array();

    //connection
    public $con = null;


    //call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
        if ($this->con->connect_error){
            echo "fail" .$this->con->connect_error;
        }
//        echo "success";
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    public function return_conn()
    {

        return $this->con;
    }




    //closing connection
    protected function closeConnection(){
        if ($this->con !=null){
            $this->con->close();
            $this->con = null;
        }
    }
}

?>