// -------------------------------------------------------------
//   Set footer visible
// -------------------------------------------------------------
window.setInterval(function(){

  var sctn;
	sctn = location.hash;
	ftr = document.getElementById("footer");

	if (sctn == '#Contacto'){
		ftr.style.visibility = 'visible';
	}else {
		ftr.style.visibility = 'hidden';
	}
}, 500);


// -------------------------------------------------------------
//   Call burger menu
// -------------------------------------------------------------

window.setInterval(function(){

    var x = window.innerWidth;
    var menu = document.getElementById('menu');
    var mnuTgl = document.getElementById('menuToggle');
    var tglBx = document.getElementById('xtoggle');    

    if (x <= 1025 && menu.className == "menu") {
    	mnuTgl.className = 'menuToggle';
		tglBx.style.display = 'block';
        menu.className += "burger";
    }else if (x >= 1025 && menu.className == "menuburger") {
        mnuTgl.className = '';
		tglBx.style.display = 'none';
        menu.className = "menu";
    } 
}, 500);


  // -------------------------------------------------------------
  //   Toogle function test
  // -------------------------------------------------------------

function hide_element(element,speed) {
  $(element).hide(speed);
}

function toggle_element(element,speed) {
  $(element).toogle(speed);
}



  // -------------------------------------------------------------
  //   fullPage
  // -------------------------------------------------------------
  
$(document).ready(function() {
	fullpage.initialize('#fullpage', {
		//Navigation
		menu: '#menu',
		lockAnchors: false,
		anchors:['Inicio', 'Intro', 'MuseoWeb', 'MuseoUnity', 'Precursores','Contacto'],
		navigation: false,
		navigationPosition: 'right',
		navigationTooltips: ['Persistencia_retiniana', 'Estereoscopio_lenticular', 'Zootropo', 'Camara_kodak', 'Teatro_praxinoscopio', 'Praxinoscopio', 'Estereoscopio_de_mano', 'Mutoscopio', 'Linterna', 'Camara_tomavistas'],
		showActiveTooltip: false,
		slidesNavigation: false,
		slidesNavPosition: 'bottom',

		//Scrolling
		css3: true,
		scrollingSpeed: 900,
		autoScrolling: true,
		fitToSection: true,
		fitToSectionDelay: 1000,
		scrollBar: false,
		easing: 'easeInOutCubic',
    	//equivalent to jQuery `easeOutBack` extracted from http://matthewlein.com/ceaser/
   	 	easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)',
		loopBottom: false,
		loopTop: false,
		loopHorizontal: true,
		continuousVertical: false,
		continuousHorizontal: false,
		scrollHorizontally: false,
		interlockedSlides: false,
		dragAndMove: false,
		offsetSections: false,
		resetSliders: false,
		fadingEffect: false,
		normalScrollElements: '#element1, .element2',
		scrollOverflow: true,
		scrollOverflowReset: false,
		scrollOverflowOptions: null,
		touchSensitivity: 15,
		normalScrollElementTouchThreshold: 5,
		bigSectionsDestination: null,

		//Accessibility
		keyboardScrolling: true,
		animateAnchor: true,
		recordHistory: true,

		//Design
		controlArrows: true,
		verticalCentered: true,
		sectionsColor : ['#ccc', '#fff'],
		paddingTop: '3em',
		paddingBottom: '10px',
		fixedElements: 'header, footer',
		responsiveWidth: 900,
		responsiveHeight: 0,
		responsiveSlides: false,
		parallax: true,
		parallaxOptions: {type: 'reveal', percentage: 42, property: 'translate', scrollBar: 'false', autoScrolling:'true' },

		//Custom selectors
		sectionSelector: 'section',
		slideSelector: '',

		lazyLoading: true,

		//events
		onLeave: function(index, nextIndex, direction){},
		afterLoad: function(anchorLink, index){},
		afterRender: function(){},
		afterResize: function(){},
		afterResponsive: function(isResponsive){},
		afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
		onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){
      //second slide of the second section (supposing #secondSlide is the
		  //anchor for the second slide)
      if(index == 2){
        alert("Second section loaded");
      }
    }
  });
  $.fn.fullpage.parallax.init();
});



