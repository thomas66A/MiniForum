
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
        <h1>Inscription: création de compte</h1>
        <form action="service/inscription.php" method="post" id="formulaire">
           
            <label>Nom: </label>
            <input type="text" name="nom" class="boxIn out" required>
            <label>Prenom: </label>
            <input type="text" name="prenom" class="boxIn out" required>
            
            <label>Email: </label>
            <input type="text" name="email" class="boxIn out" required>
            <label>Telephone: </label>
            <input type="telephone" name="telephone" class="boxIn out" required>
            
            <input type="submit" value="INSCRIPTION" class="boxIn In">
        </form>
</div>
