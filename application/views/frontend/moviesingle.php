<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">
<head>

	<!-- Basic need -->
	<?php $customer=$this->session->userdata('user'); ?>
	<title>Reserve Ticket</title>
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
<div id="preloader">
    <img class="logo" src= "<?php echo base_url('assets\front'); ?> \images\logo.png" alt="">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action= "<?php echo base_url('useractivities/login')?>">
        	<div class="row">
        		 <label for="email">
                    E-mail:
                    <input type="text" name="email" id="email" placeholder=""  required="required">
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder=""  required="required">
                </label>
            </div>
           
           <div class="row">
           	 <button  type="submit">Login</button>
           </div>
        </form>
        
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper" id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="<?php echo base_url('useractivities/register')?>">
            <div class="row">
                 <label for="username-2">
                    Full Name:
                    <input type="text" name="username" id="username-2" placeholder=""required="required">
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    your email:
                    <input type="email" name="email" id="email-2" placeholder="" required="required">
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="password" id="password-2" placeholder=""  required="required">
                </label>
            </div>
             
           <div class="row">
             <button type="submit">sign up</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->

<!-- BEGIN | Header -->
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
				    <a href="<?php echo base_url(''); ?>"><img class="logo" src= " <?php echo base_url('assets\front'); ?> \images\logo1.png" alt=""></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
					
						<li class="dropdown first">
							<a href= "<?php echo site_url(''); ?>" class="btn btn-default lv1" >
							Home 
							</a>
							
						</li>
						<li class="dropdown first">
							<a href= "<?php echo site_url('movies'); ?>" class="btn btn-default lv1" >
							movies
							</a>
							
						</li>
						
					</ul>
					<?php if($this->session->userdata('durum')){?>
						
						<ul class="nav navbar-nav flex-child-menu menu-right">
						<li> <a class="btn btn-default"> <?php echo $customer->name ?></a></li>
						<li class="btn"><a href="<?php echo base_url('useractivities/logout');?>">log out</a></li>
						</ul>
						<?php }
					else{ ?>
					
						<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="loginLink"><a href="#">LOG In</a></li>
						<li class="btn signupLink"><a href="#">sign up</a></li>
						</ul>
					<?php } ?>
					
					
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
<div class="page-single movie-single movie_single movie-single-pad">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
				<div class="movie-item-style-2">
				<img src="<?php echo $image;  ?>" alt="">
				<div>
					<h1 class="bd-hd"><?php echo $name?> <span><?php echo $release_date?></span></h1>
					<div class="movie-rate">
						<div class="rate">
							<i>&#9734;</i>
							<p><span><?php echo number_format((float)$rate_number,1,'.','')?></span> /5<br>
							</p>
						</div>
						<div class="rate-star">
							<p>Stars:  </p>
							<h5 style="color: white;"><span><?php echo $star_1." and ".$star_2?></span></h5>
							
						</div>
						
					</div>

			<?php if($this->session->userdata('durum')){?>			
			<form action= <?php echo base_url('useractivities/rateMovie')?> method="post">
				<div class="col-md-3 col-sm-12 col-xs-12 arif">
					<div class="form-group input-group">
						<select id="rate-option"  class="form-control" name="rate_value">
							<option value="<?php echo '1-'.$id ?>" > 1 </option>
							<option value="<?php echo '2-'.$id ?>" > 2 </option>
							<option value="<?php echo '3-'.$id ?>" > 3 </option>
							<option value="<?php echo '4-'.$id ?>" > 4 </option>
							<option value="<?php echo '5-'.$id ?>" > 5 </option>
						</select>
					</div> 
					<div class="wrapper">
						<button class="btn-hover color-8" type="submit">Rate Now</button>
					</div>
				</div>	

			</form>

			<?php }
			else{ ?>
			<form  method="post">
				<div class="col-md-3 col-sm-12 col-xs-12 arif">
					<div class="form-group input-group">
						<select id="rate-option"  class="form-control" name="rate_value" disabled>
							<option value="" > 1 </option>
							<option value="" > 2 </option>
							<option value="" > 3 </option>
							<option value="" > 4 </option>
							<option value="" > 5 </option>
						</select>
					</div> 
					<div class="wrapper">
						<button class="btn-hover color-8" type="submit" disabled>Rate Now</button>
					</div>
				</div>	
			</form>
			<?php } ?>
			</div>
			</div>

			
			<form action="" method="post">
			<div class="col-md-6 col-sm-12 col-xs-12 arif">
					<div class="form-group input-group">
                        <select id="theater-option"  class="form-control" name="team">
						<?php 
						$session_query =  $this->db->query("SELECT * FROM sessions where movie_id=$id;");
						
						foreach ($session_query->result_array() as $sessions)
						{
							$a = $sessions['theater_id'];
							$query = $this->db->query("SELECT * FROM theater where id=$a ;");
							foreach ($query->result_array() as $theater){ ?>

                            <option > <?php echo $sessions['id']." - ".$theater['location']." -  ".$sessions['session_date']."  -  ".$sessions['session_time']; ?> </option>
						<?php } 
						} ?>    
						</select>
						
					</div> 
					
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb single-movv">
						<div class="btn-transform transform-vertical">
						<div class="wrapper">
						<button class="btn-hover color-8" type="submit" name="submit">Reserve Ticket</button>
						
				</div>
			</div>	
		</form>
		<?php       if(isset($_POST['submit']))
					{         
						if(!empty($_POST['team'])) 
						{          
							 $selected = $_POST['team'];
							 $array = explode(' - ',$selected);          
							 redirect('/ticketrent/detay'.'/'.$array[0]) ;      
						} 
						else 
						{          
							echo 'Please select the value.';        
						}       
					}     ?>
	
			
			
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