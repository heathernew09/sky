window.onload = function() {
 
};

$(function () { // Document ready
"use strict";
  $(document).foundation();
  // Mobile Nav - Dropdown
  $(".hamburger").click(function() {
	  $(".mobileNav").slideToggle();
	  $(".hamburger").toggleClass("is-active");
  });
  $("#hambBut").click(function() {
	  $(".mobileNav").slideToggle();
	  $("#hambBut").toggleClass("is-active");
  });
});
/*this script prevents animations until the page is loaded*/
document.body.classList.add('js-loading');

window.addEventListener("load", showPage);
/*this script calculates where we are on screen and adds inview class - https://codepen.io/SitePoint/pen/MwEaQM*/
function showPage() {
	"use strict";
  document.body.classList.remove('js-loading');
}

var $animation_elements = $('.move-me');
var $window = $(window);

function check_if_in_view() {
	"use strict";
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      //$element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');

$(function () { // Document ready
const elPrevButton = document.querySelector('#prev');
const elNextButton = document.querySelector('#next');
const flipping = new Flipping();

const elImages = Array.from(document.querySelectorAll('.ui-big-image'));
const elThumbnails = Array.from(document.querySelectorAll('.ui-thumbnail'));

let state = {
  photo: 0
};

function send(event) {
  // read cuticle positions
  flipping.read();
  
  const elActives = document.querySelectorAll('[data-active]');
  
  Array.from(elActives)
    .forEach(el => el.removeAttribute('data-active'));

  switch (event) {
    case 'PREV':
      state.photo--;
      // Math.max(state.photo - 1, 0);
      break;
    case 'NEXT':
      state.photo++;
      // Math.min(state.photo + 1, elImages.length - 1);
      break;
    default:
      state.photo = +event;
      break;
  }
  
  var len = elImages.length;
  // Loop Around
  //state.photo = ( ( state.photo % len) + len ) % len;
  state.photo = Math.max(0, Math.min( state.photo, len - 1) );

  Array.from(document.querySelectorAll(`[data-key="${state.photo}"]`))
    .forEach( el => {
    el.setAttribute('data-active', true);
  });
  
  // execute the FLIP animation
  flipping.flip();
}

elThumbnails.forEach( thumb => { 
  thumb.addEventListener('click', () => {
    send(thumb.dataset.key);
  });
});

elPrevButton.addEventListener('click', () => {
  send('PREV');
});

elNextButton.addEventListener('click', () => {
  send('NEXT');
});

send(0);
});