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

												$strSQL = "SELECT * FROM member WHERE Username_member =  '$username' and Password_member = '$password'";
												$objQuery = mysqli_query($objCon,$strSQL);
												$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

												if(!$objResult){

													echo '<script type="text/javascript">';
													echo 'setTimeout(function () {';
													echo 'swal("ล้มเหลว!","username หรือ password ไม่ถูกต้อง","warning").then( function(val) {';
													echo 'if (val == true) window.location.href = \'index.php\';';
													echo '});';
													echo '}, 200);  </script>';
												}	else {

													$_SESSION["login_success"] = "success";
													$_SESSION["id"] = $objResult["id_member"];
													$_SESSION["username"] = $objResult["Username_member"];
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
												echo 'if (val == true) window.location.href = \'index.php\';';
												echo '});';
												echo '}, 200);  </script>';
											}
						}
    }

?>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('http://delve.link/wp-content/uploads/2019/03/dark-blue-tech-circuit-board-technology-animated-background-video-graphic-design-ultra-hd-4k-3840x2160_sgelpuywg_thumbnail-full05-e1551444690845.png');background-repeat: no-repeat;">
			<div class="wrap-login100 p-l-80 p-r-80 p-t-42 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="post" id="fm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<span class="login100-form-title p-b-25">
						Baccarat
					</span>

					<!-- <a href="#" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-20">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a> -->

					<div class="p-t-0 p-b-9">
						<span class="txt1">
							ชื่อผู้ใช้งาน
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" id="username" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							รหัสผ่าน
						</span>

						<!-- <a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a> -->
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17 p-t-20">
						<button class="login100-form-btn" type="submit" name="submit">
							เข้าสู่ระบบ
						</button>
					</div>

					<div class="w-full text-center p-t-25">
						<!-- <span class="txt2">
							Not a member?
						</span>

						<a href="#" class="txt2 bo1">
							Sign up now
						</a> -->
					</div>
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
