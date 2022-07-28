<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div ></div>	

 <div class="container">
<div class="card">


    

     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
         </div>

             <div class="col-md-2"><img src="images/logo.jpeg" class="card-img-top"></div>
             <div class="col-md-8"><h3>KIMOSO WOMEN GROUP ASSOCIATION</h3></div>

        </div> <br>
             <div class="col-md-8">
    <a href="admin-panel.php" class="btn btn-primary " >Members</a>
    <a href="admin-panel.php" class="btn btn-primary ">Member details</a>
    <a href="admin-panel.php" class="btn btn-primary ">Package details</a>
    <a href="admin-panel.php" class="btn btn-primary ">Payments</a>

    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="index.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>';
							
						}
				   
				    ?>
					
				
		       </div>
	 </div>
 </nav>

</header>
           
            </div> <br>

            <div class = "container-fluid">
			<div class = "navbar-header">
			</div>
				<h1 align="center">WELCOME TO KIMOSO WOMEN GROUP ASSOCIATION</h1><br>
				<img src="">
				 <div class="body-home">
                <div class="alert alert-info">
                    <h2>OUR MISSION
                    </h2>
                </div>
            </div>	
            <div class="hero-unit-home">

            Our mission is to support women to achieve their full potential; to encourage, enable and facilitate their active involvement in business, employment, learning and community life. We seek to achieve this by harnessing the economic power of women and communities, promoting social inclusion, changing perceptions and influencing policy.

           We’re proud to deliver a broad range of services to women from diverse communities, inspiring them to become more economically active and personally fulfilled. Our areas of support include: personal development, education and business support.
            </div>

            <div class="body-home">
                <div class="alert alert-info">
                    <h2>OUR VISION </h2>
                </div>
            </div>	
            <div class="hero-unit-home">
           our vision is to have a world where all women enjoy equality and social justice, have equal chances in education and jobs, be well-aware of their social, economic and political rights and be the real partner in peace and development.

            </div>

            
    
     </div>
    </div>
    </div>

   
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>