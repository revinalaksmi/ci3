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
                          <li class="menu-active"><a href="<?php echo base_url()."biodata"; ?>">Home</a></li>
                        </ul>
                      </nav><!-- #nav-menu-container -->                    
                    </div>
                </div>
              </header>

            <section class="banner-area" id="home"> 
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-start">
                        <div class="banner-content col-lg-7">
                            
                            <h1 class="text-white pt-40 pb-40">
                                Create a new article
                            </h1>
                        </div>
                        <div class="col-lg-5 banner-right">
                        <?php    
                        $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                         ?>
                
                        <?php echo validation_errors(); ?>
                        <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                            <?php echo form_open(current_url()); ?>

               <form>
                <table>
                    <tr>
                       <td><input type="hidden" name="id" value="<?php echo $id ?>"  ></td>
                    </tr>
                    <tr>
                        <td class="text-white">Name</td>
                       <td><input type="text" name="id_ktg" value="<?php echo $id_ktg ?>"  ></td>
                    </tr>
                    <tr>
                        <td class="text-white">Description</td>
                        <td><input type="text" name="deskripsi" value="<?php echo $deskripsi ?>" ></td>
                    </tr>
                     <tr>
                        <td class="text-white">More Information</td>
                        <td><input type="text"  name="keterangan" value="<?php echo $keterangan ?>" ></td>
                    </tr>

                    <tr>
                        <td>
                        </td>
                        <td><input type="submit" name="btnSubmit" value="Simpan"/></td>
                    </tr>
                   
                </table>
                </form>
                        </div>                                              
                    </div>
                </div>
            </section>
    	
        <div class="container">
        <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-40 col-lg-8">
               
   </div></div></div>
   
          
            <script src="<?php echo base_url('./assets/js/vendor/jquery-2.2.4.min.js'); ?>"></script>
            <script src="<?php echo base_url('./assets/js/vendor/bootstrap.min.js'); ?>"></script>           
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
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
            <script src="<?php echo base_url('./assets/js/custom.js'); ?>"></script>   
        </body>
    </html>


</html>

