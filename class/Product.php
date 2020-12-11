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
    public function add_sub_categories($category_id,$name,$link){
        $sql=mysqli_query($this->conn,"INSERT INTO tbl_product (prod_parent_id,prod_name,link,prod_available,prod_launch_date) VALUES ('$category_id','$name','$link','1',now())");
        if(($sql)==true){
            return 1;
        }else{
            return 0;
        }
        
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

    public function edit_sub_categories($category_id,$subcategory,$link,$available,$id){
        $sql=mysqli_query($this->conn,"UPDATE tbl_product set prod_parent_id='$category_id',prod_name='$subcategory',link='$link',prod_available='$available' where id='$id'");
        if(($sql)==true){
            return 1;
        }else{
            return 0;
        }
    }

    public function delete_category($id){
        $sql=mysqli_query($this->conn,"DELETE from tbl_product where id='$id'");
        return 1;
    }


}
