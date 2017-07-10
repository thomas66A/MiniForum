<div id="conteneur">    
    <nav>
        <button class="boutonNav carre"><p>SOMMAIRE</p></button>
        <span>
        <button class="boutonNav"><a href="index.php?page=accueil">ACCUEIL</a></button>
        <button class="boutonNav"><a href="index.php?page=charte">CHARTE</a></button>
        <button class="boutonNav"><a href="index.php?page=sujet">DISCUSSIONS</a></button>
        <button class="boutonNav"><a href="index.php?page=inscription">INSCRIPTION</a></button>
        <button class="boutonNav"><a href="index.php?page=recherche">RECHERCHE</a></button>
        </span>
    </nav>
</div>
<h1 id="titre">Le forum, consacré à la couleur</h1>
<div id="corp" class="probleme">
        <h1>Un problème sur le site</h1>
        <h2>Le problème:</h2>
        <p><?php if(isset($_GET['message'])) echo $_GET['message'];?><br>
        <?php if((isset($_GET['showbutton']))&&($_GET['showbutton']==1)) 
        echo "<button class=\"boutonNav carre2\" onclick=\"goBack()\">RETOUR</button></p>";?>
</div>