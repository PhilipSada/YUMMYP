const initialPageAnimation = ()=>{
    if(window.screen.width > 768){
      let tl = gsap.timeline()
      tl.fromTo(
        ".hero-text",
        {
          x: 0,
          y: 200,
          opacity: 0,
        },
        {
          x: 0,
          y: 0,
          opacity: 1,
          duration: 1.2,
        }
      ).fromTo(
          ".social-icons",
          {
              x: 0,
              y: 100,
             opacity: 0,
          },
          {
              x: 0,
              y: 0,
              opacity: 1,
              duration: 1.2,
          }
          
      )
    }
      
    }
const delay = (n)=>{
    return new Promise((done)=>{
        setTimeout(()=>{
         done();
        }, n)
    })
  }
   const loadingEnter = ()=>{
       let timeline = gsap.timeline();
       timeline.fromTo('.loading-bg',
       {
          y:0,
  
       }, {
          y:'100%',
          duration:2
       })
   }
   const loadingLeave = ()=>{
       let timeline = gsap.timeline();
       timeline.fromTo('.loading-bg',
       {
          y:'100%',
  
       }, {
          y:0,
          duration:2
       })
  }

barba.init({
    sync:true,
    transitions:[
        {
            name:'home-transition',
            from:{
                namespace:['contact', 'contact-confirmation', 'all-menu', 'single-menu', 'about','offers', 'reservation-confirmation', 'reservation', 'thank-you']
            },
            to:{
                namespace:['home']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                initialPageAnimation();
            },
            async once(data){
                initialPageAnimation();
            }
           
        },
        {
            name:'contact-transition',
            from:{
                namespace:['home', 'contact-confirmation', 'all-menu', 'single-menu', 'about','offers', 'reservation-confirmation', 'reservation', 'thank-you']
            },
            to:{
                namespace:['contact']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                // livingRoomEnter();
            },
           
        },
        {
            name:'contact-confirmation-transition',
            from:{
                namespace:['contact', 'home', 'all-menu', 'single-menu', 'about','offers', 'reservation-confirmation', 'reservation', 'thank-you']
            },
            to:{
                namespace:['contact-confirmation']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                // contactEnter();
            },
           
        },
        {
            name:'all-menu-transition',
            from:{
                namespace:['contact', 'home', 'contact-confirmation', 'single-menu', 'about','offers', 'reservation-confirmation', 'reservation', 'thank-you']
            },
            to:{
                namespace:['all-menu']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                // diningRoomEnter();
            },
           
        },
       
        {
            name:'single-menu-transition',
            from:{
                namespace:['contact', 'home', 'contact-confirmation', 'all-menu', 'about','offers', 'reservation-confirmation', 'reservation', 'thank-you']
            },
            to:{
                namespace:['single-menu']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                // diningRoomEnter();
            },
           
        },
        {
            name:'about-transition',
            from:{
                namespace:['contact', 'home', 'contact-confirmation', 'all-menu', 'single-menu','offers', 'reservation-confirmation', 'reservation', 'thank-you']
            },
            to:{
                namespace:['about']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                // diningRoomEnter();
            },
           
        },
        {
            name:'offers-transition',
            from:{
                namespace:['contact', 'home', 'contact-confirmation', 'all-menu', 'single-menu','about', 'reservation-confirmation', 'reservation', 'thank-you']
            },
            to:{
                namespace:['offers']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                // diningRoomEnter();
            },
           
        },
        {
            name:'reservation-confirmation-transition',
            from:{
                namespace:['contact', 'home', 'contact-confirmation', 'all-menu', 'single-menu','about', 'offers', 'reservation', 'thank-you']
            },
            to:{
                namespace:['reservation-confirmation']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                // diningRoomEnter();
            },
           
        },
        {
            name:'reservation-transition',
            from:{
                namespace:['contact', 'home', 'contact-confirmation', 'all-menu', 'single-menu','about', 'offers', 'reservation-confirmation', 'thank-you']
            },
            to:{
                namespace:['reservation']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                // diningRoomEnter();
            },
           
        },
        {
            name:'thank-you-transition',
            from:{
                namespace:['contact', 'home', 'contact-confirmation', 'all-menu', 'single-menu','about', 'offers', 'reservation-confirmation', 'reservation']
            },
            to:{
                namespace:['thank-you']
            },
            async leave(data){
                const done = this.async();
                console.log('leaving-page-animations');
                loadingLeave();
                await delay(1500);
                done();
            },
            async enter(data){
                console.log('entering-page-animations');
                loadingEnter();
                // diningRoomEnter();
            },
           
        },
       
        
        
       
    ],
    views: [
        
            {
                namespace: 'contact-confirmation',
                afterEnter(data) {
                    loadingEnter();
                    // livingRoomEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'all-menu',
                afterEnter(data) {
                    loadingEnter();
                    // diningRoomEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'single-menu',
                afterEnter(data) {
                    loadingEnter();
                    // bedroomEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'about',
                afterEnter(data) {
                    loadingEnter();
                    // singleProductEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'offers',
                afterEnter(data) {
                    loadingEnter();
                //   faqsEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'reservation-confirmation',
                afterEnter(data) {
                    loadingEnter();
                //  emailConfirmationEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'reservation',
                afterEnter(data) {
                    loadingEnter();
                //  emailConfirmationEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'thank-you',
                afterEnter(data) {
                    loadingEnter();
                //  emailConfirmationEnter();
             },
             beforeEnter(data){
                 window.scrollTo(0,0);
             }
               
           },
            {
                namespace: 'contact',
                afterEnter(data) {
                    loadingEnter();
                    // contactEnter();
             }, 
             beforeEnter(data){
              window.scrollTo(0,0);
              }
               
           },
            {
                namespace: 'home',
                beforeEnter(data) {
                    initialPageAnimation();
                    window.scrollTo(0,0);
             },
               
           },
    ]        
});