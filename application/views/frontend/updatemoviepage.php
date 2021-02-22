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
				<h3>UPDATE MOVIE</h3> <br> </br>
				<form method="post" action= <?php echo base_url('UpdateMovie/updateMovie')?>>

			<div class="row">
                 <label for="username-2">
                    Movie ID:
                    <input type="text" name="movieid" id="username-2" value="<?php echo $id ?>"required="required"  readonly>
                </label>
            </div>

            <div class="row">
                 <label for="username-2">
                    Movie Name:
                    <input type="text" name="moviename" id="username-2" value="<?php echo $name ?>"required="required">
                </label>
            </div>
            <div class="row">
                <label for="email-2">
                    Category:
                    <input type="text" name="category" id="email-2" value="<?php echo $category ?>" required="required">
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Duration:
                    <input type="text" name="duration" id="password-2" value="<?php echo $duration ?>"  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Release-Date:
                    <input type="text" name="release_date" id="password-2" value="<?php echo $release_date ?>"  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Director:
                    <input type="text" name="director" id="password-2" value="<?php echo $director ?>"  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Star 1:
                    <input type="text" name="star_1" id="password-2" value="<?php echo $star_1 ?>"  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Star 2:
                    <input type="text" name="star_2" id="password-2" value="<?php echo $star_2 ?>"  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Poster:
                    <input type="text" name="poster" id="password-2" value="<?php echo $image ?>"  required="required">
                </label>
            </div>
             
           <div class="row">
             <button type="submit">Update Movie</button>
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