<?php
 ob_start();
	session_start();
	include('include/connection.php');



	if(isset($_POST['sumbit']))
	{
		//echo "uygy";die;
		$username=$_POST['username'];
		//echo $username;die;
		$password=md5($_POST['password']);
		//echo $password;die;
		$query="select * from admin_login where username='$username'and password='$password'";
		//echo $query;die;

		$row1=mysql_query($query);
		//print_r($run); die();
		
		$record=mysql_num_rows($row1);
		//echo $record;die;
		if($record>0)
		{
			$row=mysql_fetch_array($run);
			
			$_SESSION['valid']=true;
			$_SESSION['timeout']=time();
			$_SESSION['username']=$row['username'];
			$_SESSION['password']=$row['password'];
			header("location:dashboard.php");
			
		}
		else
		{
				header("location:login.php");
			}
	}
		
	?>
	
	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Paramount Consultent">
    <meta name="author" content="Paramount Consultent">
    <meta name="keyword" content="Paramount Consultent">
    

    <title>Paramount Consultent</title></title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">
	
	
	

      <form class="login-form"  method="post">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <input class="btn btn-primary btn-lg btn-block" type="submit" name="sumbit" value="Login">
            
        </div>
      </form>
    <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="#">Paramount Consultent</a> by <a href="http://seoxprts.com">SeoXprts</a>
            </div>
        </div>
    </div>


  </body>
</html>
