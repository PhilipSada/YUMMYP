"use strict";

var initialPageAnimation = function initialPageAnimation() {
  if (window.screen.width > 768) {
    var tl = gsap.timeline();
    tl.fromTo(".hero-text", {
      x: 0,
      y: 100,
      opacity: 0
    }, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 1.2
    }).fromTo(".social-icons", {
      x: 0,
      y: 100,
      opacity: 0
    }, {
      x: 0,
      y: 0,
      opacity: 1,
      duration: 1.2
    });
  }
};

var delay = function delay(n) {
  return new Promise(function (done) {
    setTimeout(function () {
      done();
    }, n);
  });
};

var loadingEnter = function loadingEnter() {
  var timeline = gsap.timeline();
  timeline.fromTo('.loading-bg', {
    y: 0
  }, {
    y: '100%',
    duration: 2
  });
};

var loadingLeave = function loadingLeave() {
  var timeline = gsap.timeline();
  timeline.fromTo('.loading-bg', {
    y: '100%'
  }, {
    y: 0,
    duration: 2
  });
};

barba.init({
  sync: true,
  transitions: [{
    name: 'home-transition',
    from: {
      namespace: ['contact', 'contact-confirmation', 'all-menu', 'single-menu', 'about', 'offers', 'reservation-confirmation', 'reservation', 'thank-you']
    },
    to: {
      namespace: ['home']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context2) {
        while (1) {
          switch (_context2.prev = _context2.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter();
              initialPageAnimation();

            case 3:
            case "end":
              return _context2.stop();
          }
        }
      });
    },
    once: function once(data) {
      return regeneratorRuntime.async(function once$(_context3) {
        while (1) {
          switch (_context3.prev = _context3.next) {
            case 0:
              initialPageAnimation();

            case 1:
            case "end":
              return _context3.stop();
          }
        }
      });
    }
  }, {
    name: 'contact-transition',
    from: {
      namespace: ['home', 'contact-confirmation', 'all-menu', 'single-menu', 'about', 'offers', 'reservation-confirmation', 'reservation', 'thank-you']
    },
    to: {
      namespace: ['contact']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context4) {
        while (1) {
          switch (_context4.prev = _context4.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context4.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context4.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context5) {
        while (1) {
          switch (_context5.prev = _context5.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter(); // livingRoomEnter();

            case 2:
            case "end":
              return _context5.stop();
          }
        }
      });
    }
  }, {
    name: 'contact-confirmation-transition',
    from: {
      namespace: ['contact', 'home', 'all-menu', 'single-menu', 'about', 'offers', 'reservation-confirmation', 'reservation', 'thank-you']
    },
    to: {
      namespace: ['contact-confirmation']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context6) {
        while (1) {
          switch (_context6.prev = _context6.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context6.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context6.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context7) {
        while (1) {
          switch (_context7.prev = _context7.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter(); // contactEnter();

            case 2:
            case "end":
              return _context7.stop();
          }
        }
      });
    }
  }, {
    name: 'all-menu-transition',
    from: {
      namespace: ['contact', 'home', 'contact-confirmation', 'single-menu', 'about', 'offers', 'reservation-confirmation', 'reservation', 'thank-you']
    },
    to: {
      namespace: ['all-menu']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context8) {
        while (1) {
          switch (_context8.prev = _context8.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context8.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context8.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context9) {
        while (1) {
          switch (_context9.prev = _context9.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter(); // diningRoomEnter();

            case 2:
            case "end":
              return _context9.stop();
          }
        }
      });
    }
  }, {
    name: 'single-menu-transition',
    from: {
      namespace: ['contact', 'home', 'contact-confirmation', 'all-menu', 'about', 'offers', 'reservation-confirmation', 'reservation', 'thank-you']
    },
    to: {
      namespace: ['single-menu']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context10) {
        while (1) {
          switch (_context10.prev = _context10.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context10.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context10.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context11) {
        while (1) {
          switch (_context11.prev = _context11.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter(); // diningRoomEnter();

            case 2:
            case "end":
              return _context11.stop();
          }
        }
      });
    }
  }, {
    name: 'about-transition',
    from: {
      namespace: ['contact', 'home', 'contact-confirmation', 'all-menu', 'single-menu', 'offers', 'reservation-confirmation', 'reservation', 'thank-you']
    },
    to: {
      namespace: ['about']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context12) {
        while (1) {
          switch (_context12.prev = _context12.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context12.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context12.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context13) {
        while (1) {
          switch (_context13.prev = _context13.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter(); // diningRoomEnter();

            case 2:
            case "end":
              return _context13.stop();
          }
        }
      });
    }
  }, {
    name: 'offers-transition',
    from: {
      namespace: ['contact', 'home', 'contact-confirmation', 'all-menu', 'single-menu', 'about', 'reservation-confirmation', 'reservation', 'thank-you']
    },
    to: {
      namespace: ['offers']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context14) {
        while (1) {
          switch (_context14.prev = _context14.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context14.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context14.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context15) {
        while (1) {
          switch (_context15.prev = _context15.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter(); // diningRoomEnter();

            case 2:
            case "end":
              return _context15.stop();
          }
        }
      });
    }
  }, {
    name: 'reservation-confirmation-transition',
    from: {
      namespace: ['contact', 'home', 'contact-confirmation', 'all-menu', 'single-menu', 'about', 'offers', 'reservation', 'thank-you']
    },
    to: {
      namespace: ['reservation-confirmation']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context16) {
        while (1) {
          switch (_context16.prev = _context16.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context16.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context16.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context17) {
        while (1) {
          switch (_context17.prev = _context17.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter(); // diningRoomEnter();

            case 2:
            case "end":
              return _context17.stop();
          }
        }
      });
    }
  }, {
    name: 'reservation-transition',
    from: {
      namespace: ['contact', 'home', 'contact-confirmation', 'all-menu', 'single-menu', 'about', 'offers', 'reservation-confirmation', 'thank-you']
    },
    to: {
      namespace: ['reservation']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context18) {
        while (1) {
          switch (_context18.prev = _context18.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context18.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context18.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context19) {
        while (1) {
          switch (_context19.prev = _context19.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter(); // diningRoomEnter();

            case 2:
            case "end":
              return _context19.stop();
          }
        }
      });
    }
  }, {
    name: 'thank-you-transition',
    from: {
      namespace: ['contact', 'home', 'contact-confirmation', 'all-menu', 'single-menu', 'about', 'offers', 'reservation-confirmation', 'reservation']
    },
    to: {
      namespace: ['thank-you']
    },
    leave: function leave(data) {
      var done;
      return regeneratorRuntime.async(function leave$(_context20) {
        while (1) {
          switch (_context20.prev = _context20.next) {
            case 0:
              done = this.async();
              console.log('leaving-page-animations');
              loadingLeave();
              _context20.next = 5;
              return regeneratorRuntime.awrap(delay(1500));

            case 5:
              done();

            case 6:
            case "end":
              return _context20.stop();
          }
        }
      }, null, this);
    },
    enter: function enter(data) {
      return regeneratorRuntime.async(function enter$(_context21) {
        while (1) {
          switch (_context21.prev = _context21.next) {
            case 0:
              console.log('entering-page-animations');
              loadingEnter(); // diningRoomEnter();

            case 2:
            case "end":
              return _context21.stop();
          }
        }
      });
    }
  }],
  views: [{
    namespace: 'contact-confirmation',
    afterEnter: function afterEnter(data) {
      loadingEnter(); // livingRoomEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'all-menu',
    afterEnter: function afterEnter(data) {
      loadingEnter(); // diningRoomEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'single-menu',
    afterEnter: function afterEnter(data) {
      loadingEnter(); // bedroomEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'about',
    afterEnter: function afterEnter(data) {
      loadingEnter(); // singleProductEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'offers',
    afterEnter: function afterEnter(data) {
      loadingEnter(); //   faqsEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'reservation-confirmation',
    afterEnter: function afterEnter(data) {
      loadingEnter(); //  emailConfirmationEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'reservation',
    afterEnter: function afterEnter(data) {
      loadingEnter(); //  emailConfirmationEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'thank-you',
    afterEnter: function afterEnter(data) {
      loadingEnter(); //  emailConfirmationEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'contact',
    afterEnter: function afterEnter(data) {
      loadingEnter(); // contactEnter();
    },
    beforeEnter: function beforeEnter(data) {
      window.scrollTo(0, 0);
    }
  }, {
    namespace: 'home',
    beforeEnter: function beforeEnter(data) {
      initialPageAnimation();
      window.scrollTo(0, 0);
    }
  }]
});