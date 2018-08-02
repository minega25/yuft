<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	   <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
      <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- GOOGLE FONT -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<?php include_once("tagcss.php") ?>
<body>
	
 <!-- Navigation -->
    
  <?php  include_once("header_template.php")   ?>
  <?php include_once("template_nav.php") ?>
         <!--Jumbotron -->

<!-- heading jumbtron -->
  <section style="height:0 auto;">
    <div class="row" style="height:40vh; overflow-y: hidden;">
        <div class="md-col-12" >
          <div class="jumbotron" style="background-color: rgb(182,47,44);">

          <img src="assets/images/4.jpg" style="opacity: 0.6;">
          <a href="#mission" style="text-decoration:none; color:inherit">
						<div class="page-title">Join Us</div></a>
  </div>

</div>
    </div>

  </section>











<section  class="othersections">
	<div class="container form_area">
		<h3 class="section-heading">Say Hello</h3>
	<div class="panel-body">
		<form method="post" class="form-horizontal col-md-12 " action="" role="form">
			<div class="form-group">
			<div class="col-md-6">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="text" id="name" placeholder="Your name*" class="form-control" />
				</div>

			</div>
			<div class="col-md-6">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input type="email" id="email" placeholder="Your Email*" class="form-control" />
				</div>
			</div>
			</div>
			<div class="form-group">
			<div class="col-md-6">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
					<input type="text" id="phoneNumber" placeholder="Your phone Number*" class="form-control" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
					<select name="service" class="form-control">
						<option value="1">Management</option>
						<option value="2">Sales</option>
					</select>
				</div>
			</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
						<textarea class="form-control textarea"  rows="5" placeholder="Message*"></textarea>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-submit dark-grey"><b> Submit Now</b></button>
				</div>
			</div>
		</form>
	</div>
</div>
</section>
<section id="join_us_area ">
	<div class="container join_us ">
		<h3 class="text-center section-heading ">Contact Us:</h3>
		<div class="row text-center ">
			<div class="col-md-6">
				<h4>Sales and Marketing Department</h4>
				<p>Email: ymw.sales@gmail.com</p>
				<p>Phone Contact: +256753147443</p>
			</div>
			<div class="col-md-6">
				<h4>General Manager</h4>
				<p>Email: ymw.gmisaac@gmail.com</p>
				<p>Phone Contact: +256705667495</p>
			</div>
		</div>
	</div>
</section>
<section class="map_area" style="margin:20px;">
	<div class="container">
		<div class="col-md-12 map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.736008080688!2d32.567141414485135!3d0.3677770997316773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dba918fa49773%3A0x12db44029d9dcac7!2sTarmac%2C+Kampala!5e0!3m2!1sen!2sug!4v1524846823708" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>

<?php include_once("template_footer.php")  ?>
