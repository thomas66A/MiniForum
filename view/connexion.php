
<div id="conteneur">    
    <nav>
        <button class="boutonNav carre"><p>SOMMAIRE</p></button>
        <span>
        <button class="boutonNav"><a href="index.php?page=charte">CHARTE</a></button>
        <button class="boutonNav"><a href="index.php?page=sujet">DISCUSSIONS</a></button>
        <button class="boutonNav"><a href="index.php?page=accueil">ACCUEIL</a></button>
        <button class="boutonNav"><a href="index.php?page=inscription">INSCRIPTION</a></button>
        <button class="boutonNav"><a href="index.php?page=recherche">RECHERCHE</a></button>
        </span>
    </nav>
</div>
    <h1 id="titre">Le forum, consacré à la couleur</h1>
<div id="corp" class="sansDeco">
        <h1>Connexion des menbres</h1>
        <form action="fonction/connexion.php" method="post" id="formulaire">
            <label>Email: </label>
            <input type="email" name="email" class="boxIn out" required>
            <label>Mot de passe: </label>
            <input type="password" name="mdp" class="boxIn out" required>
            <input type="submit" value="CONNEXION" class="boxIn In">
            <h2><a href="index.php?page=oublie">Mot de passe oublié?</a><h2>
        </form>
        
</div>
