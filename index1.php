<!DOCTYPE html>
<html lang="en">
<head>
	<title>Perhitungan BMI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100" style="background-image: url('images/batman1.jpg');">
		<div class="wrap-contact100" style="background-image: url('images/ascii.jpg');">
			<form class="contact100-form validate-form" action=index1.php method=post>
				<span class="contact100-form-title">
					Perhitungan BMI
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Berat Badan Anda</span>
					<input class="input100" type="text" name="berat" placeholder="Berat Badan Anda (kg)" value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" required>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Tinggi Badan Anda</span>
					<input class="input100" type="text" name="tinggi" placeholder="Tinggi Badan Anda (m)" value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required>
				</div>

				<!-- <div class="wrap-input100">
					<span class="label-input100">Your Website</span>
					<input class="input100" type="text" name="web" placeholder="http://">
				</div> -->

				<!-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Hasil</span>
					<textarea class="input100" name="message" placeholder="Hasilnya" ></textarea>
					
				</div> -->
				<?php
				if(!empty($_POST['hitung'])) { 
			    $berat = $_POST['berat'];
			    $tinggi = $_POST['tinggi'];
			    function bmi($berat,$tinggi) {
			        $bmi = $berat/($tinggi*$tinggi);
			        return $bmi;
			    }   
			    $bmi = bmi($berat,$tinggi);
			    if ($bmi <= 18.5) {
			        $output = "UNDERWEIGHT";
			        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
			        $output = "NORMAL WEIGHT";
			        } else if ($bmi > 24.9 AND $bmi<=29.9) {
			        $output = "OVERWEIGHT";
			        } else if ($bmi > 30.0) {
			        $output = "OBESE";
			    }
			    echo "Your BMI value is : " . $bmi . "<br>  and you are : "; 
			    echo "$output";
			}
			?>
				
				<div class="container-contact100-form-btn" >
					<div class="wrap-contact100-form-btn" >
						<div class="contact100-form-bgbtn" style="background-image: url('images/batman.jpg');"></div>
						<button class="contact100-form-btn" type="submit" name="hitung" value="hitung">
							Hitung BMI 
						</button>
					</div>
				</div>
			</form>
		</div>

		<!-- <span class="contact100-more">
				Call us on +001 345 6178
		</span> -->
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> -->

</body>
</html>
