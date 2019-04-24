  
<html>
<head>

</head>
<body>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon-32x32.png" />
        <title>Saham Assurance SN</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="../../view/style/style_2.css" rel="stylesheet">
    </head>
    <body id="connect">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"> 
            <main class="mdl-layout__content">
                <div class="container">
                    <img src="../../img/login_logo-min.png" class='connect-avatar' alt="">
                <form action ="../../controller/intermediaire/index.php" method="POST" ><!--form 2-->
                    <div class="group">
                        <input type="email" name="email" id="email" required><span class="highlight"></span><span class="bar"></span>
                        <label>Login</label>
                    </div>
                    <div class="group">
                        <input type="password" name="mdp" id="mdp" required ><span class="highlight"></span><span class="bar"></span>
                        <label>Mot de passe</label>
                    </div>
                    <input  class="button" type="submit" value="connect" name="action">
                </form><!--form 2-->
            </div>
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../view/js/form-script.js"></script>
</body>
</html>