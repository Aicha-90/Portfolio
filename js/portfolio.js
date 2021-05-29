$(document).ready(function() {


    //Gestion bouton vers le haut;

    $(window).scroll(function () { //Fonction appelée quand on descend la page
        if ($(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
            $('.versLeHaut div').css('right','10px'); // Replace à 10pixels de la droite l'image
        } else { 
            $('.versLeHaut div').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
        }
    });

    //Gestion de nav barre de menu

    $("#lienNav12").hover(
        
        function() {
            $(".accolade1").css("visibility","visible");
            $(this).css("text-shadow","4px 4px 4px gray");
        }, function() {
            $(".accolade1").css("visibility","hidden");
            $(this).css("text-shadow","");
        }
    
    );
    
    $("#lienNav2").hover(
        
        function() {
            $(".accolade2").css("visibility","visible");
            $(this).css("text-shadow","4px 4px 4px rgb(230, 69, 96)");
        }, function() {
            $(".accolade2").css("visibility","hidden");
            $(this).css("text-shadow","");
        }
    
    );

    $("#lienNav3").hover(
        
        function() {
            $(".accolade3").css("visibility","visible");
            $(this).css("text-shadow","4px 4px 4px rgb(62, 192, 62)");
        }, function() {
            $(".accolade3").css("visibility","hidden");
            $(this).css("text-shadow","");
        }
    
    );

    $(".lienNav4").hover(
        
        function() {
            $(".accolade4").css("visibility","visible");
            $(this).css("text-shadow","4px 4px 4px rgb(44, 175, 236)");
        }, function() {
            $(".accolade4").css("visibility","hidden");
            $(this).css("text-shadow","");
        }
    
    );

    //Gestion de "Contact"

    // Quand l'utilisateur click sur "Contact", on ouvre le formulaire

    $('.lienNav4').click(function(){
        $("#pageContact").css("display","block");
    });

    $('.contact').click(function(){
        $("#pageContact").css("display","block");
    });

    // Quand l'utilisateur click sur (x), on ferme la page

    $('#close').click(function(){
        $("#pageContact").css("display","none");
    });    

    // When the user clicks anywhere outside of the modal, close it
    /*window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }*/

    // VALIDATION 
    
    $("#mainForm").validate(
        {
            rules : {
                firstName : {
                  required : true
                },	
                login : {
                  required : true,
                  mail : true
                }
              },
              messages : {
                firstName : "Veuillez fournir un prénom",
                login : "L'email est incorrect"
              }
       
        });

    //Gestion de "Parcours"

    $('#wf3').click(function(){
        $("#annee20").css("display","block");
        $("#annee1319").css("display","none");
        $("#annee0912").css("display","none");
        $("#annee12").css("display","none");

        $("#hatImg").css("display","block");
        $("#cakeImg").css("display","none");
        $("#computerImg").css("display","none");
    });

    $('#vendeuse').click(function(){
        $("#annee1319").css("display","block");
        $("#annee20").css("display","none");
        $("#annee0912").css("display","none");
        $("#annee12").css("display","none");

        $("#hatImg").css("display","none");
        $("#cakeImg").css("display","block");
        $("#computerImg").css("display","none");
    });

    $('#stage').click(function(){
        $("#annee12").css("display","block");
        $("#annee20").css("display","none");
        $("#annee1319").css("display","none");
        $("#annee0912").css("display","none");

        $("#hatImg").css("display","none");
        $("#cakeImg").css("display","none");
        $("#computerImg").css("display","block");
    });

    $('#dut').click(function(){
        $("#annee0912").css("display","block");
        $("#annee20").css("display","none");
        $("#annee1319").css("display","none");
        $("#annee12").css("display","none");

        $("#hatImg").css("display","block");
        $("#cakeImg").css("display","none");
        $("#computerImg").css("display","none");
    });


      //CLICK sur l'annee dans parcours

      $('.annees span').click(function(){ 

        $('.annees span').css("color","rgb(51,66,71)");
        $('.annees span').css("text-shadow","");
        $(this).css("color","rgba(62, 192, 62,0.8)");
        $(this).css("text-shadow","4px 4px 4px rgba(62, 192, 62,0.5)");
       
     });

     //Gestion de navbar collapse

     $("#myCollapse").click(function(){

            $(".leCollapseFerme").toggle();
            $(".leCollapse").toggle();
     });




});