<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
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
	<link rel="stylesheet" type="text/css" href="../../view/style/util.css">
	<link rel="stylesheet" type="text/css" href="../../view/style/form.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../../img/LogoSaham1.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action ="../../controller/intermediaire/index.php" method="POST" >
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						For-Int
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Login">
						<input class="input100" type="text" name="email" id="email" placeholder="login">
						<span class="focus-input100" data-placeholder="&#xf36b;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Mot de passe">
						<input class="input100" type="password" name="mdp" id="mdp" placeholder="mot de passe">
						<span class="focus-input100" data-placeholder="&#xf36b;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Se rappeler de moi
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="connexion" name="action">Se connecter</button>
					</div>
					<div class="text-center p-t-90">
						<a class="txt1" href="#">Mot de passe oublié</a>
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
	<script src="../../view/js/main_form.js"></script>

</body>
</html>

<!--html>
<head>

</head>
<body>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
        <title>For-Int</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link rel="stylesheet" href="../../view/style/bootstrap.min.css">
        <link href="../../view/style/style_2.css" rel="stylesheet">
    </head>
    <body id="connect">
    <style>
        input{
            width: 368%;
            margin-left: -148px;
        }
    </style>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> 
            <main class="mdl-layout__content">
                <div class="container" style='margin-top:147px;'>
                <div class="card" style='width: 40% !important;margin: auto !important;'>
                    <div class="card-header" style='height: 53px;background: #062945;'><p style='color: #f7ba00;text-align: center;font-size: 35px;'>For-Int<span style='color: #f7ba00;font-size:12px;text-decoration:underline'>Saham Sénègal</span></p></div>
                    <div class="card-body">
                        <form action ="../../controller/intermediaire/index.php" method="POST" ><!--form 2-->
                            <!--div class="group">
                                <input type="email" name="email" id="email" required><span class="highlight"></span><span class="bar"></span>
                                <label style='margin-top: -18px;margin-left: -152px;'>Login</label>
                            </div>
                            <div class="group">
                                <input type="password" name="mdp" id="mdp" required ><span class="highlight"></span><span class="bar"></span>
                                <label style='margin-top: -15px;margin-left: -160px;'>Mot de passe</label>
                            </div>
                        </div>
                        <input  class="button" type="submit" value="connexion" name="action">
                    </form><form 2-->
                <!--/div>
                </div>
            </main>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../view/js/form-script.js"></script>
</body>
</html-->