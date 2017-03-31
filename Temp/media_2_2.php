<?php
session_start();
    define ('BASE_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(__FILE__)) : str_replace('\\', '/', realpath(dirname(__FILE__))));
    include BASE_PATH.'/libraries/date_lib.php';
    include BASE_PATH.'/libraries/text_lib.php';
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
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <script type="text/javascript">
    var locations = [
                    [-7.562439,110.81733,"Sahid Jaya","Jl. Gajah Mada No. 82, Solo 57132, Jawa Tengah-Indonesia"]
                    ]

function initialize() {
    var latlng = new google.maps.LatLng(-7.581774, 110.830075);
    var myOptions = {
    zoom: 13,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    // Langkah 3
    var map = new google.maps.Map(document.getElementById("map"), 
    myOptions);
    
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[0][0], locations[0][1]),
        map: map
    });    
    
    google.maps.event.addListener(marker, 'click', function(){
        infowindow.setContent("Nama Hotel : "+locations[0][2]+"<br />Alamat : "+locations[0][3]+"\n");
        infowindow.open(map, marker);
    });
    
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
        
    </head>
    <body>
    <div class="page-container container">
        <div class="container header">
    	    <div class="row">
    		    <div class="span12">
    			    <div class="logo">
    				    <a href="index.html">Sistem Informasi Hotel <span>KOTA SURAKARTA</span></a>
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
                               <a href="index.php"><img alt="home" src="<?php echo BASE_URL.'/'; ?>assets/images/home.png"/></a> 
                            </li>
                            <li><a href="bantuan.html">BANTUAN</a></li>
                            <li><a href="informasi.html">INFORMASI</a></li>
                            <li><a href="tentang-aplikasi.html">TENTANG APLIKASI</a></li>
                            <li><a href="hubungi-kami.html">HUBUNGI KAMI</a></li>                          
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