<div id="conteneur">    
    <nav>
        <button class="boutonNav carre"><p>SOMMAIRE</p></button>
        <span>
        <button class="boutonNav"><a href="index.php?page=charte">CHARTE</a></button>
        <button class="boutonNav"><a href="index.php?page=sujet">DISCUSSIONS</a></button>
        <button class="boutonNav"><a href="index.php?page=connexion">CONNEXION</a></button>
        <button class="boutonNav"><a href="index.php?page=accueil">ACCUEIL</a></button>
        <button class="boutonNav"><a href="index.php?page=recherche">RECHERCHE</a></button>
        </span>
    </nav>
</div>
<h1 id="titre">Le forum, consacré à la couleur</h1>
<div id="corp" class="sansDeco">
    <h1>Les Posts</h1>
</div>

<div class="lesPosts">
    <div class="postGauche">
        
    </div> 
        
    <div class="postDroit">
        <p><?php include('model/voirpost.php');echo $affiche;?></p>
    </div>       
</div>
<div id="repondre">
    <form action="../model/repondre.php">
        <text
    </form>
</div>

