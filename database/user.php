<?php


class user


{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    //insert into user table
    public function insertIntouser($params = null, $table = "user")
    {
        if ($this->db->con != null) {
            if ($params != null) {
                //insert into user (user_id) values(0)
                //get table columns
                $columns = implode(',', array_keys($params));
                print_r($columns);
                $values = implode(',', array_values($params));

                //create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                //execute query
                $result = $this->db->con->query($query_string);
                return $result;


            }
        }
    }

    //get details insert into cart table
    public function addTouser($username, $email,$password_1,$password_2)
    {
        if (isset($username) && isset($email) && isset($password_1) &&isset($password_2)) {
            $params = array(
                "username" => $username,
                "email" => $email,
                "password_1"=>$password_1,
                "password_2"=>$password_2,
            );
            //insert data into cart
            $result = $this->insertIntouser($params);
            if ($result) {
                header("Location:" . $_SERVER['PHP_SELF']);

            }
        }
    }
}
