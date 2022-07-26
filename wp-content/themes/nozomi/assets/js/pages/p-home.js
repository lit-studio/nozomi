import { gsap } from "gsap";
import VimeoPlayer from '@vimeo/player';
import lottie from "lottie-web";
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export default function () {

  // console.log("home page");

  let $body = $('body'),
    $cursorBlock = $body.find(".cursor-dot"),
    $aboutSection = $body.find('.about'),
    $aboutSectionBlock = $aboutSection.find('.parallax-img-block--js'),
    $aboutSectionImg = $aboutSectionBlock.find('img'),
    $portfolioSection = $body.find('.portfolio'),
    aboutSectionImgTrigger="top center",
    $portfolioSectionblock = $portfolioSection.find('.parallax-img-block--js'),
    $portfolioSectionImg = $portfolioSectionblock.find('img')
    ;

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
    if (screen.width > 1024) {
      aboutSectionImgTrigger="top center";
    }
    else{
      aboutSectionImgTrigger="top 80%";
    }
    ScrollTrigger.create({
      trigger: $aboutSectionImg ,
      onEnter: () => {
        gsap.to($aboutSectionImg, {
          autoAlpha: 1,
          duration: 1,
        });
        gsap.to($aboutSectionImg, 2, {scale: 1, ease: "Power4.easeOut"},'<');
      },
      start: aboutSectionImgTrigger,
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

  if (screen.width > 640) {
    function homePerspectiveFunc() {

      const svg = document.querySelector("#demoPerspective");
      const tlPer = gsap.timeline();
      let ptPerspective = svg.createSVGPoint();
      const ratioPerspective = 0.5625;
     
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
      let $videoIdLittleBg = $body.find('.video-little-bg--js'),
      videoIdLittleBgGsap =  gsap.timeline({
        paused: true,
      })
          .to($videoIdLittleBg, 0.5, {  opacity: 0, ease:"expo.easeInOut" },'')
      ,
      $videoIdBigBg = $body.find('.video-big-bg--js'),
      // let $videoIdBigLayout = $body.find('.video-big--layout--js');
      videoIdBigBgGsap =  gsap.timeline({
        paused: true,
      })
          .to($videoIdBigBg, 0.5, {  opacity: 0, ease:"expo.easeInOut" },'')
          // .to($videoIdBigLayout, 0.5, {  opacity: 0, ease:"expo.easeInOut" },'')
      ,
      iframesLittle = document.querySelector('.video-little--js'),
      videoPlayerLayoutLittle = document.querySelector('.video-little--layout--js'),
      videoIdLittle = iframesLittle.getAttribute('data-set-vimeo-id'),
      vimeoPlayerLittle = new VimeoPlayer(iframesLittle,{
        id: videoIdLittle,
        width: '100%',
        height: '100%',
        muted:	true,
        loop: true,
        controls:	false
      }),
      iframesBig = document.querySelector('.video-big--js'),
      videoPlayerLayoutBig = document.querySelector('.video-big--layout--js'),
      videoIdBig = iframesBig.getAttribute('data-set-vimeo-id'),
      vimeoPlayerBig = new VimeoPlayer(iframesBig,{
        id: videoIdBig,
        width: '100%',
        height: '100%',
        muted:	true,
        loop: true,
        controls:	false
        
      });

      vimeoPlayerLittle.play().then(function() {
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
      vimeoPlayerBig.play().then(function() {
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
      // setTimeout(function(){
      //     vimeoPlayerLittle.pause();
      //     vimeoPlayerBig.pause();
      // }, 500);
      vimeoPlayerLittle.pause();
      vimeoPlayerBig.pause();
      vimeoPlayerLittle.unload();
      vimeoPlayerBig.unload();

  if (screen.width > 1024) {
    // console.log('desk');
    videoPlayerLayoutLittle.addEventListener("mouseenter", () => {
      videoIdLittleBgGsap.play();        
      if (!$cursorBlock.hasClass('video')) {
        $cursorBlock.addClass("video");
      }
      vimeoPlayerLittle.play();
      // vimeoPlayerLittle.play().then(function() {
      // }).catch(function(error) {
      //     switch (error.name) {
      //         case 'PasswordError':
      //             // the video is password-protected and the viewer needs to enter the
      //             // password first
      //             break;
      
      //         case 'PrivacyError':
      //             // the video is private
      //             break;
      
      //         default:
      //             // some other error occurred
      //             break;
      //     }
      // });
    });

    videoPlayerLayoutLittle.addEventListener("mouseleave", () => {
      videoIdLittleBgGsap.reverse();
      if ($cursorBlock.hasClass('video')) {
        $cursorBlock.removeClass("video");
      }
      vimeoPlayerLittle.unload();
      // vimeoPlayerLittle.unload().then(function() {
      //   // the video was played
      // }).catch(function(error) {
      //     switch (error.name) {
      //         case 'PasswordError':
      //             // the video is password-protected and the viewer needs to enter the
      //             // password first
      //             break;
      
      //         case 'PrivacyError':
      //             // the video is private
      //             break;
      
      //         default:
      //             // some other error occurred
      //             break;
      //     }
      // });
    });

    videoPlayerLayoutBig.addEventListener("mouseenter", () => {
      videoIdBigBgGsap.play();
      if (!$cursorBlock.hasClass('video')) {
        $cursorBlock.addClass("video");
        // console.log('cursor video1');
      }
      vimeoPlayerBig.play();
      // vimeoPlayerBig.play().then(function() {
      //   // the video was played
      // }).catch(function(error) {
      //     switch (error.name) {
      //         case 'PasswordError':
      //             // the video is password-protected and the viewer needs to enter the
      //             // password first
      //             break;
      
      //         case 'PrivacyError':
      //             // the video is private
      //             break;
      
      //         default:
      //             // some other error occurred
      //             break;
      //     }
      // });
    });

    videoPlayerLayoutBig.addEventListener("mouseleave", () => {
      videoIdBigBgGsap.reverse();
      if ($cursorBlock.hasClass('video')) {
        $cursorBlock.removeClass("video");
        // console.log('cursor video hidden1');
      }
      vimeoPlayerBig.unload();
      // vimeoPlayerBig.unload().then(function() {
      //   // the video was played
      // }).catch(function(error) {
      //     switch (error.name) {
      //         case 'PasswordError':
      //             // the video is password-protected and the viewer needs to enter the
      //             // password first
      //             break;
      
      //         case 'PrivacyError':
      //             // the video is private
      //             break;
      
      //         default:
      //             // some other error occurred
      //             break;
      //     }
      // });
    });

  }
  else{
    // console.log('mobile');
    ScrollTrigger.create({
      trigger:  iframesLittle,
      start: "top bottom",
      end: "bottom top",
      scrub: false,
      toggleActions: "play reverse none reverse",
      onEnter: () => {
        videoIdLittleBgGsap.play();  
        vimeoPlayerLittle.play();
        // vimeoPlayerLittle.play().then(function() {
        //   // the video was played 
        // }).catch(function(error) {
        //     switch (error.name) {
        //         case 'PasswordError':
        //             // the video is password-protected and the viewer needs to enter the
        //             // password first
        //             break;
        
        //         case 'PrivacyError':
        //             // the video is private
        //             break;
        
        //         default:
        //             // some other error occurred
        //             break;
        //     }
        // });
      },
      onEnterBack: () => {
        videoIdLittleBgGsap.play();  
        vimeoPlayerLittle.play();
        // vimeoPlayerLittle.play().then(function() {
        //   // the video was played
        // }).catch(function(error) {
        //     switch (error.name) {
        //         case 'PasswordError':
        //             // the video is password-protected and the viewer needs to enter the
        //             // password first
        //             break;
        
        //         case 'PrivacyError':
        //             // the video is private
        //             break;
        
        //         default:
        //             // some other error occurred
        //             break;
        //     }
        // });
      },
      onLeave: () => {
        videoIdLittleBgGsap.reverse();
        vimeoPlayerLittle.unload();
        // vimeoPlayerLittle.unload().then(function() {
        //   // the video was paused
        // }).catch(function(error) {
        //     switch (error.name) {
        //         case 'PasswordError':
        //             // the video is password-protected and the viewer needs to enter the
        //             // password first
        //             break;
        
        //         case 'PrivacyError':
        //             // the video is private
        //             break;
        
        //         default:
        //             // some other error occurred
        //             break;
        //     }
        // });
      },
      onLeaveBack: () => {
        videoIdLittleBgGsap.reverse();
        vimeoPlayerLittle.unload();
      //   vimeoPlayerLittle.unload().then(function() {
      //     // the video was paused
      // }).catch(function(error) {
      //     switch (error.name) {
      //         case 'PasswordError':
      //             // the video is password-protected and the viewer needs to enter the
      //             // password first
      //             break;
      
      //         case 'PrivacyError':
      //             // the video is private
      //             break;
      
      //         default:
      //             // some other error occurred
      //             break;
      //     }
      // });

      },
      markers: false
    });

    ScrollTrigger.create({
      trigger:  iframesBig,
      start: "top bottom",
      end: "bottom top",
      scrub: false,
      toggleActions: "play reverse none reverse",
      markers: true,
      onEnter: () => {
        videoIdBigBgGsap.play();
        vimeoPlayerBig.play();
        // vimeoPlayerBig.play().then(function() {
        //   // the video was played
        // }).catch(function(error) {
        //     switch (error.name) {
        //         case 'PasswordError':
        //             // the video is password-protected and the viewer needs to enter the
        //             // password first
        //             break;
        
        //         case 'PrivacyError':
        //             // the video is private
        //             break;
        
        //         default:
        //             // some other error occurred
        //             break;
        //     }
        // });
      },
      onEnterBack: () => {
        videoIdBigBgGsap.play();
        vimeoPlayerBig.play();
        // vimeoPlayerBig.play().then(function() {
        //   // the video was played
        // }).catch(function(error) {
        //     switch (error.name) {
        //         case 'PasswordError':
        //             // the video is password-protected and the viewer needs to enter the
        //             // password first
        //             break;
        
        //         case 'PrivacyError':
        //             // the video is private
        //             break;
        
        //         default:
        //             // some other error occurred
        //             break;
        //     }
        // });
      },
      onLeave: () => {
        
        videoIdBigBgGsap.reverse();
        vimeoPlayerBig.unload();
      //   vimeoPlayerBig.unload().then(function() {
      //     // the video was paused
      // }).catch(function(error) {
      //     switch (error.name) {
      //         case 'PasswordError':
      //             // the video is password-protected and the viewer needs to enter the
      //             // password first
      //             break;
      
      //         case 'PrivacyError':
      //             // the video is private
      //             break;
      
      //         default:
      //             // some other error occurred
      //             break;
      //     }
      // });
      },
      onLeaveBack: () => {
        videoIdBigBgGsap.reverse();
        vimeoPlayerBig.unload();
      //   vimeoPlayerBig.unload().then(function() {
      //     // the video was paused
      // }).catch(function(error) {
      //     switch (error.name) {
      //         case 'PasswordError':
      //             // the video is password-protected and the viewer needs to enter the
      //             // password first
      //             break;
      
      //         case 'PrivacyError':
      //             // the video is private
      //             break;
      
      //         default:
      //             // some other error occurred
      //             break;
      //     }
      // });
      },
      markers: false
    });
  }

 
    }
    controlVideos();
    function btnLottieFunc() {
      let btnPortfolio = document.querySelector(".btn-portfolio--js"),
      btnAbout = document.querySelector(".btn-about--js");
      if (btnPortfolio) {
        function btnPortfolioHover() {
          const btnPortfolioAnim = lottie.loadAnimation({
            container: btnPortfolio,
            renderer: "svg",
            loop: false,
            autoplay: false,
            path: nozomiData.rootUrl + "/assets/lottie/button_portfolio.json"
          });
    
          btnPortfolio.addEventListener("mouseenter", () => {
            if(!btnPortfolio.classList.contains("active")){
              btnPortfolio.classList.add("active");
              btnPortfolioAnim.playSegments([0, 30], true);
            }
          });
    
          btnPortfolio.addEventListener("mouseleave", () => {
            if(btnPortfolio.classList.contains("active")){
              btnPortfolio.classList.remove("active");
              btnPortfolioAnim.playSegments([31, 60], true);
            }
          });
    
          btnPortfolio.addEventListener("click", () => {
            if(btnPortfolio.classList.contains("active")){
              btnPortfolio.classList.remove("active");
              btnPortfolioAnim.playSegments([31, 60], true);
            }
          });    
    
        }
        if (btnPortfolio !== null) {
          btnPortfolioHover();
        }
      }
      if (btnAbout) {
        function btnAboutHover() {
          const btnAboutAnim = lottie.loadAnimation({
            container: btnAbout,
            renderer: "svg",
            loop: false,
            autoplay: false,
            path: nozomiData.rootUrl + "/assets/lottie/button_about.json"
          });
    
          btnAbout.addEventListener("mouseenter", () => {
            if(!btnAbout.classList.contains("active")){
              btnAbout.classList.add("active");
              btnAboutAnim.playSegments([0, 30], true);
            }
          });
    
          btnAbout.addEventListener("mouseleave", () => {
            if(btnAbout.classList.contains("active")){
              btnAbout.classList.remove("active");
              btnAboutAnim.playSegments([31, 60], true);
            }
          });
          btnAbout.addEventListener("click", () => {
            if(btnAbout.classList.contains("active")){
              btnAbout.classList.remove("active");
              btnAboutAnim.playSegments([31, 60], true);
            }
          });
    
        }
        if (btnAbout !== null) {
          btnAboutHover();
        }
      }
    }
    btnLottieFunc();
  }
 }
