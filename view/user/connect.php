  
<html>
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
                            <div class="group">
                                <input type="email" name="email" id="email" required><span class="highlight"></span><span class="bar"></span>
                                <label style='margin-top: -18px;margin-left: -152px;'>Login</label>
                            </div>
                            <div class="group">
                                <input type="password" name="mdp" id="mdp" required ><span class="highlight"></span><span class="bar"></span>
                                <label style='margin-top: -15px;margin-left: -160px;'>Mot de passe</label>
                            </div>
                        </div>
                        <input  class="button" type="submit" value="connexion" name="action">
                    </form><!--form 2-->
                </div>
                </div>
            </main>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../view/js/form-script.js"></script>
</body>
</html>