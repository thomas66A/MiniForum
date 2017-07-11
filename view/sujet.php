
<div id="conteneur">    
    <nav>
        <button class="boutonNav carre"><p>SOMMAIRE</p></button>
        <span>
        <button class="boutonNav"><a href="index.php?page=charte">CHARTE</a></button>
        <button class="boutonNav"><a href="index.php?page=accueil">ACCUEIL</a></button>
        <button class="boutonNav"><a href="index.php?page=connexion">CONNEXION</a></button>
        <button class="boutonNav"><a href="index.php?page=inscription">INSCRIPTION</a></button>
        <button class="boutonNav"><a href="index.php?page=recherche">RECHERCHE</a></button>
        </span>
    </nav>
</div>
    <h1 id="titre">Le forum, consacré à la couleur</h1>
<div id="corp">
        <h1>DISCUSSIONS</h1>
        <?php include('model/creerAffichageSujet.php'); echo $affiche;?>
        </p>
</div>
<div class="lesPosts">
    <div class="postGauche">
        
    </div> 
        
    <div class="postDroit">
        <?php if(isset($showSujet)) echo "<h3>".$titreAffiche{$showSujet}."</h3><a href=\"index.php?page=creerpost\">   Creer un nouveau post</a><br><hr>";if(isset($affiche1)) echo $affiche1; ?>
    </div>       
</div>
