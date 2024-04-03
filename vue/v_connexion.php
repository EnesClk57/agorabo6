<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Identification</title>
  <link href="../web/css/styleAgora.css" rel="stylesheet">
</head>

<body>
  <!--
******************************************************************************************
****************************************************************
 MAIN CONTENT

******************************************************************************************
***************************************************************** -->
  <div id="login-page">
    <div class="container connexion">
      <form class="form-login" method="post" action="index.php?uc=connexion">
        <h2 class="form-login-heading">Identification utilisateur</h2>
        <div class="login-wrap">
          <?php
          if (isset($erreur)) {
            echo '<div class="erreur"><p>' . $erreur . '</p></div>';
          }
          ?>
          <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login" required autofocus />
          <br />
          <input type="password" class="form-control" name="txtMdp" id="txtMdp" placeholder="Mot de passe" required />
          <!-- champ caché -->
          <input type="hidden" name="hdMdp" id="hdMdp" />
          <!-- champ caché pour le mot de passe haché -->
          <div class="pull-right login-social-link">
            <!--La version 5 du langage HTML a ajouté un nouveau type d'attribut, qui
     n'est pas interprété par le navigateur.
      Ce sont tous les attributs dont le nom commence par les lettres data.
      L'attribut data-toggle contient le type d'événement qui va être lié à un
     bouton
      data-toggle=modal /* Bouton qui ouvre une fenêtre modale -->
            <a data-toggle="modal" href="v_connexion.php#myModal">
              Mot de passe oublié ?</a>
          </div>
          <!-- l'événement onclick contient du code javascript pour hacher le mot de passe
                        avec la fonction de hachage SHA512
                        le résultat est stocké dans le champ caché qui sera transmis au serveur
                        document.getElementById('hdMdp').value : la valeur du champ caché hdMdp document.getElementById('txtMdp').value : la valeur du champ saisi txtMdp qui est mise à ' ' avant transmission au serveur pour ne pas envoyer le mdp en clair hex_sha512 : fonction javascript de hachage sha512 avec retour du résultat en hexadecimal
                     b-->
          <!-- <button class="btn btn-theme btn-block" type="submit" name="cmdAction" value="validerConnexion" title="Se connecter" onclick="document.getElementById('hdMdp').value = hex_sha512(document.getElementById('txtMdp').value);document.getElementById('txtMdp').value = ' ';">
            <i class="fa fa-lock"></i> Se connecter</button> -->
          <button class="btn btn-theme btn-block" type="submit" name="cmdAction" value="validerConnexion" title="Se connecter" onclick="document.getElementById('hdMdp').value = hex_sha512(document.getElementById('txtMdp').value);document.getElementById('txtMdp').value = ' ';">
            <i class="fa fa-lock"></i> Se connecter</button>
          <hr />
        </div>

        <!-- la fenêtre modale -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" ariahidden="true">
                  &times;
                </button>
                <!-- data-dismiss ferme les fenêtres modales-->
                <h4 class="modal-title">Mot de passe oublié ?</h4>
              </div>
              <div class="modal-body">
                <p>
                  Entrez votre adresse mail pour réinitialiser votre mot de
                  passe.
                </p>
                <input type="text" name="txtEmail" id="txtEmail" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" />
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">
                  Cancel
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <script src="./web/libAgora/sha512.js"></script>
</body>

</html>