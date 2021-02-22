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
	
	<link rel="stylesheet" href="<?php echo base_url('assets/front/css/button.css'); ?>">
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



<!--ADD MOVIE-->
<div class="login-wrapper" id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>add movie</h3>
        <form method="post" action= <?php echo base_url('AdminActivities/addmovie')?>>
            <div class="row">
                 <label for="username-2">
                    Movie Name:
                    <input type="text" name="moviename" id="username-2" placeholder=""required="required">
                </label>
            </div>
            <div class="row">
                <label for="email-2">
                    Category:
                    <input type="text" name="category" id="email-2" placeholder="" required="required">
                </label>
            </div>
            <div class="row">
                <label for="password-2">
                    Duration:
                    <input type="text" name="duration" id="password-2" placeholder=""  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Release-Date:
                    <input type="date" name="release_date" id="password-2" placeholder=""  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Director:
                    <input type="text" name="director" id="password-2" placeholder=""  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Star 1:
                    <input type="text" name="star_1" id="password-2" placeholder=""  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Star 2:
                    <input type="text" name="star_2" id="password-2" placeholder=""  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Poster:
                    <input type="text" name="poster" id="password-2" placeholder=""  required="required">
                </label>
            </div>
             
           <div class="row">
             <button type="submit">Add Movie</button>
           </div>
        </form>
    </div>
</div>
<!--end of ADD MOVIE-->


<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>add session</h3>
        <form method="post" action= <?php echo base_url('AdminActivities/addSession')?>>
            <div class="row">
                 <label for="username-2">
                    Session Time:
                    <input type="text" name="sessiontime" id="username-2" placeholder=""required="required">
                </label>
            </div>
            <div class="row">
                <label for="email-2">
                    Movie ID:
                    <input type="text" name="movieid" id="email-2" placeholder="" required="required">
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Theater ID:
                    <input type="text" name="theaterid" id="password-2" placeholder=""  required="required">
                </label>
			</div>
			<div class="row">
                <label for="password-2">
                    Room ID:
                    <input type="text" name="roomid" id="password-2" placeholder=""  required="required">
                </label>
            </div>
			<div class="row">
                <label for="password-2">
                    Session-Date:
                    <input type="text" name="sessiondate" id="password-2" placeholder="DD.MM.YYYY"  required="required">
                </label>
            </div>
			
           <div class="row">
             <button type="submit">Add Session</button>
           </div>
        </form>
    </div>
</div>
<!--end of ADD MOVIE-->



<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div style= "color : aquamarine;" class="col-md-12 col-sm-12 col-xs-12">
				<h3>MOVIE</h3> 
			</div>	
		</div>
		<div class="row ipad-width2">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<form method="post" action= <?php echo base_url('AdminActivities/deleteMovie')?>>
					<div class="form-group input-group">
								<select class="form-control" name="movie">
								<?php $query = $this->db->query("SELECT * FROM movie;");
								foreach ($query->result_array() as $movie)
								{?>
									<option selected=""  > <?php echo $movie['name']; ?> </option>
								<?php } ?>    
								</select>
							<div class="row ipad-width2">
								<div class="col-md-8 col-sm-12 col-xs-12">
									<button class="btn-hover color-1" type="submit">Delete Movie</button>
								</div>
							</div>
					</div> 
				</form>
			</div>	
			
			<div class="col-md-3 col-sm-12 col-xs-12">
			
			<form method="post" action= <?php echo base_url('AdminActivities/updateMovie')?>>
					<div class="form-group input-group">
								<select class="form-control" name="movie">
								<?php $query = $this->db->query("SELECT * FROM movie;");
								foreach ($query->result_array() as $movie)
								{?>
									<option selected="" value = "<?php echo $movie['id'] ?>"  > <?php echo $movie['name'] ?> </option>
								<?php } ?>    
								</select>
							<div class="row ipad-width2">
								<div class="col-md-8 col-sm-12 col-xs-12">
								<button class="btn-hover color-8" type="submit">Update Movie</button>
								</div>
							</div>
					</div> 
				</form>
			</div>	

			<br></br>

			<div class="col-md-2 col-sm-12 col-xs-12">
				<button class="btn-hover color-3 signupLink" >Add Movie</button>
			</div>	

		</div>

	</div>

	<div class="container">
		<div class="row ipad-width2">
		<div style= "color : aquamarine;" class="col-md-12 col-sm-12 col-xs-12">
		<br> </br><h3>SESSIONS</h3>
			</div>	
		</div>
		<div class="row ipad-width2">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<form method="post" action= <?php echo base_url('AdminActivities/deleteSession')?>>
					<div class="form-group input-group">
								<select class="form-control" name="session">
								<?php $query = $this->db->query("SELECT * FROM sessions;");
								foreach ($query->result_array() as $session)
								{?>
									<option selected=""  > <?php echo $session['id']; ?> </option>
								<?php } ?>    
								</select>
							<div class="row ipad-width2">
								<div class="col-md-8 col-sm-12 col-xs-12">
									<button class="btn-hover color-4 "type="submit" >Delete Session</button>
								</div>
							</div>
					</div> 
				</form>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<form method="post" action= <?php echo base_url('AdminActivities/updateSession')?>>
					<div class="form-group input-group">
								<select class="form-control" name="session">
								<?php $query = $this->db->query("SELECT * FROM sessions;");
								foreach ($query->result_array() as $session)
								{?>
									<option selected=""  > <?php echo $session['id']; ?> </option>
								<?php } ?>    
								</select>
							<div class="row ipad-width2">
								<div class="col-md-8 col-sm-12 col-xs-12">
								<button class="btn-hover color-9 "type="submit" >Update Session</button>
								</div>
							</div>
					</div> 
				</form>
			</div>	
			<br> </br>
			<div class="col-md-2 col-sm-12 col-xs-12">
				<button class="btn-hover color-6 loginLink" >Add Session</button>
			</div>							
		</div>

		
		

	<div class="container">
		<div class="row ipad-width2">
		<div style= "color : aquamarine;" class="col-md-12 col-sm-12 col-xs-12">
		<br> </br>	<h3>CUSTOMER</h3>
			</div>	
		</div>
		<div class="row ipad-width2">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<form method="post" action= <?php echo base_url('AdminActivities/deleteCustomer')?>>
					<div class="form-group input-group">
								<select class="form-control" name="customer">
								<?php $query = $this->db->query("SELECT * FROM customer;");
								foreach ($query->result_array() as $customer)
								{?>
									<option selected=""  > <?php echo$customer['name']; ?> </option>
								<?php } ?>    
								</select>
							<div class="row ipad-width2">
							<div class="col-md-8 col-sm-12 col-xs-12">
								<button class="btn-hover color-7 "type="submit" >Delete Customer</button>
								</div>
							</div>
					</div> 
				</form>
			</div>						
		</div>

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