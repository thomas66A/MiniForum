
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
        <?php include('service/creerAffichageSujet.php'); echo $affiche;?>
        </p>
</div>
<div class="lesPosts">
    <div class="postGauche">
        
    </div> 
        
    <div class="postDroit">
        <?php if(isset($showSujet)) echo "<h3>".$titreAffiche{$showSujet}."</h3><button class=\"carre2\" id=\"repond\">Creer une nouvelle discussion.</button><br><hr>";if(isset($affiche1)) echo $affiche1; ?>
    </div>       
</div>
<div id="repondre">
<button id="stop">X</button>
    <form action="service/creerDiscussion.php" method="post">
    <label>Titre de votre nouvelle discussion:</label><br><input type="text" name="titre" class="boxIn">
        <textarea name="reponse">
        </textarea>
        <input type="hidden" name="categorie" value="<?php echo $showSujet;?>">
        <input type="submit">
    </form>
</div>