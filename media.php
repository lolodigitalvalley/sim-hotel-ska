<?php
//error_reporting(0);
session_start();
    define ('BASE_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(__FILE__)) : str_replace('\\', '/', realpath(dirname(__FILE__))));
    include BASE_PATH.'/libraries/date_lib.php';
    include BASE_PATH.'/libraries/security_lib.php';
    include BASE_PATH.'/libraries/text_lib.php';
    include BASE_PATH.'/libraries/paging.php';
	include BASE_PATH.'/config/config.php';
    include BASE_PATH.'/config/connection.php';
    
?>

<!doctype html>
<html>
    <head>
		<title>Sistem Informasi Hotel Surakarta</title>
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo BASE_URL.'/'; ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen"/>
        <link href="<?php echo BASE_URL.'/'; ?>assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"/>    
        <link href="<?php echo BASE_URL.'/'; ?>assets/custom.css" rel="stylesheet" media="screen"/>             
    </head>
    <body>
    <div class="page-container container">
        <div class="container header">
    	    <div class="row">
    		    <div class="span12">
    			    <div class="logo">
    				    <a href="home.html">Sistem Informasi Hotel <span>KOTA SURAKARTA</span></a>
    				</div>
    			</div>
            </div>
        </div><!-- End Of Container Header --> 
    
        <div class="container menu">
            <div class="navbar">
                <div class="navbar-inner">
    			    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
    						<span class="icon-bar"></span>
    						<span class="icon-bar"></span>
    						<span class="icon-bar"></span>
    			    </a>
                    <div class="nav-collapse collapse navbar-responsive-collapse">                    
                        <ul class="nav">                           
                            <li class="brand">
                               <a href="home.html"><img alt="home" src="<?php echo BASE_URL.'/'; ?>assets/images/home.png"/></a> 
                            </li>
 					          <li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategori</a>
						          <ul class="dropdown-menu">
							         <li><a href="kategori-1-bintang1.html">Bintang 1</a></li>
							         <li><a href="kategori-2-bintang2.html">Bintang 2</a></li>
							         <li><a href="kategori-3-bintang3.html">Bintang 3</a></li>
							         <li><a href="kategori-4-bintang4.html">Bintang 4</a></li>
							         <li><a href="kategori-5-bintang5.html">Bintang 5</a></li>
                                     <li><a href="kategori-6-melati.html">Melati</a></li>
						          </ul>
					</li>
                            <li><a href="peta.html">Peta</a></li>
                            <li><a href="bantuan.html">BANTUAN</a></li>
                            <li><a href="informasi.html">INFORMASI</a></li>
                            <li><a href="tentang-aplikasi.html">TENTANG APLIKASI</a></li>
                            <li><a href="hubungi-kami.html">HUBUNGI KAMI</a></li> 
							<li><a href="tes.html">TES</a></li>							
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- End Of Container Menu --> 
        
        <div class="container"> 
            <div class="row">
                <div class="span3" id="sidebar">
                    <?php include 'sidebar.php'; ?>      
                </div>
                <div class="span8" id="middle">
                    <?php include 'middle.php'; ?>        
                </div>
            </div>        
        </div><!-- End Of Container -->
    
    </div><!-- End Of Page Container -->     
    <script type="text/javascript" src="<?php echo BASE_URL.'/'; ?>assets/vendors/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL.'/'; ?>assets/bootstrap/js/bootstrap.min.js"></script>

   	<script>
   
    $(window).scroll(function() {
			if($(this).scrollTop() > 200) {
				$('#scroll_top').fadeIn();	
			} else {
				$('#scroll_top').fadeOut();
			}
		});
	 
		$('#scroll_top').click(function(e) {
			$('body,html').animate({scrollTop:0},500);
			e.preventDefault();
			return false;
		});
    </script>

    </body>
</html>