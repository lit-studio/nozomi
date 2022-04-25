import { gsap } from "gsap";
import lottie from "lottie-web";
import VimeoPlayer from '@vimeo/player';
import {DrawSVGPlugin} from "../../libs/gsap-shockingly-green/src/DrawSVGPlugin";
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(DrawSVGPlugin);
gsap.registerPlugin(ScrollTrigger);

export default function () {

  console.log("home page");

  let $body = $('body'),
  $indexSection = $body.find(".index"),
  $indexSectionTitle = $indexSection.find(".item-title--title--js");

  function homeIndexFunc() {
    // console.clear();
    console.log('index');

    const handBirdAnim = lottie.loadAnimation({
      container: document.getElementById('hand_bird'),
      renderer: "svg",
      loop: false,
      autoplay: false,
      path: nozomiData.rootUrl + "/assets/lottie/hand_bird.json"
    });

    let indexSectionGsap =  gsap.timeline({
      paused: true,
    })
        // .from($indexSectionTitle, 2, {  autoAlpha: 0, ease: "Power4.easeOut" },'')
        .from($indexSectionTitle, 2, {  autoAlpha: 0, ease: "Power4.easeOut" },'')
        .from($indexSectionTitle, 2, { yPercent: 100, ease: "Power4.easeOut" },'<')
        // .from($indexSectionTitle, 2, {autoAlpha: 0, yPercent: 50
        // },'<')
        .from('.item-img-item', 1, {  autoAlpha: 0, 
          onComplete: () => {
            handBirdAnim.setSpeed(1.8);
            handBirdAnim.play();
          } 
      },'-=2')
  ;
  indexSectionGsap.play();


    const svg = document.querySelector("#demo");
    const tl = gsap.timeline();
    let pt = svg.createSVGPoint();
    // const tl = gsap.timeline({onUpdate:onUpdate});
    // let data = document.querySelector(".tlProgress");
    // let counter = document.querySelector("#counter");
    const ratio = 0.5625;
    
    gsap.set("#instructions, #dial", {xPercent: -50});
    // gsap.set("#progressRing", {drawSVG:0});
    
    tl.to("#masker", {duration: 2, attr:{r:2400}, ease:"power2.in"});
    tl.reversed(true);
    
    function mouseHandlerIndex() {
      // tl.reversed(!tl.reversed());
    }
    
    function getPointIndex(evt){
      pt.x = evt.clientX; 
      pt.y = evt.clientY;
      return pt.matrixTransform(svg.getScreenCTM().inverse());
    }
    
    function mouseMoveIndex(evt) {
      let newPoint = getPointIndex(evt);
      // gsap.set("#dot", {attr:{cx:newPoint.x, cy:newPoint.y}});
      gsap.to("#masker", 0.88, {attr:{cx:newPoint.x, cy:newPoint.y}, ease:"power2.out"});
     }
    

    
    function newSizeIndex() {
      let w = window.innerWidth ;
      let h = window.innerHeight;
      if (w > h * (16/9) ) {
        gsap.set("#demo", { attr: { width: w, height: w * ratio } });
      } else {
        gsap.set("#demo", { attr: { width: h / ratio, height: h } });
      }
      let data = svg.getBoundingClientRect();
      gsap.set("#demo", {x:w/2 - data.width/2});
      gsap.set("#demo", {y:h/2 - data.height/2});
    }
    
    window.addEventListener("mousedown", mouseHandlerIndex);
    window.addEventListener("mouseup", mouseHandlerIndex);
    window.addEventListener("mousemove", mouseMoveIndex);
    
    newSizeIndex();
    window.addEventListener("resize", newSizeIndex);
  }
  homeIndexFunc();

  let $aboutSection = $body.find('.about'),
  $aboutSectionBlock = $aboutSection.find('.parallax-img-block--js'),
  $aboutSectionImg = $aboutSectionBlock.find('img'),
  $portfolioSection = $body.find('.portfolio'),
  $portfolioSectionblock = $portfolioSection.find('.parallax-img-block--js'),
  $portfolioSectionImg = $portfolioSectionblock.find('img'),
  $parallaxBlock = $body.find('.parallax-img-block--js')

  ;

  // if ($('.parallax-img-block--js').length > 0) {
  //   gsap.utils.toArray('.parallax-img-block--js img').forEach(sectionImg => {
  //     ScrollTrigger.create({
  //       trigger: sectionImg,
  //       onEnter: () => {
  //         gsap.to(sectionImg, {
  //           autoAlpha: 1,
  //           duration: 1,
  //         });
  //         gsap.to(sectionImg, 2, {scale: 1, ease: "Power4.easeOut"},'<');
  //       },
  //       start: "top 80%",
  //       end: "bottom top",
  //       pin: false,
  //       scrub: false,
  //       toggleActions: "play none none none",
  //       markers: true
  //     });
  //   });
  // }

  function portfolioScaleFunc() {
      ScrollTrigger.create({
        trigger: $portfolioSectionImg ,
        onEnter: () => {
          gsap.to($portfolioSectionImg, {
            autoAlpha: 1,
            duration: 1,
          });
          gsap.to($portfolioSectionImg, 2, {scale: 1, ease: "Power4.easeOut"},'<');
        },
        start: "top 80%",
        end: "bottom top",
        pin: false,
        scrub: false,
        toggleActions: "play none none none",
        markers: false
      });
    ScrollTrigger.create({
      trigger: $portfolioSectionblock,
      animation: 
      gsap
          .timeline()
          .fromTo(
            $portfolioSectionblock,
              { scale: 1.2, duration: 2 },
              { scale: 1, duration: 2 }
          ),
      start: "top bottom",
      end: "bottom top",
      scrub: true,
      toggleActions: "play reverse none reverse",
      markers: false
    });
  }

  portfolioScaleFunc();

  function aboutScaleFunc() {
    ScrollTrigger.create({
      trigger: $aboutSectionImg ,
      onEnter: () => {
        gsap.to($aboutSectionImg, {
          autoAlpha: 1,
          duration: 1,
        });
        gsap.to($aboutSectionImg, 2, {scale: 1, ease: "Power4.easeOut"},'<');
      },
      start: "top center",
      end: "bottom top",
      pin: false,
      scrub: false,
      toggleActions: "play none none none",
      markers: false
    });
    ScrollTrigger.create({
      trigger: $aboutSectionBlock,
      animation: 
      gsap
          .timeline()
          .fromTo(
            $aboutSectionBlock,
              { yPercent: -5,scale: 1.2, duration: 2 },
              { yPercent: 5,scale: 1, duration: 2 }
          ),
      start: "top bottom",
      end: "bottom top",
      scrub: true,
      toggleActions: "play reverse none reverse",
      markers: false
    });
  }
  aboutScaleFunc();

  // if ($('.item-wrap--js').length > 0) {
  //   gsap.utils.toArray('.item-wrap--js').forEach(itemWrap => {
  //     ScrollTrigger.create({
  //       trigger: itemWrap,
  //       onEnter: () => {
  //         gsap.to(itemWrap, {
  //           autoAlpha: 1,
  //           duration: 2,
  //         });
  //         gsap.from(itemWrap, 2, {xPercent: -20, ease: "Power4.easeOut"},'<');
  //       },
  //       start: "top 70%",
  //       end: "bottom top",
  //       pin: false,
  //       scrub: false,
  //       toggleActions: "play none none none",
  //       markers: false
  //     });
  //   });
  // }


  function homePerspectiveFunc() {
    // console.clear();
    console.log('perspective');
    const svg = document.querySelector("#demoPerspective");
    const tlPer = gsap.timeline();
    // const tl = gsap.timeline({onUpdate:onUpdate});
    let ptPerspective = svg.createSVGPoint();
    // let data = document.querySelector(".tlProgress");
    // let counter = document.querySelector("#counterPerspective");
    const ratioPerspective = 0.5625;
    
    gsap.set("#instructionsPerspective, #dialPerspective", {xPercent: -50});
    gsap.set("#progressRingPerspective", {drawSVG:0});
    
    tlPer.to("#maskerPerspective", {duration: 2, attr:{r:2400}, ease:"power2.in"});
    tlPer.reversed(true);
    
    function mouseHandlerPerspective() {
      // tlPer.reversed(!tlPer.reversed());
    }
    
    function getPointPerspective(evt){
      ptPerspective.x = evt.clientX; 
      ptPerspective.y = evt.clientY;
      return ptPerspective.matrixTransform(svg.getScreenCTM().inverse());
    }
    
    function mouseMovePerspective(evt) {
      let newPointPerspective = getPointPerspective(evt);
      // gsap.set("#dotPerspective", {attr:{cx:newPointPerspective.x, cy:newPointPerspective.y}});
      gsap.to("#maskerPerspective", 0.88, {attr:{cx:newPointPerspective.x, cy:newPointPerspective.y}, ease:"power2.out"});
     }
    

    
    function newSizePerspective() {
      let wPerspective = window.innerWidth ;
      let hPerspective = window.innerHeight;
      if (wPerspective > hPerspective * (16/9) ) {
        gsap.set("#demoPerspective", { attr: { width: wPerspective, height: wPerspective * ratioPerspective } });
      } else {
        gsap.set("#demoPerspective", { attr: { width: hPerspective / ratioPerspective, height: hPerspective } });
      }
      let dataPerspective = svg.getBoundingClientRect();
      gsap.set("#demoPerspective", {x:wPerspective/2 - dataPerspective.width/2});
      gsap.set("#demoPerspective", {y:hPerspective/2 - dataPerspective.height/2});
    }
    
    window.addEventListener("mousedown", mouseHandlerPerspective);
    window.addEventListener("mouseup", mouseHandlerPerspective);
    window.addEventListener("mousemove", mouseMovePerspective);
    
    newSizePerspective();
    window.addEventListener("resize", newSizePerspective);
  }
  homePerspectiveFunc();



  function controlVideos() {
    
        let iframesLittle = document.querySelector('.video-little--js');
        let  videoPlayerLayoutLittle = document.querySelector('.video-little--layout--js');
        let videoIdLittle = iframesLittle.getAttribute('data-set-vimeo-id');
        let vimeoPlayerLittle = new VimeoPlayer(iframesLittle,{
          id: videoIdLittle,
          width: '100%',
          height: '100%',
          muted:	true,
          loop: true,
          controls:	false,
          quality:	false
        });

        let iframesBig = document.querySelector('.video-big--js');
        let videoPlayerLayoutBig = document.querySelector('.video-big--layout--js');
        let videoIdBig = iframesBig.getAttribute('data-set-vimeo-id');
        let  $cursoreBlock = $body.find(".cursor-dot");
        let vimeoPlayerBig = new VimeoPlayer(iframesBig,{
          id: videoIdBig,
          width: '100%',
          height: '100%',
          muted:	true,
          loop: true,
          controls:	false,
          quality:	false
        });
        vimeoPlayerLittle.loadVideo(videoIdLittle);
        vimeoPlayerBig.loadVideo(videoIdBig);

    if (screen.width > 1024) {
      console.log('desk');
      videoPlayerLayoutLittle.addEventListener("mouseenter", () => {
        if (!$cursoreBlock.hasClass('video')) {
          $cursoreBlock.addClass("video");
          console.log('cursore video');
        }
        // console.log('first play');
        vimeoPlayerLittle.play().then(function() {
          // the video was played
        }).catch(function(error) {
            switch (error.name) {
                case 'PasswordError':
                    // the video is password-protected and the viewer needs to enter the
                    // password first
                    break;
        
                case 'PrivacyError':
                    // the video is private
                    break;
        
                default:
                    // some other error occurred
                    break;
            }
        });
      });

      videoPlayerLayoutLittle.addEventListener("mouseleave", () => {
        // console.log('first pause');
        if ($cursoreBlock.hasClass('video')) {
          $cursoreBlock.removeClass("video");
          console.log('cursore video cick');
        }
        vimeoPlayerLittle.pause().then(function() {
          // the video was played
        }).catch(function(error) {
            switch (error.name) {
                case 'PasswordError':
                    // the video is password-protected and the viewer needs to enter the
                    // password first
                    break;
        
                case 'PrivacyError':
                    // the video is private
                    break;
        
                default:
                    // some other error occurred
                    break;
            }
        });
      });

      videoPlayerLayoutBig.addEventListener("mouseenter", () => {
        // console.log('second play');
        if (!$cursoreBlock.hasClass('video')) {
          $cursoreBlock.addClass("video");
          console.log('cursore video');
        }
        vimeoPlayerBig.play().then(function() {
          // the video was played
        }).catch(function(error) {
            switch (error.name) {
                case 'PasswordError':
                    // the video is password-protected and the viewer needs to enter the
                    // password first
                    break;
        
                case 'PrivacyError':
                    // the video is private
                    break;
        
                default:
                    // some other error occurred
                    break;
            }
        });
      });

      videoPlayerLayoutBig.addEventListener("mouseleave", () => {
        // console.log('second pause');
        if ($cursoreBlock.hasClass('video')) {
          $cursoreBlock.removeClass("video");
          console.log('cursore video cick');
        }
        vimeoPlayerBig.pause().then(function() {
          // the video was played
        }).catch(function(error) {
            switch (error.name) {
                case 'PasswordError':
                    // the video is password-protected and the viewer needs to enter the
                    // password first
                    break;
        
                case 'PrivacyError':
                    // the video is private
                    break;
        
                default:
                    // some other error occurred
                    break;
            }
        });
      });

    }
    else{
      console.log('mobile');
      ScrollTrigger.create({
        trigger:  iframesLittle,
        start: "top center",
        end: "bottom center",
        scrub: true,
        toggleActions: "play reverse none reverse",
        onEnter: () => {
          vimeoPlayerLittle.play().then(function() {
            // the video was played
          }).catch(function(error) {
              switch (error.name) {
                  case 'PasswordError':
                      // the video is password-protected and the viewer needs to enter the
                      // password first
                      break;
          
                  case 'PrivacyError':
                      // the video is private
                      break;
          
                  default:
                      // some other error occurred
                      break;
              }
          });
        },
        onEnterBack: () => {
          vimeoPlayerLittle.play().then(function() {
            // the video was played
          }).catch(function(error) {
              switch (error.name) {
                  case 'PasswordError':
                      // the video is password-protected and the viewer needs to enter the
                      // password first
                      break;
          
                  case 'PrivacyError':
                      // the video is private
                      break;
          
                  default:
                      // some other error occurred
                      break;
              }
          });
        },
        onLeave: () => {
          vimeoPlayerLittle.pause().then(function() {
            // the video was paused
        }).catch(function(error) {
            switch (error.name) {
                case 'PasswordError':
                    // the video is password-protected and the viewer needs to enter the
                    // password first
                    break;
        
                case 'PrivacyError':
                    // the video is private
                    break;
        
                default:
                    // some other error occurred
                    break;
            }
        });
        },
        onLeaveBack: () => {
          vimeoPlayerLittle.pause().then(function() {
            // the video was paused
        }).catch(function(error) {
            switch (error.name) {
                case 'PasswordError':
                    // the video is password-protected and the viewer needs to enter the
                    // password first
                    break;
        
                case 'PrivacyError':
                    // the video is private
                    break;
        
                default:
                    // some other error occurred
                    break;
            }
        });

        },
        markers: false
      });
      ScrollTrigger.create({
        trigger:  iframesBig,
        start: "top center",
        end: "bottom center",
        scrub: true,
        toggleActions: "play reverse none reverse",
        onEnter: () => {
          vimeoPlayerBig.play().then(function() {
            // the video was played
          }).catch(function(error) {
              switch (error.name) {
                  case 'PasswordError':
                      // the video is password-protected and the viewer needs to enter the
                      // password first
                      break;
          
                  case 'PrivacyError':
                      // the video is private
                      break;
          
                  default:
                      // some other error occurred
                      break;
              }
          });
        },
        onEnterBack: () => {
          vimeoPlayerBig.play().then(function() {
            // the video was played
          }).catch(function(error) {
              switch (error.name) {
                  case 'PasswordError':
                      // the video is password-protected and the viewer needs to enter the
                      // password first
                      break;
          
                  case 'PrivacyError':
                      // the video is private
                      break;
          
                  default:
                      // some other error occurred
                      break;
              }
          });
        },
        onLeave: () => {
          

          vimeoPlayerBig.pause().then(function() {
            // the video was paused
        }).catch(function(error) {
            switch (error.name) {
                case 'PasswordError':
                    // the video is password-protected and the viewer needs to enter the
                    // password first
                    break;
        
                case 'PrivacyError':
                    // the video is private
                    break;
        
                default:
                    // some other error occurred
                    break;
            }
        });
        },
        onLeaveBack: () => {
          // $iframesLittle.removeClass('play');
          vimeoPlayerBig.pause().then(function() {
            // the video was paused
        }).catch(function(error) {
            switch (error.name) {
                case 'PasswordError':
                    // the video is password-protected and the viewer needs to enter the
                    // password first
                    break;
        
                case 'PrivacyError':
                    // the video is private
                    break;
        
                default:
                    // some other error occurred
                    break;
            }
        });
        },
        markers: false
      });
    }

   
}
controlVideos();
  
}
