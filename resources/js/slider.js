$(document).ready(function(){
//the entire function is to create a sliding effect on different screen sizes
// to get the total slides
let slides = $('.sliding-system a.slide').length
let maxSlides;
let moveTotal;
let currentSlide = 0;

$(window).resize(function(){
      currentSlide = 0;
      $('.sliding-system').css('transform', 'translate3d(-0%,0,0)');
  });

function desktopSlider(){
      if(a.matches){
          //* 20 was used because on the desktop screen 5 slides are present. meaning each is 20%
          maxSlides = Math.ceil((slides*20)/100);
          moveTotal = 100;

          //right button
          $('.right-btn').on('click', function(){
              console.log('clicked right button');
              
              if(currentSlide < maxSlides){
                  currentSlide += 100;
                  $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0,0)`);
              }
          });

          //left button
          $('.left-btn').on('click', function(){
              console.log('clicked right button');
              
              if(currentSlide != 0){
                  currentSlide -= 100;
                  $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0,0)`);
              }
          });
      }
  }

    var a = window.matchMedia("(min-width:998px)");
    desktopSlider(a);
    a.addListener(desktopSlider);

    function tabletSlider(){
        if(b.matches){
           //* 50 was used because on the desktop screen 2 slides are present. meaning each is 50%
           maxSlides = Math.ceil((slides*50)/100);
        //    moveTotal = 100;

           //right button
          $('.right-btn').on('click', function(){
            console.log('clicked right button');
            
            if(currentSlide < ((maxSlides*100)-100)){
                currentSlide += 50;
                $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0,0)`);
            }
        });

        //left button
        $('.left-btn').on('click', function(){
            console.log('clicked right button');
            
            if(currentSlide != 0){
                currentSlide -= 50;
                $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0,0)`);
            }
        });
        }
    }

    var b = window.matchMedia("(min-width:768px) and (max-width:997px)");
    tabletSlider(b);
    b.addListener(tabletSlider);
});


