<?php

class cart
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db=$db;
    }

    //insert into cart table
    public function insertIntocart($params = null,$table = "cart"){
        if($this->db->con !=null){
            if($params !=null){
                //insert into cart (user_id) values(0)
                //get table columns
                $columns = implode(',',array_keys($params));
                print_r($columns);
                $values = implode(',',array_values($params));

                //create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$values);

                //execute query
                $result = $this->db->con->query($query_string);
                return $result;


            }
        }
    }

    //get user id and item id and insert into cart table
    public function addTocart($userid,$itemid){
        if(isset($userid)&&isset($itemid)){
            $params = array(
                "user_id"=>$userid,
                "item_id"=>$itemid
            );
            //insert data into cart
            $result = $this->insertIntocart($params);
            if ($result){
                header("Location:".$_SERVER['PHP_SELF']);

            }
        }
    }

    //delete acrt item using item id
    public function deletecart($item_id = null,$table = 'cart'){
        if ($item_id !=null){
            $result=$this->db->con->query("DELETE FROM {$table} WHERE boutick.cart.item_id={$item_id}");
            if($result){
                header("Location:".$_SERVER['PHP_SELF']);
            }
        }
    }

//     calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
//            return print_r($sum);
            return sprintf('%.2f' , $sum);
        }
    }

//CALCULATE TOTAL

}