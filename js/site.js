/*home.addEventListener('hover',function(){
                     
    if(getComputedStyle(homec).display != "none"){
        homec.style.display = "none";

    }
    else{
        homec.style.display = "block";
    }
});
    /*function home(){

        if(getComputedStyle(t2).display != "none"){
            t2.style.display = "none";

        }else{
            t2.style.display = "block";
        }

    };
    togg2.onclick = togg; */

    var home = $('.dropdown');
    var homecontainer = $('.homecontainer');
    var e1 = $('#element1');
    var e2 = $('#element2');
    var homec = $('.homecontainer');
    var $carrousel = $('#carrousel'),                                          // on cible le bloc du carrousel

$img = $('#carrousel img'),                                               // on cible les images contenues dans le carrousel

indexImg = $img.length - 1,                                              // on définit l'index du dernier élément

i = 0,                                                                  // on initialise un compteur

$currentImg = $img.eq(i);                                              // enfin, on cible l'image courante, qui possède l'index i (0 pour l'instant)

$img.css('display', 'none'); // on cache les images
$currentImg.css('display', 'block'); // on affiche seulement l'image courante
    
    
$carrousel.append('<div class="controls"> <span class="prev"></span> <span class="next"></span> </div>');


$('.next').click(function(){ // image suivante

    i++; // on incrémente le compteur
    $img.css('display', 'none'); // on cache les images
    $currentImg = $img.eq(i); // on définit la nouvelle image
    $currentImg.css('display', 'block'); // puis on l'affiche

});

$('.prev').click(function(){ // image précédente

    i--; // on décrémente le compteur, puis on réalise la même chose que pour la fonction "suivante"
    $img.css('display', 'none');
    $currentImg = $img.eq(i);
    $currentImg.css('display', 'block');

});



$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  });

  window.FontAwesomeKitConfig = {"asyncLoading":{"enabled":true},"autoA11y":{"enabled":true},"baseUrl":"https://kit-free.fontawesome.com","license":"free","method":"css","minify":{"enabled":true},"v4shim":{"enabled":false},"version":"latest"};
  !function(){!function(){if(!(void 0===window.Element||"classList"in document.documentElement)){var e,t,n,i=Array.prototype,o=i.push,a=i.splice,s=i.join;r.prototype={add:function(e){this.contains(e)||(o.call(this,e),this.el.className=this.toString())},contains:function(e){return-1!=this.el.className.indexOf(e)},item:function(e){return this[e]||null},remove:function(e){if(this.contains(e)){for(var t=0;t<this.length&&this[t]!=e;t++);a.call(this,t,1),this.el.className=this.toString()}},toString:function(){return s.call(this," ")},toggle:function(e){return this.contains(e)?this.remove(e):this.add(e),this.contains(e)}},window.DOMTokenList=r,e=Element.prototype,t="classList",n=function(){return new r(this)},Object.defineProperty?Object.defineProperty(e,t,{get:n}):e.__defineGetter__(t,n)}function r(e){for(var t=(this.el=e).className.replace(/^\s+|\s+$/g,"").split(/\s+/),n=0;n<t.length;n++)o.call(this,t[n])}}();function f(e){var t,n,i,o;prefixesArray=e||["fa"],prefixesSelectorString="."+Array.prototype.join.call(e,",."),t=document.querySelectorAll(prefixesSelectorString),Array.prototype.forEach.call(t,function(e){n=e.getAttribute("title"),e.setAttribute("aria-hidden","true"),i=!e.nextElementSibling||!e.nextElementSibling.classList.contains("sr-only"),n&&i&&((o=document.createElement("span")).innerHTML=n,o.classList.add("sr-only"),e.parentNode.insertBefore(o,e.nextSibling))})}var e,t,u=function(e){var t=document.createElement("link");t.href=e,t.media="all",t.rel="stylesheet",document.getElementsByTagName("head")[0].appendChild(t)},m=function(e){!function(e,t,n){var i,o=window.document,a=o.createElement("link");if(t)i=t;else{var s=(o.body||o.getElementsByTagName("head")[0]).childNodes;i=s[s.length-1]}var r=o.styleSheets;a.rel="stylesheet",a.href=e,a.media="only x",function e(t){if(o.body)return t();setTimeout(function(){e(t)})}(function(){i.parentNode.insertBefore(a,t?i:i.nextSibling)});var l=function(e){for(var t=a.href,n=r.length;n--;)if(r[n].href===t)return e();setTimeout(function(){l(e)})};function c(){a.addEventListener&&a.removeEventListener("load",c),a.media=n||"all"}a.addEventListener&&a.addEventListener("load",c),(a.onloadcssdefined=l)(c)}(e)},n=function(e,t){var n=t&&void 0!==t.autoFetchSvg?t.autoFetchSvg:void 0,i=t&&void 0!==t.async?t.async:void 0,o=t&&void 0!==t.autoA11y?t.autoA11y:void 0,a=document.createElement("script"),s=document.scripts[0];a.src=e,void 0!==o&&a.setAttribute("data-auto-a11y",o?"true":"false"),n&&(a.setAttributeNode(document.createAttribute("data-auto-fetch-svg")),a.setAttribute("data-fetch-svg-from",t.fetchSvgFrom)),i&&a.setAttributeNode(document.createAttribute("defer")),s.parentNode.appendChild(a)};function h(e,t){var n=t&&t.shim?e.license+"-v4-shims":e.license,i=t&&t.minify?".min":"";return e.baseUrl+"/releases/"+("latest"===e.version?"latest":"v".concat(e.version))+"/"+e.method+"/"+n+i+"."+e.method}try{if(window.FontAwesomeKitConfig){var i=window.FontAwesomeKitConfig;"js"===i.method&&(t={async:(e=i).asyncLoading.enabled,autoA11y:e.autoA11y.enabled},"pro"===e.license&&(t.autoFetchSvg=!0,t.fetchSvgFrom=e.baseUrl+"/releases/"+("latest"===e.version?"latest":"v".concat(e.version))+"/svgs"),e.v4shim.enabled&&n(h(e,{shim:!0,minify:e.minify.enabled})),n(h(e,{minify:e.minify.enabled}),t)),"css"===i.method&&function(e){var t,n,i,o,a,s,r,l,c=f.bind(f,["fa","fab","fas","far","fal"]);e.autoA11y.enabled&&(n=c,o=[],a=document,s=a.documentElement.doScroll,r="DOMContentLoaded",(l=(s?/^loaded|^c/:/^loaded|^i|^c/).test(a.readyState))||a.addEventListener(r,i=function(){for(a.removeEventListener(r,i),l=1;i=o.shift();)i()}),l?setTimeout(n,0):o.push(n),t=c,"undefined"!=typeof MutationObserver&&new MutationObserver(t).observe(document,{childList:!0,subtree:!0})),e.v4shim.enabled&&(e.asyncLoading.enabled?m(h(e,{shim:!0,minify:e.minify.enabled})):u(h(e,{shim:!0,minify:e.minify.enabled})));var d=h(e,{minify:e.minify.enabled});e.asyncLoading.enabled?m(d):u(d)}(i)}}catch(e){}}();






    mbbarre =$('.mbborder');
    navlink =$('.nav-link');
    //mbbord = $('.mbborder2');
    //hometype = $('.hometypes');

    navlink.mouseover(function anim(){
        $(this).find('.mbborder').animate({
          width:'20px',
          height:'4px',
          border:'rgb(140, 240, 140)',
          display:'block',
        });
    });
    navlink.mouseleave(function(){
      $(this).find('.mbborder').animate({
        width:'0px',
        height:'0px',
        border:'0px',
      });
    });

   /* hometype.mouseover(function anim(){
        $(this).find('.mbborder2').animate({
          width:'20px',
          height:'4px',
          border:'rgb(140, 240, 140)',
          display:'block',
        });
    });
     /*hometype.mouseleave(function(){
      $(this).find('.mbborder2').animate({
        width:'0px',
        height:'0px',
        border:'0px',
      });
    }); */


  var owl = $('.owl-carousel');
  
  owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout: 1600,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
});







/* ANIMATION COMPTEUR */

$({ Counter: 0 }).animate({
  Counter: $('.Single').text()
}, {
  duration: 1000,
  easing: 'swing',
  step: function() {
    $('.Single').text(Math.ceil(this.Counter));
  }
});

$({ Counter: 0 }).animate({
  Counter: $('.quatre').text()
}, {
  duration: 1000,
  easing: 'swing',
  step: function() {
    $('.quatre').text(Math.ceil(this.Counter));
  }
});
$({ Counter: 0 }).animate({
  Counter: $('.neufneuf').text()
}, {
  duration: 1000,
  easing: 'swing',
  step: function() {
    $('.neufneuf').text(Math.ceil(this.Counter));
  }
});
$({ Counter: 0 }).animate({
  Counter: $('.huit').text()
}, {
  duration: 1000,
  easing: 'swing',
  step: function() {
    $('.huit').text(Math.ceil(this.Counter));
  }
});
$({ Counter: 0 }).animate({
  Counter: $('.trente').text()
}, {
  duration: 1000,
  easing: 'swing',
  step: function() {
    $('.trente').text(Math.ceil(this.Counter));
  }
});


/* -------- NAV TAB --------- */

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

