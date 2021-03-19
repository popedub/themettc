/**
 * External Dependencies
 */
import 'jquery';
import ScrollMagic from 'scrollmagic/scrollmagic/uncompressed/ScrollMagic';
import scrollSpy from '@sidsbrmnn/scrollspy';
import Masonry from 'masonry-layout/dist/masonry.pkgd';
import imagesLoaded from 'imagesloaded/imagesloaded.pkgd';
import lightGallery from 'lightgallery/dist/js/lightgallery-all';



$(document).ready(() => {
  // console.log('Hello world');
});
// init controller
var controller = new ScrollMagic.Controller();

var revealElements = document.getElementsByClassName("reveal");
for (var i = 0; i < revealElements.length; i++) { // create a scene for each element
   new ScrollMagic.Scene({
    triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
    offset: 200,												 // start a little later
    triggerHook: 0.9,
    duration: 0,
  })
    .setClassToggle(revealElements[i], "visible") // add class toggle
    .addTo(controller)

}

const options = {
  sectionSelector: '.reveal',  // Query selector to your sections
  targetSelector: '.menu-item a', // Query selector to your elements that will be added `active` class
  offset: 0,                 // Menu item will active before scroll to a matched section 200px
}

//Shorter way
var scro = document.getElementById('menu-menu-2')
if(scro) {
  scrollSpy('#menu-menu-2', options)
}


document.querySelectorAll('.menu-item a').forEach(anchor => {
  anchor.addEventListener('click', function () {
    if (document.querySelector('#menu-menu-2 a.active') !== null) {
    document.querySelector('#menu-menu-2 a.active').classList.remove('active');
    }
      this.classList.add('active');
      // esto para la funcionalidad del menu en phone
    if (document.getElementsByTagName('body')[0].classList.contains('overflow-hidden')){
      document.getElementsByTagName('body')[0].classList.remove('overflow-hidden')
      document.getElementById('hmbrgr').classList.remove('is-active')
      document.getElementById('nav').classList.add('-translate-y-full')
    }
    if (document.querySelector('.menu-social-container a.active') !== null) {
      document.querySelector('.menu-social-container a.active').classList.remove('active');
    }

  });
});

document.getElementById('hmbrgr').addEventListener('click', function(){
  this.classList.toggle('is-active')
  document.getElementsByTagName('body')[0].classList.toggle('overflow-hidden')
  document.getElementsByTagName('header')[0].classList.toggle('z-30')
  document.getElementById('nav').classList.toggle('-translate-y-full')
  document.getElementById('menu-social').classList.toggle('hidden')
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
  // var imgL = imagesLoaded(msry, function () {


  var imgL = imagesLoaded(document.getElementById('msry'))
    imgL.on('progress', function (instance, image) {
    image.img.classList.remove('opacity-0')
      msry = new Masonry('#msry', {
        itemSelector: '.item-g',
        columnWidth: '.grid-sizer',
        percentPosition: true,

      })
    });

  //})
  $('#msry').lightGallery({
    download: false,
    thumbnail: false,
    rotate: false,
    share: false,
    zoom: false,
    autoplay: false,
    autoplayControls: false,
    progressBar: false,
    selector: '.item-g',
  });
}
