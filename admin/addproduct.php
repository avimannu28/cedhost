<?php 
session_start(); 
if(!isset( $_SESSION['admin'])){
  header('location:../login.php');
}
  include './header.php';
  include_once '../class/Product.php';
  $category=new Product();
  $categories=$category->fetch_category();
  if(isset($_POST['submit'])){
    $product_parent_id=$_POST['parent_category'];
    $product_name=$_POST['product_name'];
    $product_url=$_POST['product_url'];
    $monthly_price=$_POST['monthly_price'];
    $annual_price=$_POST['annual_price'];
    $sku=$_POST['sku'];
    $web_space=$_POST['web_space'];
    $band_width=$_POST['band_width'];
    $free_domain=$_POST['free_domain'];
    $lang_tech=$_POST['lang_tech'];
    $mail_box=$_POST['mail_box'];
    $feature=array("Web_Space"=>$web_space,"Band_Width"=>$band_width,"Free_Domain"=>$free_domain,"Language_Technology"=>$lang_tech,"Mail_Box"=>$mail_box);
    $feature=json_encode($feature);
    $addproduct=$category->add_new_product($product_parent_id,$product_name,$product_url,$monthly_price,$annual_price,$sku,$feature);
    //$value=$category->add_sub_categories($category_id,$subcategory);
    
    
  }

?>
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Add Product</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item">Product<a href="#"></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class=" col ">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">Add New Product</h3>
                </div>
                <form class='mx-auto col-md-12 text-dark' method='POST'>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Product Category</label>
                        <select class="form-control text-dark" name='parent_category' id="exampleFormControlSelect1"
                            required>
                            <?php 
        foreach($categories as $key=>$value)
          {
          if($value['prod_parent_id']==1)
            echo "<option value=".$value['id'].">$value[prod_name]</option>";
          }       
      ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Product Name</label>
                        <input type='text' class="form-control text-dark" name='product_name' required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Page Url</label>
                        <input type='text' class="form-control text-dark" name='product_url' required>
                    </div>


                    <hr class='text-light bg-dark'>



                    <h2 class='pb-0 mb-0'>Product Description</h2>
                    <h4 class='pb-0 mb-0'>Enter Product Description Below</h4>
                    <hr class='pt-0 mt-3'>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Enter Monthley Price</label>
                        <input type='text' class="form-control text-dark" placeholder="ex:23" name='monthly_price'
                            required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            This Would be monthly plane
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Enter Annual Price</label>
                        <input type='text' class="form-control text-dark" placeholder="ex:23" name='annual_price'
                            required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            This Would be annual plane
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">SKU</label>
                        <input type='text' class="form-control text-dark" name='sku' required>
                    </div>



                    <hr>



                    <h2 class='pb-0 mb-0'>Features</h2>
                    <hr class='pt-0 mt-3'>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Web Space (in GB)*</label>
                        <input type='text' class="form-control text-dark" name='web_space' required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Enter 0.5 to 512 mb
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Band Width (in GB)*</label>
                        <input type='text' class="form-control text-dark" name='band_width' required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Enter 0.5 to 512 mb
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Free Domain</label>
                        <input type='text' class="form-control text-dark" name='free_domain' required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Enter 0 if no domain available in this service
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Language / Technology Support</label>
                        <input type='text' class="form-control text-dark" name='lang_tech' required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Separate by (,) Ex: PHP, MySQL, MongoDB
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mailbox</label>
                        <input type='text' class="form-control text-dark" name='mail_box' required>
                    </div>

                    <input type='submit' value='submit' name='submit' class='btn btn-success mb-4'>
                </form>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0">Dark table</h3>
                </div>
                <div class="table-responsive text-dark">
                    <table class="table align-items-center table-dark table-flush text-center" id="subcat">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Subcategory Id</th>
                                <th>Name</th>
                                <th>Available/UnAvailable</th>
                                <th>Launch Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 

                                    $fetch_all_category=$category->fetch_all_category();
                                    foreach ($fetch_all_category as $key=>$value) {
                                        $fetch_category=$category->fetch_table_category($value['prod_parent_id']);
                                        if ($value['prod_available']==1) {
                                            echo "<tr class='text-dark'><td>$fetch_category</td><td>$value[id]</td><td>$value[prod_name]</td><td>Available</td><td>$value[prod_launch_date]</td><td><a type='button' class='btn btn-warning' href='#'>edit</a><a type='button' class='btn btn-danger' href='#'>Delete</a></td></tr>";
                                        } else {
                                            echo "<tr><td>$fetch_category</td><td>$value[id]</td><td>$value[prod_name]</td><td>Available</td><td>$value[prod_launch_date]</td><td><a type='button' class='btn btn-warning' href='#'>edit</a><a type='button' class='btn btn-danger' href='#'>Delete</a></td></tr>";
                                        }
                                    }

                                ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include './footer.php'; ?>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="./assets/vendor/clipboard/dist/clipboard.min.js"></script>
    <!-- Argon JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel='stylesheet' href="./assets/css/datatable.css">
    <script src="./assets/js/argon.js?v=1.2.0"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">
    </script>
    <script type="text/javascript" charset="utf8"
        src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
    $(function() {
        $('#subcat').DataTable({
            "sPaginationType": "full_numbers"
        });
    })
    </script>

    </body>

    </html>