<?php
include('./env/config.php');
error_reporting(0);
ini_set('display_errors', 0);

if (session_status() == PHP_SESSION_NONE) {
session_start();
}

$login_success = $_SESSION["login_success"];
		if(strcmp($login_success,'success')==0){
		 header( "location: index.php" );
    }else{
			$set_code = mt_rand(1111, 9999);
			if(isset($_POST['submit'])){
					$code = $_POST['code'];
					$legacy_code = $_POST['legacy_code'];
						if ( strcasecmp( $legacy_code, $code ) == 0 ){

												$username = $_POST['username'];
												$password = $_POST['password'];

												$strSQL = "SELECT * FROM user WHERE username =  '$username' and password = '$password'";
												$objQuery = mysqli_query($objCon,$strSQL);
												$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

												if(!$objResult){

													echo '<script type="text/javascript">';
													echo 'setTimeout(function () {';
													echo 'swal("ล้มเหลว!","username หรือ password ไม่ถูกต้อง","warning").then( function(val) {';
													echo 'if (val == true) window.location.href = \'login.php\';';
													echo '});';
													echo '}, 200);  </script>';
												}	else {

													$_SESSION["login_success"] = "success";
													$_SESSION["id"] = $objResult["id"];
													$_SESSION["username"] = $objResult["username"];
													$_SESSION["role"] = $objResult["role"];
													session_write_close();
														if($objResult["role"] == "admin"){
															header("location:index.php");
														}	else	{
														}
													}

														mysqli_close($objCon);

											}else{
												echo '<script type="text/javascript">';
												echo 'setTimeout(function () {';
												echo 'swal("ล้มเหลว!","Code ยืนยันไม่ถูกต้อง","warning").then( function(val) {';
												echo 'if (val == true) window.location.href = \'login.php\';';
												echo '});';
												echo '}, 200);  </script>';
											}
						}
    }

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>RCA777</title>

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
								</h1>
								<img src="./assets/images/logo/RCA777.png" height="90" width="180">
								<h4 class="white" id="id-company-text">&copy; RCA777.com</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">


											<!-- <h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4> -->

											<div class="space-6"></div>

											<form method="post" id="fm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" id="username" name="username" class="form-control" placeholder="Username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" id="password" name="password" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>


													<div class="clearfix">
														<span class="width-50 input-icon input-icon-right">
															<input type="text" id="code" name="code" class="form-control" placeholder="code" />
															<input type="hidden" id="legacy_code" name="legacy_code" class="form-control" placeholder="code" value="<?php echo $set_code;?>"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>

														<button type="#" name="#" class="width-50 pull-right btn btn-sm btn-dark" value="1234">
															<span class="bigger-110"><?php echo $set_code;?></span>
														</button>
													</div>
													<br>
													<div class="clearfix">
														<!-- <label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label> -->

														<button type="submit" name="submit" class="width-100 pull-right btn btn-sm btn-dark">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>







									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							</div><!-- /.position-relative -->

							<!-- <div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div> -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">

				// $('#fm').on('keyup keypress', function(e) {
				//   var keyCode = e.keyCode || e.which;
				//   if (keyCode === 13) {
				//     e.preventDefault();
				//     return false;
				//   }
				// });

			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});



			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			 });

			});
		</script>
	</body>
</html>
