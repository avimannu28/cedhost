<?php 
    include './class/Product.php';
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
<?php include './header.php'; ?>   

                            <div class="tab-prices">
			<div class="container">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
						<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">US Hosting</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="linux-prices">
							<div class="content"> 
<div class="linux-prices">
<div class='container'>

								<?php     
								$product = new Product();
								if(isset($_GET['id'])){
									$SubCategoryId=$_GET['id'];
									$data=$product->fetch_new_products($SubCategoryId);
								if ($data) {
									foreach ($data as $element) {
										$productId = $element['id'];
										$category = $element['prod_parent_id'];
										$productName = $element['prod_name'];
										$link = $element['html'];
										$monthlyPrice = $element['mon_price'];
										$annualPrice = $element['annual_price'];
										$sku = $element['sku'];
										$description = json_decode($element['description']);
										$webspace = $description->Web_Space;
										$bandwidth = $description->Band_Width;
										$freeDomain = $description->Free_Domain;
										$language = $description->Language_Technology;
										$mailbox = $description->Mail_Box;
										$availablity = $element['prod_available'];
								
								?>
								<div class="col-md-3 linux-price">
									<div class="linux-top">
										<h4><?php echo $productName ?></h4>
									</div>
									<div class="linux-bottom">
										<h5>&#x20B9;<?php echo $monthlyPrice ?> <span class="month">per month</span></h5>
										<h5>&#x20B9;<?php echo $annualPrice ?> <span class="month">per Annum</span></h5>
										<h6><?php echo $freeDomain ?> Domain</h6>
										<ul>
											<li><strong><?php echo $webspace ?></strong> GB Disk Space</li>
											<li><strong><?php echo $bandwidth ?></strong> GB Data Transfer</li>
											<li><strong><?php echo $mailbox ?></strong> Email Accounts</li>
											<li>Language Support <strong><?php echo $language?></strong></li>
											<li><strong>High Performance</strong> Servers</li>
											<li><strong>location</strong> : <img src="images/india.png"></li>
										</ul>
									</div>
									<a href="#">buy now</a>
								</div>

									<?php }}}?>
                                    </div>
                                    
								<div class="clearfix"></div>

							</div>
								<div class="clearfix"></div>
							</div>
						</div>
						</div>


						<!-- US Product -->
						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
							<div class="linux-prices">
								<div class="col-md-3 linux-price">
									<div class="linux-top us-top">
										<h4>Standard</h4>
									</div>
									<div class="linux-bottom us-bottom">
										<h5>$259 <span class="month">per month</span></h5>
										<h6>Single Domain</h6>
										<ul>
											<li><strong>Unlimited</strong> Disk Space</li>
											<li><strong>Unlimited</strong> Data Transfer</li>
											<li><strong>Unlimited</strong> Email Accounts</li>
											<li><strong>Includes </strong> Global CDN</li>
											<li><strong>High Performance</strong> Servers</li>
											<li><strong>location</strong> : <img src="images/us.png"></li>
										</ul>
									</div>
									<a href="#" class="us-button">buy now</a>
								</div>
								<div class="col-md-3 linux-price">
									<div class="linux-top us-top">
										<h4>Advanced</h4>
									</div>
									<div class="linux-bottom us-bottom">
										<h5>$359 <span class="month">per month</span></h5>
										<h6>2 Domains</h6>
										<ul>
											<li><strong>Unlimited</strong> Disk Space</li>
											<li><strong>Unlimited</strong> Data Transfer</li>
											<li><strong>Unlimited</strong> Email Accounts</li>
											<li><strong>Includes </strong> Global CDN</li>
											<li><strong>High Performance</strong> Servers</li>
											<li><strong>location</strong> : <img src="images/us.png"></li>
										</ul>
									</div>
									<a href="#" class="us-button">buy now</a>
								</div>
								<div class="col-md-3 linux-price">
									<div class="linux-top us-top">
										<h4>Business</h4>
									</div>
									<div class="linux-bottom us-bottom">
										<h5>$539 <span class="month">per month</span></h5>
										<h6>3 Domains</h6>
										<ul>
											<li><strong>Unlimited</strong> Disk Space</li>
											<li><strong>Unlimited</strong> Data Transfer</li>
											<li><strong>Unlimited</strong> Email Accounts</li>
											<li><strong>Includes </strong> Global CDN</li>
											<li><strong>High Performance</strong> Servers</li>
											<li><strong>location</strong> : <img src="images/us.png"></li>
										</ul>
									</div>
									<a href="#" class="us-button">buy now</a>
								</div>
								<div class="col-md-3 linux-price">
									<div class="linux-top us-top">
										<h4>Pro</h4>
									</div>
									<div class="linux-bottom us-bottom">
										<h5>$639 <span class="month">per month</span></h5>
										<h6>Unlimited Domains</h6>
										<ul>
											<li><strong>Unlimited</strong> Disk Space</li>
											<li><strong>Unlimited</strong> Data Transfer</li>
											<li><strong>Unlimited</strong> Email Accounts</li>
											<li><strong>Includes </strong> Global CDN</li>
											<li><strong>High Performance</strong> Servers</li>
											<li><strong>location</strong> : <img src="images/us.png"></li>
										</ul>
									</div>
									<a href="#" class="us-button">buy now</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>

						<!-- US Product End -->
					</div>
				</div>
			</div>
		</div>

</div>

<?php include './footer.php'?>
</body>
</html>