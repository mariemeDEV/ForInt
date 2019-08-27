<?php
// Démarrage ou restauration de la session
session_start();
require_once '../../model/IntermediaireDao.php';
require_once '../../mapping/Intermediaire.php';
require_once '../../model/AssureDao.php';
require_once '../../mapping/Assure.php';
require_once '../../mapping/Police.php';
require_once '../../model/PoliceDao.php';
require_once '../../mapping/SchemaData.php';
require_once '../../model/SchemaDataDao.php';
if(isset($_GET['action']))
{
    switch ($_GET['action']) {
        case 'connect':
            require_once('../../view/user/connect.php');
        break;
        case 'disconnect':
            header('Location: ../../view/user/disconnect.php');
        break;
        case 'lister':
          $usdao=new IntermediaireDao();
          $resultat=$usdao->listUser();
          require_once('../../view/user/listeuser.php');
        break;
        case 'profil':
            $usdao=new IntermediaireDao();
            $us=new Intermediaire($_SESSION['matricule'],0,0,0,0,0,0);
            $resultat=$usdao->getUserByMat($_SESSION['matricule']);
            foreach ($resultat as $item)
            {
                $nom       = $item['prenom']." ".$item['nom'];
                $matricule = $item['matricule'];
                $adresse   = $item['adresse'];
                $tel       = $item['tel'];
                $email     = $item['email'];
                $mdp       = $item['mdp'];
            }
            require_once('../../view/user/profil.php');
        break;
       
        default:
            require_once('../../view/error.php');
        break;
    }
}
if(isset($_POST['action'])){
    switch($_POST['action']) {
        case 'connexion':
                  $usdao = new IntermediaireDao();
                  $mdp   = filter_var($_POST['mdp'],FILTER_SANITIZE_STRING);
                  $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
                  if(!filter_var($email,FILTER_VALIDATE_EMAIL)==false)
                  {
                      $us=new Intermediaire(0,0,0,0,0,$email,0);
                      $resultat=$usdao->getUserByMail($_POST['email']);
                      while($row=$resultat->fetch())
                      {
                          $mail     = $row[5];
                          $password = $row[6];
                          $adresse  = $row[3];
                          $profil   = $row[7];
                          $activCpt = $row[8];
                          $mat      = $row[0];
                      }
                      if($resultat==true)
                      {
                          if (!isset($mail) || !isset($mdp))
                          {
                              echo '<body onLoad="alert(\'adresse email ou mot de passe invalide...\')">';
                          }
                          else
                          {
                              if ($mail==$email && password_verify($mdp, $password))  {
                                //   echo($password);
                                //   $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
                                //     if (password_verify($_POST['mdp'], $password)) {
                                //         echo 'Password is valid!';
                                //     } else {
                                //         echo 'Invalid password.';
                                //     }
                                  if($profil==2)
                                  {
                                      if($activCpt==1 )
                                      {
                                          $_SESSION['matricule']=$mat;
                                          $_SESSION['username']=$mail;
                                          $_SESSION['password']=$password;
                                          $user= $_SESSION['username'];
                                          $pwd= $_SESSION['password'];
                                          $_SESSION['timestamp'] = time();
                                          $_SESSION['mdp']=$mdp;
                                          echo '<body onLoad="alert(\'Membre est reconnu...\')">';
                                          if( $mdp=="saham")
                                          {
                                              header('Location: ../../controller/intermediaire/?action=profil');
                                          }
                                          else
                                            header('Location: ../../view/user/accueil.php');
                                      }
                                      else
                                      {
                                          echo '<body onLoad="alert(\'Votre compte a été desactivé...\')">';
                                      }
                                  }
                                  if($profil==1)
                                  {
                                    if ($activCpt==1)
                                    {
                                          $_SESSION['matricule']=$mat;
                                          $_SESSION['username']=$mail;
                                          $_SESSION['password']=$password;
                                          $user= $_SESSION['username'];
                                          $pwd= $_SESSION['password'];
                                          '<body onLoad="alert(\'admin est reconnu...\')">';
                                          header('Location: ../../view/admin/accueil.php');
                                    }
                                      else{
                                        echo '<body onLoad="alert(\'Admin non reconnnu...\')">';
                                      }
                                  }
                                  if($profil==3){
                                      echo 'troisiéme role';
                                  }
                              }
                              else
                              {
                                echo '<body onLoad="alert(\'vous netes  pas reconnu...\')">';
                              }
                          }
                      }
                  }
                  else
                  {
                    echo '<body onLoad="alert(\'Adresse email non valide...\')">';
                  }
            require_once('../../view/user/connect.php');
            break;
        case 'pmodif'://modification du mot de passe
            $usdao=new IntermediaireDao();
            $us=new Intermediaire( $_SESSION['matricule'],0,0,0,0, 0,  0);
            $resultat=$usdao->getUserByMat($_SESSION['matricule']);
            foreach ($resultat as $item)
            {
                $pwd=$item['mdp'];//je récupere le mot  de passe de la base de données
            }
            if(($_POST['Npwd'] != $_POST['Cpwd']))// je verifie si le nouveau MDP et le MPD confirmé sont conformes!!
            {
                header('Location: ../../controller/intermediaire/?action=profil&err=1np0');
            }
            elseif ($_POST['Npwd']=="saham" && $_POST['Cpwd']=="saham")// il ne peut pas choisir 'saham' comme nouveau MDP
            {
                header('Location: ../../controller/intermediaire/?action=profil&err=2np0');
            }
            else
            {
                if(!password_verify($_POST['Amdp'], $pwd))//je verifie si l'ancien et le new MDP ne sont pas identique
                {
                    header('Location: ../../controller/intermediaire/?action=profil&err=1np0');
                }
                else
                {
                    $hash = password_hash($_POST['Cpwd'],PASSWORD_BCRYPT);
                    $ps=new Intermediaire( $_SESSION['matricule'],0,0,0,0, 0, $hash);
                    $modification=$usdao->modifMdp($ps);
                    if($modification==true)
                        header('Location: ../../controller/intermediaire/?action=profil&err=1np1');
                }
            }
            break;
        default:
            require_once('../../view/error.php');
            break;
}
}