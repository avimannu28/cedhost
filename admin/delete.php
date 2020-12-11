<?php 
    include_once '../class/Product.php';
    $delete=new Product();
    if(isset($_GET['data'])){
        if($_GET['data']=='delete_category'){
            $id=$_GET['id'];
            $delete_category=$delete->delete_category($id);
            if($delete_category==1){
                echo "<script>alert('Deleted Successfully');window.location.href='createCategory.php'</script>";
            }
        }
    }
?>