<?php
Session_start();
require_once 'Model/User.php';

$Connexion = new User();


?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>

</head>
<body>    
          
    <header>
        <!-- Logo --> 
        <section class="headerLogo" onmouseover="dropMenuClose()">
            <img class="imgLogo"src="image/logo.png" alt="Logo du site">
            <div class="icones">
            <form class="search">
            <input type="text" placeholder="Search" class="search__input" />
            <button type="button" class="search__button">
                <img class="recherche" src="image/loupe.png" alt="">
            </button>
            </form>

          

                <a href="?page=compte"><img class="panier" src="image/panier.jpg" alt="Logo du panier"></a>

                <a href="?page=compte"><img class="compte" src="image/compte.jpg" alt="Logo espace compte"></a>
<?php
                if (!empty($_SESSION)) {
?>  
                    <a href="?page=compte"><img class="compte" src="image/compte.jpg" alt="Logo espace compte"></a>
<?php
                }
?>
                

            </div>
        </section>

        <!-- BarreNav & Burger -->
        <section class="barreNav">
            <ul class="ulBarreNav">
                <li class="liBarreNav" id="accueil"><a href="?index=acceuil">Accueil</a></li>
                <li class="liBarreNav" id="Apropos" onmouseover="dropMenuClose()">A propos</li>
                <li class="liBarreNav" id="sextoys" onmouseover="overDropMenu()">Sextoys▾</li>
                <li class="liBarreNav" id="cosmetique" onmouseover="overDropMenu2()">Cosmétique▾</li>
                <li class="liBarreNav" id="lingerie" onmouseover="overDropMenu3()">Lingerie▾</li>
                <li class="liBarreNav" id="promotion" onmouseover="dropMenuClose()">Promotion D'été</li>
                <li class="liBarreNav" id="contactezNous"><a href="?Contact=contactez-nous">Contactez-nous</a></li>
            </ul>
        </section>

        <section class="containerMenuBurger">
            <img class="menuBurger" id="bouton-menu" onclick="menuBurger()" src="./image/menuBurger.png" alt="">

            <div class="barreNavBurger">
                <ul class="ulBarreNavBurger">
                    <li class="liBarreNavBurger" id="accueil"><a href="?index=acceuil">Accueil</a></li>
                    <li class="liBarreNavBurger" id="Apropos">A propos</li>
                    <li class="liBarreNavBurger" id="sextoys" onclick="DropMenuTab()">Sextoys▸</li>
                    <li class="liBarreNavBurger" id="cosmetique" onclick="DropMenuTab2()">Cosmétique▸</li>
                    <li class="liBarreNavBurger" id="lingerie" onclick="DropMenuTab3()">Lingerie▸</li>
                    <li class="liBarreNavBurger" id="promotion">Promotion</li>
                    <li class="liBarreNavBurger" id="contactezNous"><a href="?Contact=contactez-nous">Contactez-nous</a></li>
                </ul>
            </div>

        </section>
        
        <!-- Drop menu tab -->
        <ul class="dropMenuTab" id="dropMenuTab" onmouseleave="dropMenuTabClose()">
            <div class="elements">
                <li><a  class="aa"href="">Dildo</a></li>
                <li><a href="">Harnais & Strap</a></li>
                <li><a href="">Sac de transport</a></li>
                <li><a href="">BDSM</a></li>
                <li><a href="">Anneau & Cockring</a></li>
                <li><a href="">Bijoux sensuel</a></li>
                <li><a href="">Boule de Geisha</a></li>
                <li><a href="">Jeux coquin</a></li>
                <li><a href="">Cups menstruelles</a></li>
                <li><a href="">Gant & Mitaines</a></li>
                <li><a href="">Masque, Menottes & Tapette</a></li>
                <li><a href="">Masturbateur & Stimulateur de prostate</a></li>
                <li><a href="">Oeuf vibrant</a></li>
                <li><a href="">Plug, chaîne anal & Gode</a></li>
                <li><a href="">Stimulateur clitoridien</a></li>
                <li><a href="">Vibromasseur</a></li>
                <li><a href="">Vibromasseur Rabbit</a></li>
            </div>
        </ul>
        <ul class="dropMenuTab2" id="dropMenuTab2"  onmouseleave="dropMenuClose()">
            <div class="elements">
                <li><a href="#">Afrodisiaque</a></li>
                <li><a href="#">Bougie de massage</a></li>
                <li><a href="#">Huile & Crème de message</a></li>
                <li><a href="#">Lubrifiant</a></li>
                <li><a href="#">Parfum, Brume, & Lotion corporelle</a></li>
                <li><a href="#">Peinture de corps</a></li>
                <li><a href="#">Plaisir du bain</a></li>
                <li><a href="#">Plaisir intime</a></li>
                
            </div>
        </ul>
        <ul class="dropMenuTab3" id="dropMenuTab3" onmouseleave="dropMenuClose()">
            <div class="elements">
                <li><a href="#">Grande tailles</a></li>
                <li><a href="#">Sexy Christmas</a></li>
                <li><a href="#">Bas</a></li>
                <li><a href="#">Bas autofixants</a></li>
                <li><a href="#">Bas jarretelles</a></li>
                <li><a href="#">Body</a></li>
                <li><a href="#">Babydoll</a></li>
                <li><a href="#">Bodystocking</a></li>
                <li><a href="#">Cache-tétons & Accesoire de lingerie</a></li>
                <li><a href="#">Costume sexy</a></li>
                <li><a href="#">Ensemble de lingerie</a></li>
                <li><a href="#">Guepière, Corset & Serre-Taille</a></li>
                <li><a href="#">Soutien-Gorge</a></li>
                <li><a href="#">String, Culotte, Tanga & shorty</a></li>
                <li><a href="#">Porte-jarrelles</a></li>
                <li><a href="#">Nuisette</a></li>
                <li><a href="#">Peignoir & Déshabiller</a></li>
                <li><a href="#">Robe sexy</a></li>
                <li><a href="#">Gant et mitaines</a></li>
                <li><a href="#">Collants</a></li>
                <li><a href="#">Lingerie homme</a></li>
                <li><a href="#">Maillot de bain</a></li>
            </div>
        </ul>


        <!-- Drop menu pc -->
        <ul class="dropMenu" id="dropMenu" onmouseleave="dropMenuClose()">
            <div class="elements">
                <li><a href="">Dildo</a></li>
                <li><a href="">Harnais & Strap</a></li>
                <li><a href="">Sac de transport</a></li>
                <li><a href="">BDSM</a></li>
                <li><a href="">Anneau & Cockring</a></li>
                <li><a href="">Bijoux sensuel</a></li>
                <li><a href="">Boule de Geisha</a></li>
                <li><a href="">Jeux coquin</a></li>
                <li><a href="">Cups menstruelles</a></li>
                <li><a href="">Gant & Mitaines</a></li>
            </div>
            <div class="elements">
                <li><a href="">Masque, Menottes & Tapette</a></li>
                <li><a href="">Masturbateur & Stimulateur de prostate</a></li>
                <li><a href="">Oeuf vibrant</a></li>
                <li><a href="">Plug, chaîne anal & Gode</a></li>
                <li><a href="">Stimulateur clitoridien</a></li>
                <li><a href="">Vibromasseur</a></li>
                <li><a href="">Vibromasseur Rabbit</a></li>
            </div>
        </ul>
        <ul class="dropMenu2" id="dropMenu2"  onmouseleave="dropMenuClose()">
            <div class="elements">
                <li><a href="#">Afrodisiaque</a></li>
                <li><a href="#">Bougie de massage</a></li>
                <li><a href="#">Huile & Crème de message</a></li>
                <li><a href="#">Lubrifiant</a></li>
            </div>
            <div class='elements'>
                <li><a href="#">Parfum, Brume, & Lotion corporelle</a></li>
                <li><a href="#">Peinture de corps</a></li>
                <li><a href="#">Plaisir du bain</a></li>
                <li><a href="#">Plaisir intime</a></li>
            </div>
        </ul>
        <ul class="dropMenu3" id="dropMenu3" onmouseleave="dropMenuClose()">
            <div class="elements">
                <li><a href="#">Grande tailles</a></li>
                <li><a href="#">Sexy Christmas</a></li>
                <li><a href="#">Bas</a></li>
                <li><a href="#">Bas autofixants</a></li>
                <li><a href="#">Bas jarretelles</a></li>
                <li><a href="#">Body</a></li>
                <li><a href="#">Babydoll</a></li>
                <li><a href="#">Bodystocking</a></li>
                <li><a href="#">Cache-tétons & Accesoire de lingerie</a></li>

            </div>
            <div class="elements">
                <li><a href="#">Costume sexy</a></li>
                <li><a href="#">Ensemble de lingerie</a></li>
                <li><a href="#">Guepière, Corset & Serre-Taille</a></li>
                <li><a href="#">Soutien-Gorge</a></li>
                <li><a href="#">String, Culotte, Tanga & shorty</a></li>
                <li><a href="#">Porte-jarrelles</a></li>
                <li><a href="#">Nuisette</a></li>
                <li><a href="#">Peignoir & Déshabiller</a></li>
                <li><a href="#">Robe sexy</a></li>

            </div>
            <div class="elements">
            <li><a href="#">Gant et mitaines</a></li>
            <li><a href="#">Collants</a></li>
                <li><a href="#">Lingerie homme</a></li>
                <li><a href="#">Maillot de bain</a></li>
            </div>
        </ul>
    
    </header>
                                
<?php
   

        if (isset($_GET['index']) && $_GET['index']== 'acceuil') {
?>          
            <!-- Image de fond et texte  -->

            <section class="containerAcceuil">
                <div class="imageAccueil">
                    <h1 class="titreImageAccueil">VOTRE PLAISIR<br> AVANT LE NÔTRE</h1>
                    <p class="texteImageAccueil">Bienvenue sur notre boutique en ligne dédiée aux plaisirs adultes, où l’intimité et le bien-<br>être prennent une nouvelle dimension grâce à notre sélection soigneusement choisie<br> de sex toys de qualité.</p>
                </div>
            </section>

            <!-- Logo paiment livraison service client -->

            <section class="containerGaranties">
                <!-- PAIEMENTT -->
                <div class="containerimgGarantie">
                    <img class="imgGarantie" src="image/paiement.jpg" alt="Image garantie paiement">
                    <p class="texteGarantie"> PAIEMENT 100% SÉCURISÉ</p>
                </div>

                <!-- livraison -->
                <div class="containerimgGarantie">
                    <img  class="imgGarantie"src="image/livraison.png" alt="Image livraison discrètes">
                    <p class="texteGarantie">LIVRAISON DISCRÈTE</p>
                </div>

                <!-- sevice client -->
                <div class="containerimgGarantie">
                    <img class="imgGarantie " src="image/servceClient.png" alt="Image service client">
                    <p class="texteGarantie">SERVICE CLIENT DISPONIBLE</p>
                </div>
            </section>  




            <section class="megaContainerAPropos">
                <h2 class="titreAPropos">A propos de nous</h2>
                <div class="containerAPropos">
                    <div>
                        <img class="imgAPropos" src="image/rose.jpg" alt="Image a propos">
                    </div>
                        <div class="containerTexteAPropos">
                            <h2 class="sousTitreAPropos">LIBÉREZ VOS DÉSIRS</h2>

                            <p class="texteAPropos">La Galerie du Sexe est bien plus qu’une simple boutique en ligne. Nous sommes passionnés par l’exploration et la célébration de l’intimité humaine dans toute sa diversité. Notre mission est de créer un espace sûr, discret et accueillant où chacun peut librement et confortablement découvrir une vaste gamme d’accessoires et de sex toys soigneusement sélectionnés.</p>

                            <p class="texteAPropos">Fondée sur des valeurs de respect, d’inclusion et d’éducation, La Galerie du Sexe s’engage à démystifier les tabous entourant la sexualité et à encourager des discussions ouvertes sur le sujet. Nous croyons fermement que la sexualité est une composante naturelle et précieuse de la vie humaine, méritant une approche positive et éclairée.</p>

                            <p class="texteAPropos">Notre équipe expérimentée travaille continuellement à rechercher et à présenter les dernières innovations dans le domaine des jouets pour adultes, en veillant à offrir des produits de haute qualité, sûrs et efficaces. Nous sommes là pour vous accompagner à chaque étape de votre parcours, en fournissant des informations, des recommandations et un service clientèle attentif.</p>

                            <input class="btnContactAPropos" type="submit" name="btnContactAPropos" value="Contactez-nous" >
                        </div>
                    </div>
            </section>
<?php 
}
?>

<?php

if (isset($_GET["Contact"]) && $_GET["Contact"] == "contactez-nous") {

    echo '
        <div class="containerTitreContact">
            <h2 class="titreContact">Contact</h2>
        </div>

        <h2 class="sousTitreContact">Une Question ?</h2>
        <div class="containerFormulaireContact">

            <form action="" method="POST">
                <div class="containerInputContact">
                    <input type="text" class="inputContact"  name="NomContact" placeholder="Nom">
                    <input type="text" class="inputContact" name="PrenomContact" placeholder="Prenom">
                </div>

                <div class="containerInputContact">
                    <input type="text" class="inputContact" name="telephoneContact" placeholder="Telephone">
                    <input type="text" class="inputContact" name="EmailContact" placeholder="Email">
                </div>

                <div class="messageContact">
                    <textarea type="text"  id="messageId" class="inputContactMessage"  name="MessageContact" placeholder="Message" maxlength="500" oninput="autoResize(this)"></textarea>
                </div>

                <div class="containerInputEnvoyer">
                    <input type="submit" class="inputContactEnvoyer" name="SubmitContact" value="Envoyer">
                </div>
                </form>
        </div>';
}



?>
<?php



if (isset($_GET["page"]) && ($_GET["page"]) == "compte") {
    echo '
        <div class="megaContainerConnexion">
        <div class="containerConnexion">
            <form  class="FormConnexion"action=""method="POST">
                <input  class="inputConnexionEmail" type="text" name="ConnexionEmail" placeholder="Email">
                <input type="text" class="inputConnexionPassword" name="ConnexionPassword" placeholder="Mot de passe">
                <input type="submit" name="inputSubmitConnexion" class="inputSubmitConnexion" value="Connexion">
                <div class="containerTexteConnexion">
                    <p><a href="?page=inscription">Vous n\'avez pas encore de compte ?</a></p>
                    <p><a href="?page=mot-de-passe-oublié">Mot de passe oublié ?</a></p>
                </div>
            </form>
        </div>
        </div>';


        if (isset($_POST['inputSubmitConnexion'])) {
            $email = $_POST['ConnexionEmail'];
            $mdp = $_POST['ConnexionPassword'];
           

            $Connexion->Connexion($email, $mdp);
        }

}


        
?>
<?php
if (isset($_GET["page"]) && ($_GET["page"]) == "inscription") {
    echo '
          <div class="megaContainerInscription">
              <div class="containerInscription">
                  <form class="FormInscription" action="" method="POST">
                    <div class="nomPrenomInscription">
                      <input class="inputInscriptionNom" id="inputInscriptionNom" type="text" name="InscriptionNom" placeholder="Nom">
                      <input class="inputInscriptionPrenom" type="text" name="InscriptionPrenom" placeholder="Prenom">
                    </div>
                        <input class="inputInscriptionEmail" type="text" name="inputInscriptionEmail" placeholder="Email">
                        <input type="text" class="inputInscriptionPassword" name="inputInscriptionPassword" placeholder="Mot de passe">
                        <input type="text" name="inputTelephoneConnexion" class="inputTelephoneConnexion" placeholder="Telephone">
                        <input type="date" name="inputDateConnexion" class="inputDateConnexion">
                        <input type="submit" name="inputSubmitInscription" class="inputSubmitConnexion" value="Inscription">
                  </form>
              </div>
          </div>';

        
          if (isset($_POST['inputSubmitInscription'])) {
                 
            $nom = htmlspecialchars($_POST ['InscriptionNom']);
            $prenom =  htmlspecialchars($_POST['InscriptionPrenom']);
            $tel =  htmlspecialchars ($_POST['inputTelephoneConnexion']);
            $email =  htmlspecialchars ($_POST['inputInscriptionEmail']);
            $mdp = ($_POST['inputInscriptionPassword']);
    

            $Connexion->Inscription($email, $mdp, $prenom, $nom, $tel);

            

          
        }
       
        
}
?>

<?php

    if (isset($_GET["page"]) && ($_GET["page"]) == "mot-de-passe-oublié") {
        echo '
        <div class="megaContainerMotDePasseOublié">
            <div class="containerMotDePasseOublié">
                <form  class="FormMotDePasseOublié" action=""method="POST">
                    <div class="nomPrenomMotDePasseOublié">
                        <input class="inputMotDePasseOubliéNom" id="inputMotDePasseOubliéNom" type="text" name="inputMotDePasseOubliéNom" placeholder="Nom">
                        <input class="inputMotDePasseOubliéPrenom" type="text" name="inputMotDePasseOubliéPrenom" placeholder="Prenom">
                    </div>
                  <input class="inputMotDePasseOubliéEmail" type="text" name="inputMotDePasseOubliéEmail" placeholder="Email">
                  <input class="inputMotDePasseOubliéDate" type="date" name="inputMotDePasseOubliéDate">
                </form>
            </div>
        </div>';



    }
?>


        
        
        
        <footer class="containerFooter">
            <div class="footer">
            <p><a href="">Mentions légales</p>
            <p><a href="">Politique de confidentialité</p>
            <p><a href="">CGV</p>
            </div>
        </footer>     
     



    <script src="./script/script.js"></script>
</body>
</html>