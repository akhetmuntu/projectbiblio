<header>
    
<!--    <div class="entete"><h2>ma bibitheque</h2></div>-->
     <div class="navigation">
     <div class="container-fluid">
         <div class="row">
             
        
         </div>
     
     </div>
     
         <div class="container-fluid">
             <div class="row">
                 <div class="col-1 "><img class="logo" src=""></div>    
                 <div class="col-1"><h2><a class="menu home" href="#">Home</a></h2>
                 <div class="home-home">
                                 <ul class="nav-list hom-list ">
                                   <li class="list"><a href="#">Home Types</a></li>
                                   <li class="list"><a href="#">Default</a></li>
                                   <li class="list"><a href="#">Consulting</a></li>
                                   <li class="list"><a href="#">Business</a></li>
                                   
                                 </ul>
                             
                                 
                </div>
                     </div>
                          
                 <div class="col-1">
                         <h2><a class="menu Bibliotheque" href="#" >Bibliotheque</a></h2>
                         <div id="Bibliotheque-list">
                         <ul class="nav-list F-list">   
                             <li class="list"><a href="bibliotheque/khemnu.php">khemnu</a></li>
                             <li class="list"><a href="#">thug-love biblio</a></li>
                             <li class="list"><a href="#">aku</a></li>
                      
                         </ul>
                         </div>
                 </div>     
                 <div class="col-1">
                     <h2><a class="menu pages" href="#">Pages</a></h2>
                     <div id="Pages-list">
                         
                     <ul ul class="nav-list P-list">
                         <li class="list"><a href="#">Pages</a></li>
                         <li class="list"><a href="#">About us</a></li>
                         <li class="list"><a href="#">About us 2</a></li>
                         <li class="list"><a href="#">About me</a></li>
                         
                     </ul>
                     
                    </div>
            </div>    
                 <div class="col-1">
                         <h2><a class="menu Portfolio" href="#">Portfolio</a></h2>
                         <div id="Portfolio-list">
                         <ul class="nav-list Portf-list">
                     
                             <li class="list"><a href="#">Grid layout</a></li>
                             <li class="list"><a href="#">Masonry layout</a></li>
                             <li class="list"><a href="#">Wide layout</a></li>
                             <li class="list"><a href="#">Fullwidth layout</a></li>
                            
                         </ul>
                         </div>
                     
                </div>    
                 <div class="col-1">
                         <h2><a class="menu Blog" href="#">Blog</a></h2>
                         <div id="Blog-list">
                         <ul class="nav-list B-list">
                             <li class="list"><a href="#">Blog classic</a></li>
                             <li class="list"><a href="#">Blog boxed</a></li>
                             <li class="list"><a href="#">Blog thumbnail</a></li>
                             <li class="list"><a href="#">Blog modern</a></li>
                             
                         </ul> 
                         </div>
                     </div>         
                 <div class="col-1">
                         <h2><a class="menu Shop" href="#">Shop</a></h2>
                         <div id="Shop-list">
                         <ul class="nav-list S-list">
                             <li class="list"><a href="#">Grid view</a></li>
                             <li class="list"><a href="#">List view</a></li>
                             <li class="list"><a href="#">Single product</a></li>
                             <li class="list"><a href="#">Cart</a></li>
                         </ul>
                         </div>
                     
                     </div>       
                 <div class="col-1">
                         <h2><a class="menu components" href="#">components</a></h2>
                         <div id="components-list">
                         <ul class="nav-list c-list">
                             <li class="list"><a href="#">Components</a></li>
                             <li class="list"><a href="#">Typography</a></li>
                             <li class="list"><a href="#">Buttons</a></li>
                             <li class="list"><a href="#">Counters</a></li>
                            
                         </ul>
                             
                         
                         </div>
                     
                 </div>
              
                 <div class="col-1 "></div>
                 <div class="col-3 ">
                     <input type="text" class="zone_de_recherche" id="search_livre">
                     <button type="button" class="btn btn-outline-secondary">rechercher</button>
                 </div>
                
                     
              </div>
             <script>      
                $( document ).ready(function() {
	                $("#search_livre").autocomplete({
			                source: "livre/livreapi.php",
			                select: function( event, ui ) {
					                event.preventDefault();
					                $("#search_livre").val(ui.item.value);
			                }

	                });
                });
            </script>
         </div>
         </div>
    </header>

