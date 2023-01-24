/**
 * File script.js.
 *
 * Signa Custom JavaScript
 */

/**
 * Navigation
 */
( function() {
	var container, button, menu, links, subMenus, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );
	subMenus = menu.getElementsByTagName( 'ul' );

	// Set menu items with submenus to aria-haspopup="true".
	for ( i = 0, len = subMenus.length; i < len; i++ ) {
		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
	}

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
} )();

/**
 * Testimonials
 */
var slideIndex = 0;

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}

if(document.querySelector(".slideshow-container")) {
  showSlides();
  console.log('Original Testimonial Slider Function Triggered')
}


/**
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
/* Add this to button > "onclick="openTab(event, 'tabs-1')"". Add id to content. Ex: id="tabs-1" */
var openTab, openMenu, closeMenu, openSecondMenu, modalClass, secondMenuClasses, allClasses, modal, modalButton, secondMenu, secondMenuBtn, classFour, classThree, classTwo, classOne;
(function () {
  var _$9 = this;

  var _Z = function (evt, tabs) {
    var i, tabcontent, tabButton;
    tabcontent = document.getElementsByClassName("tabContent");

    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    tabButton = document.getElementsByClassName("tab-button-style");

    for (i = 0; i < tabButton.length; i++) {
      tabButton[i].className = tabButton[i].className.replace(" current", "");
    }

    document.getElementById(tabs).style.display = "block";
    evt.currentTarget.className += " current";
  };

  var _a = function () {
    allClasses.forEach(function (el) {
      el.classList.add("open");
    });
  };

  var _b = function () {
    allClasses.forEach(function (el) {
      el.classList.remove("open");
    });
  };

  var _c = function () {
    secondMenuClasses.forEach(function (el) {
      el.classList.toggle("open");
    });
  };

  _$9.openTab = _Z;
  _$9.openMenu = _a;
  _$9.closeMenu = _b;
  _$9.openSecondMenu = _c;
  var _4 = document;

  var _$1 = _4.querySelector("#header");
  _$9.classOne = _$1;

  var _$2 = _4.querySelector("#open-menu-btn");
  _$9.classTwo = _$2;

  var _$3 = _4.querySelector("#close-menu-btn");
  _$9.classThree = _$3;

  var _$4 = _4.querySelector("#primary-menu");
	_$9.classFour = _$4;
	
  var _$5 = _4.querySelector("#open-secondary-menu-btn");
	_$9.secondMenuBtn = _$5;
	
  var _$6 = _4.querySelector("#services-menu");
	_$9.secondMenu = _$6;
	
  var _$7 = _4.querySelector("#lightbox-button");
	_$9.modalButton = _$7;
	
  var _$8 = _4.querySelector("#lightbox-form");
	_$9.modal = _$8;
	
  _$9.allClasses = [_$1, _$2, _$3, _$4];
  _$9.secondMenuClasses = [_$5, _$6];
  _$9.modalClass = [_$8];
}).call(this);

function openModal() {
	document.getElementById("lightbox-form").classList.remove("lightbox-noshow");
}

function closeModal() {
	document.getElementById("lightbox-form").classList.add("lightbox-noshow");
}

/* Scroll Function */
window.addEventListener('scroll', function () {
document.body.classList[
  document.documentElement.scrollTop > 125 ? 'add': 'remove'
]('scrolled');
});

/**
 * Calculate Reading Time to element with ".reading-time"
 * where content is surrounded by ".blog-entry-content"
 * 
 * Requires Countable.js 
 * https://github.com/RadLikeWhoa/Countable
 */
var blogContent = document.querySelector('.blog-entry-content');
if(blogContent) {
  Countable.on(blogContent, readTime);

  function readTime(counter) {
    var wpm = 200,
      estimatedRaw = counter.words / wpm,
      minutes = Math.round(estimatedRaw);
    
    var effectiveTime = (minutes < 1) ? "a couple of seconds" : minutes + " minute read";

    //console.log(effectiveTime);
    document.querySelector('.reading-time').append(effectiveTime);
  }
}

/**
 * Progress bar when scrolling down blog single page
 */
if(document.querySelector(".progress-container")) {
  window.onscroll = function() {blogScroll()};
}

function blogScroll() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;

  document.querySelector(".progress-bar").style.width = scrolled + "%";
}

/**
 * JS Anchor link smooth scroll
 */
function anchorLinkHandler(e) {
  const distanceToTop = el => Math.floor(el.getBoundingClientRect().top);

  e.preventDefault();
  const targetID = this.getAttribute("href");
  const targetAnchor = document.querySelector(targetID);
  if (!targetAnchor) return;
  const originalTop = distanceToTop(targetAnchor);

  window.scrollBy({ top: originalTop, left: 0, behavior: "smooth" });

  const checkIfDone = setInterval(function() {
    const atBottom = window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 2;
    if (distanceToTop(targetAnchor) === 0 || atBottom) {
      targetAnchor.tabIndex = "-1";
      targetAnchor.focus();
      window.history.pushState("", "", targetID);
      clearInterval(checkIfDone);
    }
  }, 100);
}
const linksToAnchors = document.querySelectorAll('a[href^="#"]');
linksToAnchors.forEach(each => (each.onclick = anchorLinkHandler));

/**
 * social share fixed scroll
 */
window.addEventListener('scroll', function () {

  var socialShare = document.getElementById("socialShare");

  if(socialShare) {

    socialShare.classList[
      document.documentElement.scrollTop > 545 ? 'add': 'remove'
    ]('fixed-social-share');


    // get scroll position of previous/next posts 
    var prevposts = document.querySelector(".previous-next-posts").getBoundingClientRect(),
        endScrollPos = prevposts.top,
        offsetScrollPos = document.querySelector(".previous-next-posts").offsetTop; 

    console.log(endScrollPos);
    console.log(offsetScrollPos);


    if(endScrollPos < 200) {
      socialShare.classList.add('fixed-social-share-bottom');
      socialShare.style.top = offsetScrollPos - 920 + 'px';

    } else {
      socialShare.style.top = '200px';
      socialShare.classList.remove('fixed-social-share-bottom');
    }

  }
  
});

/**
 * Equal Height
 */
function equalHeight() {
  var myDiv = document.getElementsByClassName("equal-height");

  for(var i = 0; i < myDiv.length; i++) {

    var getDivInfo = myDiv[i].getBoundingClientRect();
    var getDivWidth = getDivInfo.width;

    myDiv[i].style.height = getDivWidth + "px";

  }
}
equalHeight();
window.onresize = equalHeight;

// Init animations 
AOS.init();


/**
 * Show Search Mobile
 */

function showSearchMobile() {
  var searchForm = document.getElementById("mobileBlogSearchForm");
  var catsList = document.getElementById("mobileTabsItems");

  searchForm.classList.toggle("show-form");
  catsList.classList.remove("show-cats-list");
}

/**
 * Show Blog Categories Mobile
 */

function showCatsMobile() {
  var catsList = document.getElementById("mobileTabsItems");
  var searchForm = document.getElementById("mobileBlogSearchForm");

  catsList.classList.toggle("show-cats-list");
  searchForm.classList.remove("show-form");
}

var resumeUpload = document.getElementById("gform_browse_button_19_5");
function changeResumeInputText() { 
  resumeUpload.value = "Attach Resume";
}
if (resumeUpload != null) {
  changeResumeInputText();
  window.onload = changeResumeInputText;
}