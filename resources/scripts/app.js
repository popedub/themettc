/**
 * External Dependencies
 */
import 'jquery';
import ScrollMagic from 'scrollmagic/scrollmagic/uncompressed/ScrollMagic';
import scrollSpy from '@sidsbrmnn/scrollspy';
import Masonry from 'masonry-layout/dist/masonry.pkgd';
import imagesLoaded from 'imagesloaded/imagesloaded.pkgd';

$(document).ready(() => {
  // console.log('Hello world');
});
// init controller
var controller = new ScrollMagic.Controller();

var revealElements = document.getElementsByClassName("reveal");
for (var i = 0; i < revealElements.length; i++) { // create a scene for each element
  new ScrollMagic.Scene({
    triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
    offset: 50,												 // start a little later
    triggerHook: 0.9,
  })
    .setClassToggle(revealElements[i], "visible") // add class toggle
    .reverse(false) //no quita la clase
    .addTo(controller);
}

const options = {
  sectionSelector: 'section',  // Query selector to your sections
  targetSelector: '.menu-item a', // Query selector to your elements that will be added `active` class
  offset: 300,                 // Menu item will active before scroll to a matched section 200px
}

// Shorter way
scrollSpy('#menu-menu-2', options)

document.querySelectorAll('.menu-item a').forEach(anchor => {
  anchor.addEventListener('click', function () {
    // if (document.querySelector('#menu-menu-1 a.active') !== null) {
    // document.querySelector('#menu-menu-1 a.active').classList.remove('active');
    // }
      //this.classList.add('active');
      //esto para la funcionalidad del menu en phone
    if (document.getElementsByTagName('body')[0].classList.contains('overflow-hidden')){
      document.getElementsByTagName('body')[0].classList.remove('overflow-hidden')
      document.getElementById('hmbrgr').classList.remove('is-active')
      document.getElementById('nav').classList.add('-translate-y-full')
    }

  });
});

document.getElementById('hmbrgr').addEventListener('click', function(){
  this.classList.toggle('is-active')
  document.getElementsByTagName('body')[0].classList.toggle('overflow-hidden')
  document.getElementsByTagName('header')[0].classList.toggle('z-30')
  document.getElementById('nav').classList.toggle('-translate-y-full')
});


function over () {
  if (window.screen.width < 768) {
    document.getElementById('phone-overflow').classList.add('overflow-x-hidden')
  }
  if (window.screen.width > 768) {
    document.getElementById('phone-overflow').classList.remove('overflow-x-hidden')
  }
}

over()

window.addEventListener('resize', function () {
  over()
}, true);

//pagina Dreams
var msry = document.getElementById('msry');
if(msry) {
  imagesLoaded(msry, function() {
    msry = new Masonry( '#msry', {
      itemSelector: '.item-g',
      columnWidth: '.grid-sizer',
      percentPosition: true,

    })
  })
}
