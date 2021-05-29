<?php require_once "../inc/header2.php";?>

<!------------------------------ eFengShui ----------------------------->
<div class="separation">
    <div class="bloc3"><img src="../img/bandeSeparation.png" alt="bande"/></div>
    <div class="bloc2"></div>
</div>
<div class="presProjet">
    <div class="row">
        <div class="intro description col">
            <h1>eFengShui</h1>
            <p><span class="smTitre">Le Projet</span><br>C'est un projet de groupe que nous avons fait dans le cadre de notre soutenance de fin de formation. C'est un site qui permet à l'utilisateur de saisir les informations sur un lieu et d'obtenir par la suite une expertise fingshui.</p>
            <p><span class="smTitre">Objectif</span><br>Nous avons réalisé le site à partir des maquettes. Chacune de nous était liée à des tâches spécifiques. Mon objectif était d'implémenter la partie gestion administrateur.</p>
            <p><span class="smTitre">Logiciel & Langage</span><br>PHP/Symfony, Visual Studio Code, Xampp, Power Shell. </p>
        </div>
        <div class="image col">
            <div>
                <img src="../img/site1.png" alt="image">
            </div>
        </div>
    </div>
</div>
<!------------------------------ CONTACT ------------------------------------>
<div id="pageContact" class="contactBox">
  <!-- Modal content/Contenue de la page (formulaire de contact) -->
  <div class="formContact">
    <div>
        
            <h1 class="titre">M'envoyer un e-mail</h1> 
            <span id="close">&times;</span>
        
    </div>
    <div>
        <form>
            <div class="form-row">
                <div class="form-group col">
                    <input type="email" placeholder="Adresse email" class="form-control">
                </div>
                <div class="form-group col">
                    <input type="text" placeholder="Nom" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <textarea rows="4" placeholder="Message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-secondary">Envoyer</button>
            </div>
        </form> 
    </div>
  </div>
</div> 
<!---------------------------- FOOTER --------------------------------------->
<div class="separation">
    <div class="bloc3"><img src="../img/bandeSeparation.png" alt="bande"/></div>
    <div class="bloc2"></div>
</div>
<script src="../js/portfolio.js"></script>
<?php require_once "../inc/footer2.php" ; ?>