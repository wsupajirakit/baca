<?php
include('../env/config.php');
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
															header("location:../index.php");
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
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

			<form class="login100-form validate-form" method="post" id="fm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<span class="login100-form-title p-b-26">
								Baccarat
					</span>
					<span class="login100-form-title p-b-48">

						<!-- <i class="zmdi zmdi-font"></i> -->
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="username" id="username" autocomplete="off">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" id="password" name="password" autocomplete="off">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">
								เข้าสู่ระบบ
							</button>
						</div>
					</div>

					<!-- <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
