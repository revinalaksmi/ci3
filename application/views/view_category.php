<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Book</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="assets/css/linearicons.css">
			<link rel="stylesheet" href="assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="assets/css/bootstrap.css">
			<link rel="stylesheet" href="assets/css/magnific-popup.css">
			<link rel="stylesheet" href="assets/css/nice-select.css">					
			<link rel="stylesheet" href="assets/css/animate.min.css">
			<link rel="stylesheet" href="assets/css/owl.carousel.css">
			<link rel="stylesheet" href="assets/css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="home2.html"><img src="assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="<?php echo base_url()."biodata"; ?>">Home</a></li>
                          <li><a href="#videos">Videos</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header>


			  <div class="title text-center">
				<h1 class="mb-10">List Song for This Week</h1>
			</div><br><Br><br>
			<div class="container">
			<table class="table table-hover">
	            <thread>
	            	<th >ID</th>
	                <th >Category</th>
	                <th >Description</th>
	                <th >Action</th>
	      		</thread>
       			<tbody>
        			<?php foreach($result as $d){ ?>
          			<tr>
          				<td><?php echo $d['id']; ?></td>
		               <td><?php echo $d['id_ktg']; ?></td>
		               <td><?php echo $d['deskripsi']; ?></td>
                 		<td>
                  			<p><a href="<?php echo base_url()."kategori/do_preview/".$d['id']; ?>">Preview</a></p>
                			<p><a href="<?php echo base_url()."kategori/do_delete/".$d['id']; ?>">Delete</a>
               			</td>
           			</tr>
       			</tbody> <?php } ?>
        	</table>
       		<p align="center"><a align="center" href="<?php echo base_url()."kategori/add_data/"; ?>">Tambah</a> </p>
		</div>

		<!-- Start course Area -->
			<section class="course-area section-gap" id="videos">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">The Best Music Video</h1>
								<p>Watch the best music video with just one click!</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-course-carusel">
							<div class="single-course item">
								<img class="img-fluid" src="assets/img/rv.jpg" alt="">
								<div class="details">
									<a href="https://www.youtube.com/watch?v=WyiIGEHQP8o"><h4>Red Flavor<span class="price float-right">RV</span></h4></a>	
									
								</div>
							</div>
							<div class="single-course item">
								<img class="img-fluid" src="assets/img/kard.png" alt="">
								<div class="details">
									<a href="https://www.youtube.com/watch?v=kTlv5_Bs8aw"><h4>Hola - Hola<span class="price float-right">Kard</span></h4></a>
								</div>
							</div>
							<div class="single-course item">
								<img class="img-fluid" src="assets/img/bts.jpg" alt="">
								<div class="details">
									<a href="https://www.youtube.com/watch?v=USx4WyrkfU4"><h4>Mic Drop<span class="price float-right">BTS ft. Steve Aoki</span>
								</div>
							</div>								
						</div>											
					</div>
				</div>	
			</section>

		<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Me</h6>
								<p>
									Make this blog to submit my WEB tasks.
								</p>
								<p class="footer-text">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Email</h6>
								<p>revinaaniver@gmail.com</p>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Me</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
									<a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="assets/js/vendor/bootstrap.min.js"></script>			
			<script type="assets/text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="assets/js/easing.min.js"></script>			
			<script src="assets/js/hoverIntent.js"></script>
			<script src="assets/js/superfish.min.js"></script>	
			<script src="assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="assets/js/jquery.magnific-popup.min.js"></script>	
			<script src="assets/js/owl.carousel.min.js"></script>			
			<script src="assets/js/jquery.sticky.js"></script>
			<script src="assets/js/jquery.nice-select.min.js"></script>			
			<script src="assets/js/parallax.min.js"></script>	
			<script src="assets/js/waypoints.min.js"></script>
			<script src="assets/js/jquery.counterup.min.js"></script>			
			<script src="assets/js/mail-script.js"></script>	
			<script src="assets/js/main.js"></script>	
		</body>
	</html>