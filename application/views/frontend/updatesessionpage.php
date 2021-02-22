<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
	<!-- Basic need -->
	<?php $customer=$this->session->userdata('user'); ?>
	<title>Admin Panel</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600'>
	<!-- Mobile specific meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="<?php echo base_url('assets/front/css/plugins.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/front/css/style.css'); ?>">
</head>
<body>

<!--end of preloading-->
<!--login form popup-->

<header class="ht-header">

	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
					<ul class="nav navbar-nav flex-child-menu menu-right">
				    <a href=""><img class="logo" src= " <?php echo base_url('assets\front'); ?> \images\logo1.png" alt=""></a>
					<li class="btn"><a href="<?php echo base_url('useractivities/logout');?>">log out</a></li>
					</ul>
			    </div>
				
	    </nav>
	    
	  
	</div>
</header>
<!-- END | Header -->

<div class="hero mv-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>



<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div style= "color : aquamarine;" class="col-md-12 col-sm-12 col-xs-12">
				<h3>UPDATE SESSION</h3> <br> </br>
                <form method="post" action= <?php echo base_url('UpdateMovie/updateSessions')?>>

			<div class="row">
                 <label for="username-2">
                    Session ID:
                    <input type="text" name="sessionid" id="username-2" value="<?php echo $id ?>"required="required"  readonly>
                </label>
            </div>

            <div class="row">
                 <label for="username-2">
                    Session Time:
                    <input type="text" name="sessiontime" id="username-2" value="<?php echo $session_time ?>"required="required">
                </label>
            </div>
            <div class="row">
                <label for="email-2">
                    Movie ID:
                    <input type="text" name="movieid" id="email-2" value="<?php echo $movie_id ?>" required="required">
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Theater ID:
                    <input type="text" name="theaterid" id="password-2" value="<?php echo $theater_id ?>"  required="required">
                </label>
			</div>
			<div class="row">
                <label for="password-2">
                    Session-Date:
                    <input type="text" name="sessiondate" id="password-2" value="<?php echo $session_date ?>"  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Room ID:
                    <input type="text" name="roomid" id="password-2" value="<?php echo $room_id ?>"  required="required">
                </label>
            </div>
             
           <div class="row">
             <button type="submit">Update Session</button>
           </div>
        </form>
			</div>	
		</div>
		

		
	</div>

	<div class="container">
						
		</div>

		
	
	

</div>

<!-- end of footer section-->

<script src="<?php echo base_url('assets\front\js\jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets\front\js\plugins.js'); ?>"></script>
<script src="<?php echo base_url('assets\front\js\plugins2.js'); ?>"></script>
<script src="<?php echo base_url('assets\front\js\custom.js'); ?>"></script>
<script src="<?php echo base_url('assets\front\grit\jquery.gritter.js'); ?>"></script>
</body>
</html>