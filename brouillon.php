body{
    background-image:url('img/vert2.webp');
    background-repeat:no-repeat;
	background-size:cover;
    font-family: 'Crimson Text', serif;
}
/******************Header**************/
nav a{
    color:white;
    font-family: sans-serif;
    font-size: 25px;
}
/******************Main***************/
main{
    width:100%;
    height:600px;
    margin:0 auto 0 auto;
}
/****************HOME******************/
#home{
	border:1px solid white;
    display:flex;
	flex-direction:row;
    max-width:1200px;
    position: absolute;
    top:100px;
    left:100px;
    border-radius:10px;
    box-shadow:0 5px 10px -2px rgba(0,0,0,0.25);
    margin:100px auto 100px auto;
    background-color:rgba(187, 185, 185,0.5);
    height:400px;
    overflow: hidden;
}
/****RESPONSIVE****
@media screen and (min-width:360px){
    #home{
        width:360px;
        background:green;
    }
    #imgPres{
        display:none;
    }    
}*/

#imgPres{
    display: block;
    max-width: 100%;
    max-height: 100%;  
}

#presentation{
    padding:40px;
    color:grey;
}

.p1, .p2{
    font-size: 50px;
}
/****************ABOUT ME**************/


/***************FOOTER****************/
footer{
    width:100%;
    height:100px;
    margin:0px auto 0px auto;
    padding:50px;
}
#resaux, #copy{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    justify-content: space-around;
    margin-top: 30px;
}

 <!--
    <nav id="haut" class="navbar navbar-expand-lg navbar-dark bg-dark">
   
    <a class="slogan" class="navbar-brand" href="#haut"><span class="ombre">AICHA CHIBANI</span><br>Développeuse <span class="web">Web</span></a>
    
    <button id="rideau" class="navbar-toggler" type="button">
      <span class="leCollapse navbar-toggler-icon"></span>
      <span class="leCollapseFerme">x</span>
    </button>
    <div class="liens" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a id="lienNav1" class="lienNav" class="nav-link" href="#">[ Home ]<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a id="lienNav2" class="lienNav" class="nav-link" href="#realisations"><span class="accolade2">[</span> Réalisations <span class="accolade2">]</span></a>
        </li>
        <li class="nav-item">
          <a id="lienNav3" class="lienNav" class="nav-link" href="#parcours"><span class="accolade3">[</span> Parcours <span class="accolade3">]</span></a>
        </li>
        <li class="nav-item">
          <a class="lienNav lienNav4 contact" class="nav-link" href="#haut"><span class="accolade4">[</span> Contact <span class="accolade4">]</span></a>
        </li>
      </ul>
    </div>
    </nav>-->

<div class="container">
<div class="row">
    <div class="col" id="resaux">
        <div id="facebook"><img src="img/icon-facebook.png" alt="icon"></div>
        <div id="twit"><img src="img/icon-twitter.png" alt="icon"></div>
        <div id="linkin"><img src="img/icon-linkedin.png" alt="icon"></div>
    </div>
    <div class="w-100"></div>
    <div class="col" id="copy">
        <p id="copyRight">&copy; CopyRight tous droits réservés</p>
    </div>
</div>
</div>



<ul class="navbar-nav" class="nav justify-content-end">
<li class="nav-item">
  <a class="nav-link" href="home.php">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="aboutMe.php">Réalisations</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="portfolio.php">Parcours</a>
</li>      
<li class="nav-item">
  <a class="nav-link" href="contact.php">Contact</a>
</li>
<li class="navVide">
</li> 
</ul>


<!------------------------------ HOME ----------------------------->
    <section class="page">
        <div class="coteD">
            <p id="p1">Hello</br>
                <span>I'm Aicha</span>
            </p>
            <p id="p2">WEB DEVELOPER</p>
        </div>
        <div class="coteG">
            <img src="img/imgPres2.png" alt="image de presentation" class="img-thumbnail">
        </div>
    </section>
        <!------------------------ ABOUT  ME --------------------------->
    <section class="page">
        <div class="coteD">       
            <img src="img/imgPres2.jpeg" alt="image" class="img-thumbnail">
        </div>
        <div class="coteG">
            <div id=class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">About me</h5>
                    <p class="card-subtitle mb-2 text-muted">Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <button type="button" class="btn btn-outline-secondary">Télécharger CV</button>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------- PORTFOLIO ------------------------>
    <section id="portfolio" class="page">
        <h1>Portfolio</h1>
        <section id=menuFolio>
            <a href=""> ALL </a><a href=""> ILLUSTARTION </a><a href=""> VIDEO </a>
        </section>
        <section id="imgFolio">
            <div id="img1"><img src="" alt=""></div>
            <div id="img2"><img src="" alt=""></div>
            <div id="img3"><img src="" alt=""></div>
        </section>
    </section>
        <!------------------------------ CONTACT ----------------------------->
    <section id="contact" class="page">
        <h1>Contact</h1>
        <section id="map">
        </section>
        <section id="form">
            <div id="contatInfo">
                <h1>Contact info</h1>
                <p><img src="" alt="" id="icon1">2020, WF3 avenue, Paris</p>
                <p><img src="" alt="" id="icon2">+33 01 45 45 45</p>
                <p><img src="" alt="" id="icon3">mon.email@blabla.com</p>
            </div>
            <form>
                <p>SEND ME YOUR MESSAGE</p>
                <input type="text" name="Name">
                <input type="text" name="Email">
                <input type="text" name="Message">
                <button type="button">SEND</button>
            </form>
        </section>
    </section>