$(document).ready(function(){
    
    var $carrousel = $('#carrousel'), // on cible le bloc du carrousel
        $img = $('#carrousel span'), // on cible les images contenues dans le carrousel
        $btns=$('.roundBtn'),//on cible les buttons ronds en dessous des slides
        indexImg = $img.length - 1, // on définit l'index du dernier élément
        i = 0, // on initialise un compteur
        $currentImg = $img.eq(i); // enfin, on cible l'image courante, qui possède l'index i (0 pour l'instant)
        $currentBtn = $btns.eq(i);//on cible le button courant
    
    $img.css('display', 'none'); // on cache les images
    $btns.removeClass('active');//on supprime au préalable la classe active du button
    $currentImg.css('display', 'block'); // on affiche seulement l'image courante
    $currentBtn.addClass('active');//on affiche seulement le button sourant en ajoutant la classe "active"
    
    // image SUIVANTE

    $('.next').click(function(){ 
    
        i++; // on incrémente le compteur
    
        if( i <= indexImg ){
            $img.css('display', 'none'); // on cache les images
            $btns.removeClass('active');//on supprime au préalable la class "active"
            
            $currentImg = $img.eq(i); // on définit la nouvelle image
            $currentBtn = $btns.eq(i);//on définit le nouveau button
            
            $currentImg.css('display', 'block'); // puis on l'affiche
            $currentBtn.addClass('active');//on affiche en ajoutant la class "active"
        }
        else{
            i = indexImg;
        }
    
    });

    // image PRECEDENT
    
    $('.prev').click(function(){ 
    
        i--; // on décrémente le compteur, puis on réalise la même chose que pour la fonction "suivante"
    
        if( i >= 0 ){
            $img.css('display', 'none');
            $btns.removeClass('active');
            
            $currentImg = $img.eq(i);
            $currentBtn = $btns.eq(i);
            
            $currentImg.css('display', 'block');
            $currentBtn.addClass('active');
        }
        else{
            i = 0;
        }
    
    });

    //CLICK sur le bouton rond

    $('.roundBtn').click(function(){ 

       //je récupère la postion du button clické grace à son id (0,1 ou 2)
        $position=$(this).attr("id");
       
        $img.css('display', 'none');
        $btns.removeClass('active');
        
        $currentImg = $img.eq($position);
        $currentBtn = $btns.eq($position);
        
        $currentImg.css('display', 'block');
        $currentBtn.addClass('active');
      
    
    });


    //Gestion des slides qui défilent automatiquement
    
    function slideImg(){
        setTimeout(function(){ // on utilise une fonction anonyme
                            
            if(i < indexImg){ // si le compteur est inférieur au dernier index
            i++; // on l'incrémente
        }
        else{ // sinon, on le remet à 0 (première image)
            i = 0;
        }
    
        $img.css('display', 'none');
    
        $currentImg = $img.eq(i);
        $currentImg.css('display', 'block');
    
        slideImg(); // on oublie pas de relancer la fonction à la fin
    
        }, 2500); // on définit l'intervalle à 7000 millisecondes (7s)
    }
    
    //slideImg(); // enfin, on lance la fonction une première fois

    //Gestion des slides quand on passe la souris

    $(".projet1").hover(function(){
        $("#imgA").hide();
    },function(){
        $("#imgA").show();
    })

    $(".projet2").hover(function(){
        $("#imgC").hide();
    },function(){
        $("#imgC").show();
    })

    $(".projet3").hover(function(){
        $("#imgE").hide();
    },function(){
        $("#imgE").show();
    })

});
    