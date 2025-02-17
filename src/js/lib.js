import Swiper from 'swiper';
import {Autoplay, EffectFade, Navigation, Pagination, Thumbs} from 'swiper/modules';
Swiper.use({ Autoplay, EffectFade, Navigation, Pagination, Thumbs});

const homeslider = new Swiper('.homeslider__content', {
  modules: [Navigation, Autoplay, EffectFade],
  loop: true,
  autoplay: true,
  speed: 2000,
  autoplayDisableOnInteraction:true,
  pagination: false,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
   },
     // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
 });

 const catalogthome = new Swiper('.homecatalog__content', {
  modules: [Navigation, Autoplay, EffectFade],
  speed: 400,
  autoplay: true,
  autoHeight: true,
  initialSlide: 0,
  //truewrapper adoptsheight of active slide

  // Optional parameters
  direction: 'horizontal',
  loop: true,
  // delay between transitions in ms
  autoplay: true,
  pagination: false,

  effect: 'slide',
  // Distance between slides in px.
  spaceBetween: 25,
  //
  slidesPerView: 'auto',
  //
  centeredSlides: false,
  //
  slidesOffsetBefore: 0,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //
  breakpoints: {
     320: {
        slidesPerView: 1,
     },
     480: {
        slidesPerView: 1,
     },
     590: {
        slidesPerView: 2,
     },
     1100: {
        slidesPerView: 3,
     },
     1300: {
      slidesPerView: 4,
   },
  }
});

const projekthome = new Swiper('.homeprojekt__content', {
  modules: [Navigation, Autoplay, EffectFade],
  speed: 400,
  autoplay: true,
  autoHeight: true,
  initialSlide: 0,
  //truewrapper adoptsheight of active slide

  // Optional parameters
  direction: 'horizontal',
  loop: true,
  // delay between transitions in ms
  autoplay: true,
  pagination: false,

  effect: 'slide',
  // Distance between slides in px.
  spaceBetween: 20,
  //
  slidesPerView: 'auto',
  //
  centeredSlides: false,
  //
  slidesOffsetBefore: 0,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //
  breakpoints: {
     320: {
        slidesPerView: 1,
     },
     480: {
        slidesPerView: 1,
     },
     590: {
        slidesPerView: 2,
     },
     1100: {
        slidesPerView: 3,
     },
     1300: {
      slidesPerView: 4,
   },
  }
});

const servhome = new Swiper('.homeserv__content', {
   modules: [Navigation, Autoplay, EffectFade],
   speed: 400,
   autoplay: true,
   //autoHeight: true,
   initialSlide: 0,
   //truewrapper adoptsheight of active slide
 
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   // delay between transitions in ms
   autoplay: true,
   pagination: false,
 
   effect: 'slide',
   // Distance between slides in px.
   spaceBetween: 25,
   //
   slidesPerView: 'auto',
   //
   centeredSlides: false,
   //
   slidesOffsetBefore: 0,
 
   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 
   //
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      480: {
         slidesPerView: 1,
      },
      590: {
         slidesPerView: 2,
      },
      1100: {
         slidesPerView: 3,
      },
      1300: {
       slidesPerView: 4,
    },
   }
 });

 const reviews = new Swiper('.homereviews__content', {
   modules: [Navigation, Autoplay, EffectFade],
   speed: 400,
   autoHeight: true,
   initialSlide: 0,
   //truewrapper adoptsheight of active slide
 
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   // delay between transitions in ms
   autoplay: true,
   pagination: false,
 
   effect: 'slide',
   // Distance between slides in px.
   spaceBetween: 20,
   //
   slidesPerView: 'auto',
   //
   centeredSlides: false,
   //
   slidesOffsetBefore: 0,
 
   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 
   //
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      480: {
         slidesPerView: 1,
      },
      790: {
         slidesPerView: 2,
      },
   }
 });

 const newshome = new Swiper('.homenews__content', {
   modules: [Navigation, Autoplay, EffectFade],
   speed: 400,
   autoplay: true,
   autoHeight: true,
   initialSlide: 0,
   //truewrapper adoptsheight of active slide
 
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   // delay between transitions in ms
   autoplay: true,
   pagination: false,
 
   effect: 'slide',
   // Distance between slides in px.
   spaceBetween: 25,
   //
   slidesPerView: 'auto',
   //
   centeredSlides: false,
   //
   slidesOffsetBefore: 0,
 
   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 
   //
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      480: {
         slidesPerView: 1,
      },
      590: {
         slidesPerView: 2,
      },
      1100: {
         slidesPerView: 3,
      },
      1300: {
       slidesPerView: 4,
    },
   }
 });

 var onas = new Swiper(".onas__swiper-small", {
   spaceBetween: 10,
   slidesPerView: 'auto',
   modules: [Navigation, Autoplay, Thumbs],
   centeredSlides: false,
   autoHeight: true,
   initialSlide: 0,
   autoplay: true,
   loop: true,
   watchSlidesProgress: true,
  
 
 });
 var onas2 = new Swiper(".onas__swiper-big", {
   modules: [Navigation, Autoplay, Thumbs],
   spaceBetween: 10,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
   thumbs: {
     swiper: onas,
   },
 });

const logohome = new Swiper('.logo__content', {
  modules: [Navigation, Autoplay, EffectFade],
  speed: 400,
  autoplay: true,
  autoHeight: true,
  initialSlide: 0,
  //truewrapper adoptsheight of active slide

  // Optional parameters
  direction: 'horizontal',
  loop: true,
  // delay between transitions in ms
  autoplay: true,
  pagination: false,

  effect: 'slide',
  // Distance between slides in px.
  spaceBetween: 25,
  //
  slidesPerView: 'auto',
  //
  centeredSlides: false,
  //
  slidesOffsetBefore: 0,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  //
  breakpoints: {
     320: {
        slidesPerView: 2,
     },
     480: {
        slidesPerView: 2,
     },
     590: {
        slidesPerView: 3,
     },
     1100: {
        slidesPerView: 4,
     },
     1300: {
      slidesPerView: 6,
   },
  }
});

var proeksingl = new Swiper(".single__sleder-small", {
    modules: [Autoplay, Thumbs, Navigation, Pagination, EffectFade],
    spaceBetween: 6,
    slidesPerView: 'auto',
    slideToClickedSlide: true,
    centeredSlides: false,
    autoHeight: true,
    initialSlide: 0,
    autoplay: true,
    loop: true,
    watchSlidesProgress: true,
  });
  var proeksingl2 = new Swiper(".single__sleder-big", {
   modules: [Autoplay, Thumbs, Navigation, Pagination, EffectFade],
  // spaceBetween: 10,
   autoplay: true,
   effect: 'fade',
   fadeEffect: {
     crossFade: true
    },
   slideToClickedSlide: true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
   thumbs: {
     swiper: proeksingl,
   },
  });

  const sdcat = new Swiper('.sidebar__widget-catalog', {
   modules: [Autoplay, EffectFade],
   loop: true,
   autoplay: true,
   speed: 2000,
   autoplayDisableOnInteraction:true,
   pagination: false,
   effect: 'fade',
   fadeEffect: {
     crossFade: true
    },
  });

  const sdreviews = new Swiper('.sidebar__widget-reviews', {
    modules: [Autoplay, EffectFade],
    loop: true,
    autoplay: true,
    speed: 2000,
    autoplayDisableOnInteraction:true,
    pagination: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
     },
   });

   const sdvakan = new Swiper('.sidebar__widget-vakan', {
    modules: [Autoplay, EffectFade],
    loop: true,
    autoplay: true,
    speed: 2000,
    autoplayDisableOnInteraction:true,
    pagination: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
     },
   });

   const accordionItemHeaders = document.querySelectorAll(".faq__title");

   accordionItemHeaders.forEach(accordionItemHeader => {
      accordionItemHeader.addEventListener("click", event => {
       
        // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
       
       const currentlyActiveAccordionItemHeader = document.querySelector(".faq__item .active");
        if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
          currentlyActiveAccordionItemHeader.classList.toggle("active");
           currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
         }
   
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if(accordionItemHeader.classList.contains("active")) {
         accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        }
        else {
          accordionItemBody.style.maxHeight = 0;
        }
       
      });
   });

