<?php
include_once 'Dbcon.php';
    class User{
 public $host = "localhost";
 public $user = "root";
 public $pass = "";
 public $db   = "CedHosting";
 public $conn;
 public function __construct()
 {
  $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
 }

       public function check($email,$mobile){
        $sql=mysqli_query($this->conn,"SELECT * from tbl_user where `email`='$email' or `mobile`='$mobile'");
        $data=mysqli_num_rows($sql);
       return $data;
       }
    //Signup user
       public function signup($signupemail,$signupname,$mobile, $signpass1, $question,$answer){
            $password=md5($signpass1);
            $sql=mysqli_query($this->conn,"INSERT INTO `tbl_user`( `email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `sign_up_date`, `password`, `security_question`, `security_answer`) VALUES ('$signupemail','$signupname','$mobile','0','0','1','0',now(),'$password','$question','$answer')");
            if($sql){
                return true;
            }else{
                return false;
            }
       }

       public function login($name,$password){
        $password=md5($password);
        $sql=mysqli_query($this->conn,"SELECT * from tbl_user");
       }
    }
 ?>