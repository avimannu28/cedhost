<?php 
    include './header.php';
    include './class/User.php';
    $check=new User();
    if(isset($_GET['data'])){
        $checkemail=$check->checks($_GET['data']);
        
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--lightboxfiles-->
<script type="text/javascript">
	$(function() {
	$('.team a').Chocolat();
	});
</script>	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
						<script type="text/javascript">
							$(function() {
							
								$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

							});
						</script>						
<!--script-->
</head>
<body>
    <div class="content">
        <!-- registration -->
        <form method='post' action='./signup_data.php'>
            <div class="main-1">
                <div class="container">
                    <div class="register">
                        <form>
                            <div class="register-top-grid">
                                <h3>personal information</h3>
                                <div>
                                    <span>Email<label>*</label></span>
                                    <input type="text" name='signupname' maxlength="32"
                                        title="First name contain letter only whithout space and special character"
                                       pattern="^(?!.*\.{2})[a-zA-Z0-9.]+@[a-zA-Z]+(?:\.[a-zA-Z]+)*$" id='fname'
                                        placeholder="Verify Email" value='<?php echo $checkemail[0] ?>' required disabled>
                                        <input type="submit" type='button' class='btn btn-success' name='signup' value="Verify" style='margin-top:10px;'>
                                </div>
                                <div>
                                    <span>Phone Number<label>*</label></span>
                                    <input type="text" name='mobile' 
                                        pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$"
                                        title="if 0 then it will be 11 digit else 10 digit"
                                        placeholder="Verify Password" value='<?php echo $checkemail[1] ?>' required disabled>
                                </div>    
                      
                       
                            <input type="submit" type='button' class='btn btn-success' name='signup' value="Verify">
                            
        </form>
    </div>
    </div>
    </div>
    </div>
    <?php include './footer.php'?>
</body>
</html>