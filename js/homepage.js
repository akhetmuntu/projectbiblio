

$(document).ready( function() {
    
    var home = $('.home');
    var homelist = $('#home-list');
    var Bibliotheque = $('.Bibliotheque');
    var Bibliothequelist = $('#Bibliotheque-list');
    var pages = $('.pages');
    var Pageslist = $('#Pages-list');
    var Portfolio = $('.Portfolio');
    var Portfoliolist = $('#Portfolio-list');
    var Blog = $('.Blog');
    var Bloglist = $('#Blog-list');
    var Shop = $('.Shop');
    var Shoplist = $('#Shop-list');
    var components = $('.components');
    var componentslist = $('#components-list');
    var evasion = $('.suiv');
    
//-----------------------------------
    $('.nav-list').hide();
 //-------------home--------------   
    $('.home').on('mouseenter',function(){
        $('.hom-list').show(); 
    });
    $('.hom-list').on('mouseleave',function(){
        $('.hom-list').hide();
    });
//------------Bibliotheque---------   
    
    
    
    $('.Bibliotheque').mouseenter(function(){
        $('.F-list').show(); 
    });
    $('.F-list').mouseleave(function(){
        $('.F-list').hide();
    });
    
    
    
    $('.pages').mouseenter(function(){
        $('.P-list').show(); 
    });
    $('.P-list').mouseleave(function(){
        $('.P-list').hide();
    });
    $('.Portfolio').mouseenter(function(){
        $('.Portf-list').show();
    });
    $('.Portf-list').mouseleave(function(){
        $('.Portf-list').hide();
    });
    $('.Blog').mouseenter(function(){
        $('.B-list').show(); 
    });
    $('.B-list').mouseleave(function(){
        $('.B-list').hide();
    });
    $('.Shop').mouseenter(function(){
        $('.S-list').show(); 
    });
    $('.S-list').mouseleave(function(){
        $('.S-list').hide();
    });
    $('.components').mouseenter(function(){
        $('.c-list').show(); 
    });
    $('.c-list').mouseleave(function(){
        $('.c-list').hide();
    });
    
    
    //---button----via-------content.php---------------
    
    $('#livrein').click(function(){
        $('.meslivres').slideUp(2000);
    });
    $('#livreout').click(function(){
        $('.meslivres').slideDown(2000);
    });
    
    //-------------evasion-------------
    
    $('.suiv').css('color','red'); 
    
    
/*
    
    
    Features.mouseover(function(){
		Featureslist.css('display','block');
	});
    Features.mouseout(function(){
        Featureslist.css('display','none');
    });
    
    pages.mouseover(function(){
		Pageslist.css('display','block');
	});
    pages.mouseout(function(){
        Pageslist.css('display','none');
    });
    
    Portfolio.mouseover(function(){
		Portfoliolist.css('display','block');
	});
    Portfolio.mouseout(function(){
        Portfoliolist.css('display','none');
    });
    Blog.mouseover(function(){
		Bloglist.css('display','block');
	});
    Blog.mouseout(function(){
        Bloglist.css('display','none');
    });
    Shop.mouseover(function(){
		Shoplist.css('display','block');
	});
    Shop.mouseout(function(){
        Shoplist.css('display','none');
    });
    components.mouseover(function(){
		componentslist.css('display','block');
	});
    components.mouseout(function(){
        componentslist.css('display','none');
    });
    
   /*
    var coros = $('.coros'), 
                    $img = $('.coros img'), // on cible les images contenues dans le carrousel
                    indexImg = $img.length - 1, // on définit l'index du dernier élément
                    i = 0, // on initialise un compteur
                    $currentImg = $img.eq(i); // enfin, on cible l'image courante, qui possède l'index i (0 pour l'instant)
               $img.css('display','none');
               $currentImg.css('display','block');
    
    
   

    
    
    
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

    }, 500); // on définit l'intervalle à 7000 millisecondes (7s)
}

slideImg(); // enfin, on lance la fonction une première fois
   

 */
   
    
});

