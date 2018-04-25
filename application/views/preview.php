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
            <link rel="stylesheet" href="<?php echo base_url('./assets/css/linearicons.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('./assets/css/font-awesome.min.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('./assets/css/magnific-popup.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('./assets/css/nice-select.css'); ?>">                   
            <link rel="stylesheet" href="<?php echo base_url('./assets/css/animate.min.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('./assets/css/owl.carousel.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('./assets/css/main.css'); ?>">
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
                          <li class="menu-active"><a href="#home">Home</a></li>
                          <li><a href="#about">About</a></li>
                          <li><a href="#fact">Rank</a></li>
                          <li><a href="#videos">Videos</a></li>
                        </ul>
                      </nav><!-- #nav-menu-container -->                    
                    </div>
                </div>
              </header>

        <div  class="container">
    	<?php foreach ($isi as $data) { ?>
			<tr>
				<td colspan="2"><h1 class="mb-10"><?php echo $data['judul']; ?></h1></td>
            </tr> 
             <tr>
                <p><td><?php echo $data['penyanyi']; ?> </td></p>
                <p><td><?php echo $data['tahun_rilis']; ?></td></p>
                </tr>
             <td><img src="<?php echo base_url('assets/img/'.$data['gambar']); ?>"></td>
                <td><?php echo $data['deskripsi']; ?></td>
               		<p><a href="<?php echo base_url()."biodata/edit_data/".$data['id']; ?>">Update</a></p>	
			
		<?php } ?>
        <p align="center">
                    <a href="<?php echo base_url()."biodata"; ?>">back</a>
                </p>
</tr>
            </div>
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
          
            <script src="<?php echo base_url('./assets/js/vendor/jquery-2.2.4.min.js'); ?>"></script>
            <script src="<?php echo base_url('./assets/js/vendor/bootstrap.min.js'); ?>"></script>           
            <script type="<?php echo base_url('./assets/text/javascript'); ?>" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
            <script src="<?php echo base_url('./assets/js/easing.min.js'); ?>"></script>         
            <script src="<?php echo base_url('./assets/js/hoverIntent.js'); ?>"></script>
            <script src="<?php echo base_url('./assets/js/superfish.min.js'); ?>"></script>  
            <script src="<?php echo base_url('./assets/js/jquery.ajaxchimp.min.js'); ?>"></script>
            <script src="<?php echo base_url('./assets/js/jquery.magnific-popup.min.js'); ?>"></script>  
            <script src="<?php echo base_url('./assets/js/owl.carousel.min.js'); ?>"></script>           
            <script src="<?php echo base_url('./assets/js/jquery.sticky.js'); ?>"></script>
            <script src="<?php echo base_url('./assets/js/jquery.nice-select.min.js'); ?>"></script>         
            <script src="<?php echo base_url('./assets/js/parallax.min.js'); ?>"></script>   
            <script src="<?php echo base_url('./assets/js/waypoints.min.js'); ?>"></script>
            <script src="<?php echo base_url('./assets/js/jquery.counterup.min.js'); ?>"></script>           
            <script src="<?php echo base_url('./assets/js/mail-script.js'); ?>"></script>    
            <script src="<?php echo base_url('./assets/js/main.js'); ?>"></script>   
        </body>
    </html>
