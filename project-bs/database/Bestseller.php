<?php

//use to fetch product data
class bestseller{

    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->con)){
            return null;
        }
        $this->db = $db;
    }

    //fetch product using getData method
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM ($table) WHERE bestseller = 1");

        $resultArray = array();

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}