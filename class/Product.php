<?php

include_once 'Dbcon.php';
class Product
{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $db   = "CedHosting";
    public $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    public function fetch_category(){
        $sql=mysqli_query($this->conn,"SELECT * From tbl_product");
        return $sql;
    }
    //function to add sub category in database
    public function add_sub_categories($category_id,$name){
        $sql=mysqli_query($this->conn,"INSERT INTO tbl_product (prod_parent_id,prod_name,link,prod_available,prod_launch_date) VALUES ('$category_id','$name','xyz','1',now())");
        return 1;
        
    }

    public function fetch_all_category(){
        $sql=mysqli_query($this->conn,"SELECT * from tbl_product where prod_parent_id='1'");
        return $sql;
    }


    public function fetch_table_category($id){
        $sql=mysqli_query($this->conn,"SELECT * from tbl_product where id='$id'");
        while($data=mysqli_fetch_assoc($sql)){
            return $data['prod_name'];
        }
    }
}
