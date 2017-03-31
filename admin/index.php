<?php
session_start();
error_reporting(0);

define ('BASE_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(dirname(__FILE__))) : str_replace('\\', '/', realpath(dirname(dirname(__FILE__)))));

define ('ADMIN_PATH',(DIRECTORY_SEPARATOR=='/') ? realpath(dirname(__FILE__)) : str_replace('\\', '/', realpath(dirname(__FILE__))));

require_once BASE_PATH.'/config/config.php'; 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="<?php echo BASE_URL.'/'; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo BASE_URL.'/'; ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo BASE_URL.'/'; ?>assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php echo BASE_URL.'/'; ?>assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">
      <form class="form-signin" action="act_login.php" method="POST"> 
        <?php
        if ($_SESSION['error']){
            echo '<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button>'.$_SESSION['error'].'</div>';
            unset($_SESSION['error']);            
        }
        ?>     
        <h3 class="form-signin-heading">Login Sistem Informasi</h3>
        <input type="text" class="input-block-level" name="username" placeholder="Username"/>
        <input type="password" class="input-block-level" name="password" placeholder="Password"/>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>

      </form>
    </div> <!-- /container -->
    <script src="../vendors/jquery-1.9.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
    session_destroy();  
?>