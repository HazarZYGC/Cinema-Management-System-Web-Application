<!DOCTYPE html>
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
	<script>
		function myFunction(e) {
  			
			alert(e.target.innerText);
			} 
		
	</script>
</head>
<body>
<div id="preloader">
    <img class="logo" src= "<?php echo base_url('assets\front'); ?> \images\logo.png" alt="">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action= <?php echo base_url('useractivities/login')?>>
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
        <form method="post" action= <?php echo base_url('useractivities/register')?>>
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

<div class="hero common-hero">
</div>
<div class="page-single movie_list">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-10 col-sm-12 col-xs-12">
			<?php $query = $this->db->query("SELECT * FROM movie ;");
			foreach ($query->result_array() as $movie)
			{ ?>
				<div class="movie-item-style-2">
					<img src="<?php echo $movie['image'];  ?>" alt="">
					<div class="mv-item-infor">
						<h6 ><a id="myCheck" href = "<?php echo base_url('/moviesingle/detay').'/'.$movie['id']?>"><?php echo $movie['name']; ?></a></h6>
						<p class="rate"><i>&#9734;</i><span><?php echo number_format((float)$movie['rate_number'],1,'.','') ?></span> /5</p>
						<p class="run-time">Duration: <?php echo $movie['duration'];  ?>  min     <span>Release: <?php echo $movie['release_date'];  ?></span></p>
						<p>Director: <a><?php echo $movie['director'];  ?></a></p>
						<p>Stars: <a><?php echo $movie['star_1'];  ?>,</a> <a><?php echo $movie['star_2'];?></a></p>
					</div>
				</div>
			<?php } ?>
				
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