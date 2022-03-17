<div id="pen-title2">
  <h1>Connexion Metropolis</h1>
</div>
<div id="pen-title">
  <h1>Inscription Metropolis</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Enregister</h1>
    <form method="post" action="assets/include/traitement-inscription.php">
    <div class="input-container">
        <input type="#{type}"  id="#{label}" name="Pseudo" required="required" />
        <label for="#{label}">Pseudo</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}"  id="mail1" onchange="DoubleCheck()" name="mail" required="required" />
        <label for="#{label}">Adresse mail</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}"  id="mail2" onchange="DoubleCheck()" name="mail1" required="required" />
        <label for="#{label}"> Confirmer Adresse mail</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}"  id="mdp1" onchange="DoubleCheck()" name="mdp"
          pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
        <label for="#{label}">Mot de passe </label>
        <div class="bar"></div>
      </div>
      <div style=" align-items: center; display: flex; justify-content: center; color: red; margin: 0px 0 50px; font-size:16px;">(minimum : 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre)</div>
      <div class="input-container">
        <input type="#{type}"  id="mdp2" onchange="DoubleCheck()" name="mdp1" required="required" />
        <label for="#{label}"> Confirmer Mot de passe</label>
        <div class="bar"></div>
      </div>
        <?php 
    switch ($_GET['id']){
        case "erconnexion":
            echo "<p class='messageerreur'> Connexion impossible :<br> Email ou Mot de passe oublié</p>";
            break;
        case "ercont":
            echo "<p style='color: white'> Erreur est le contenu </p>";
            break;
            case "#":
            echo "<p style='display:none'>rien</p>";
            break;
        }?> 	  
      <div class="button-container">
      <button type="Submit"id="submit" ><span>Valider</span></button>
      </div>
    </form>
  </div>


  <div class="card alt">

    <div class="toggle"></div>
    <h1 class="title">Connexion
      <div class="close"></div>
    </h1>
    <form method="post" action="assets/include/traitement-connexion.php">
      <div class="input-container">
        <input type="#{type}"  name="mail" />
        <label for="#{label}">Adresse mail</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}"  name="mdp" required="required" />
        <label for="#{label}">Mot de passe</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="checkbox" id="checkbox" />
        <label for="checkbox"><span class="ui"></span>Rester connecter</label>
      </div>
      <div class="button-container">
        <button id="submit" ><span>Connexion</span></button>
        <div class="footeri"><a href="#">Vous avez oublié votre mot de passe ?</a></div>
      </div>

    </form>
  </div>
</div>

<!-- Portfolio--><a id="portfolio" href="localhost/portfolio" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="https://github.com/Erasedon/Metropolis" title="Follow me!"><i
    class="fa fa-codepen"></i></a>