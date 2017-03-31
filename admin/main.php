<?php
//error_reporting(0);

define ('BASE_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(dirname(__FILE__))) : str_replace('\\', '/', realpath(dirname(dirname(__FILE__)))));

define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(__FILE__)) : str_replace('\\', '/', realpath(dirname(__FILE__))));

require ADMIN_PATH.'/val_session.php';
require_once BASE_PATH.'/libraries/date_lib.php'; 
require_once BASE_PATH.'/config/config.php'; 
?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="<?php echo BASE_URL.'/'; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL.'/'; ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL.'/'; ?>assets/styles.css" rel="stylesheet" media="screen">
		<link href="<?php echo BASE_URL.'/'; ?>assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <script src="<?php echo BASE_URL.'/'; ?>assets/vendors/jquery-1.9.1.min.js"></script>
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo BASE_URL.'/'; ?>assets/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo isset($_SESSION['ses_Name']) ? $_SESSION['ses_Name'] : 'Unknown User';  ?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo ADMIN_URL; ?>/logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                        	<li <?php echo $_GET['module'] == 'dashboard' ? 'class="active"' : ''; ?> >
                        		<a href="main.php?module=dashboard"> Dashboard</a>
                        	</li>
                         <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Informasi <i class="caret"></i></a>
                                <ul class="dropdown-menu">
                               	    <li>
                        		      <a href="main.php?module=user">User Account</a>
                        	       </li>
                                    <li>
                                       <a href="main.php?module=page">Halaman Statis</a>
                                    </li>
                                    <li>
                                        <a href="main.php?module=hubungi_kami">Hubungi Kami</a>
                                    </li>                
                                </ul>
                            </li>
                        	<li <?php echo $_GET['module'] == 'hotel' ? 'class="active"' : ''; ?> >
                        		<a href="main.php?module=hotel">Data Hotel</a>
                        	</li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Master Data <i class="caret"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="main.php?module=kategori_hotel">Data Kategori Hotel</a>
                                    </li>
                                    <li>
                                        <a href="main.php?module=jenis_hotel">Data Jenis Hotel</a>
                                    </li>
                                    <li>
                                        <a href="main.php?module=jaringan_hotel">Data Jaringan Hotel</a>
                                    </li>                
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Data Wilayah <i class="caret"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="main.php?module=kecamatan">Data Kecamatan</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="main.php?module=kelurahan">Data Kelurahan</a>
                                    </li>                
                                </ul>
                            </li>                           
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">             
                <!--/span-->
                <div class="span10" id="content">
				<?php include 'middle.php'; ?>
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Login as <?php echo isset($_SESSION['ses_Name']) ? $_SESSION['ses_Name'] : 'Unknown User';  ?> 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->        
        <script src="<?php echo BASE_URL.'/'; ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo BASE_URL.'/'; ?>assets/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
		<script src="<?php echo BASE_URL.'/'; ?>assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo BASE_URL.'/'; ?>assets/vendors/ckeditor/ckeditor.js"></script>
        <script src="<?php echo BASE_URL.'/'; ?>assets/scripts.js"></script>
		<script src="<?php echo BASE_URL.'/'; ?>assets/DT_bootstrap.js"></script>
        <script> 
        function ConfirmDelete() {
            var agree=confirm("Are you sure want to delete ? ");
            if (agree)
                return true ;
            else
                return false ;
        };
        </script>
    </body>

</html>