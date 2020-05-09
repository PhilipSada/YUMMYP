const hamburger = document.querySelector('.hamburger');
const navMenuWrapper = document.querySelector('.navigation-menu-wrapper');
const navMenu = document.querySelector('.navigation-menu');
const closeNav = document.querySelector('.navigation-close');
const navLinks = document.querySelectorAll('.navigation-menu ul li');


hamburger.addEventListener('click', ()=>{
  
    let timeline = gsap.timeline();
    timeline.fromTo('.navigation-menu-wrapper',
    {
        opacity:0,
        zIndex:10,
        visibility:'hidden'
    },{
        opacity:1,
        zIndex:100,
        visibility:'visible'
    }).fromTo('.navigation-menu', 
    {
        x:'100%'
    }, 
    {
       x:0
    }).fromTo('.navigation-menu ul li',{
        x:10
    },{
        x:0
    })
});

closeNav.addEventListener('click', ()=>{

    let timeline = gsap.timeline();

    timeline.fromTo('.navigation-menu', {
       x:0
    },
    {
       x:'100%'
    }).fromTo('.navigation-menu-wrapper', {
        opacity:1,
        zIndex:100,
        visibility:'visible'
    },
    {
        opacity:0,
        zIndex:10,
        visibility:'hidden'
    })
})
navLinks.forEach(link => {
    link.addEventListener('click', ()=>{

        let timeline = gsap.timeline();
    
        timeline.fromTo('.navigation-menu', {
           x:0
        },
        {
           x:'100%'
        }).fromTo('.navigation-menu-wrapper', {
            opacity:1,
            zIndex:100,
            visibility:'visible'

        },
        {
            opacity:0,
            zIndex:10,
            visibility:'hidden'
        })
    })
})