<?php
    ob_start();
    session_start();
    
    include 'dbconnect.php';
    
    
	    //the form has been posted, so save it
		$sql = "INSERT INTO Page(PageName, PageDescription, PageCollege)
		   VALUES('" . mysql_real_escape_string($_POST['CSName']) . "',
		            '" . mysql_real_escape_string($_POST['CSDescription']) . "',
				        '" . mysql_real_escape_string($_POST['CollegeName']) . "')"; 
		$result = mysql_query($sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo 'Error' . mysql_error();
		}
		else
		{
			echo '<p class="success">New Page succesfully added.</p>';
		}
	


?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> College C&S</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">College C&S</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="colleges.php">Colleges</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    			          <span class="glyphicon glyphicon-user"></span> <?php echo $userRow['userName']; ?><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>
</br>
</br>
</br>
</br>

 <div class="container">
      <h2> Create a page </h2>
      </br>
		        <div id="login-form">
    		        <form method="post" action="">
    		        	<div class="col-md-12">
    		        		<div class="form-group">
    		        			<label for="CSName"><h5>Club/soc name</h5></label>
    	                    	<input type="text" class="form-control" name="CSName" id="PageName" placeholder="eg Chess "/><br />
    	                    </div>
    	                    
    	    			    <div class="form-group">
    		        			<label for="CSDescription"><h5>Description</h5></label>
    	                    	<input type="text" class="form-control" name="CSDescription" id="PageDescription" placeholder="This is the chess club"/><br />
    	                    </div>
    	                    
    	                     <div class="form-group">
    		        			<label for="CollegeName"><h5>College</h5></label>
    	                    	<input type="text" class="form-control" name="CollegeName" id="PageCollege" placeholder="NCI, Dit .."/><br />
    	                    </div>
    	                    
    	                    <div class="form-group">
    	    			        <input type="submit" class="btn btn-block btn-primary" value="submit"/>
        			        </div>
        			    </div>
    		        </form>
            </div> 
    </div> 
   
    

   
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
