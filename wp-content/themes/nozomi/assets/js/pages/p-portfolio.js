import { gsap } from "gsap";
import VimeoPlayer from '@vimeo/player';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);
export default function () {
    console.log("portfolio");
  
    let $body = $('body'),
    $cursorBlock = $body.find(".cursor-dot"),
    $indexSection = $body.find('.index-portfolio'),
    $navSection = $body.find('.nav'),
    $navSectionItem = $navSection.find('.menu-item'),
    $navTrigger = $body.find('.portfolios'),
    $footer = $body.find('.c-footer'),
    $navWrap = $navSection.find('.nav-wrap'),
    $navMobileBtn = $navSection.find('.nav-mobile-btn--js'),
    $navMobileBtnText = $navMobileBtn.find('.nav-mobile-btn-text'),
    $navMobileBlock = $navSection.find('.nav-menu--js'),
    $navMobileBg = $navSection.find('.nav-menu-bg--js'),
    $section = $body.find('.gsap-anim--js'),
    $sectionNav = $body.find('.gsap-nav--js'),
    $navMobileBtns = $navSection.find('.nav-mobile-btns'),  
    indexSectionHeight = $indexSection.innerHeight(),
    navHeight = $navMobileBlock.innerHeight(),
    navTriggerHeight = $navTrigger.innerHeight(),
    windowHeight =  $(window).innerHeight(),
    navStopHeight = navHeight,
    // navStopHeight = $body.find('.nav-menu-stop').height() + navHeight,
    // navTriggerPath = navTriggerHeight - navStopHeight,
    // anchorStart = indexSectionHeight - navStopHeight,
    anchorStart,anchorEnd,navTriggerStart,navTriggerEnd,
    navMobileActive,navMobileAnim,sectionFromGsap,sectionToGsap

  ;
  anchorStart = indexSectionHeight - navStopHeight;
  anchorEnd = indexSectionHeight - navStopHeight;

  // console.log('navHeight ' + navHeight );
  // console.log('navStopHeight ' + navStopHeight );
  // console.log('anchorStart ' + anchorStart );
  // console.log('navTriggerPath ' + navTriggerPath );
  if (indexSectionHeight > windowHeight) {
    navTriggerStart = + navHeight;
    navTriggerEnd = 'bottom';
    console.log('indexSectionHeight > windowHeight');
  }
  else{
    navTriggerStart = 'top';
    navTriggerEnd = navTriggerHeight - navStopHeight;
    console.log('indexSectionHeight < windowHeight');
    console.log('navTriggerEnd ' + navTriggerEnd);
  }

  console.log('windowHeight ' +  windowHeight );
  console.log('navTriggerHeight ' + navTriggerHeight );
  console.log('navStopHeight ' + navStopHeight );

  let $sidebarLink = $navMobileBlock.find('a');

    if (screen.width > 1024) {

      sectionToGsap = gsap
      .timeline({
        paused: true
      })
      .to($section, 0.5, { opacity: 0 },'')
      .to($section, 1, { y: -200 },'<')
      .to($sectionNav, 0.5, { opacity: 0 },'')
      .to($sectionNav, 1, { y: -200 },'<')
      ;
      // sectionFromGsap = gsap
      // .timeline({
      //   paused: true
      // })
      // .from($section, 0.5, { opacity: 0 , delay: 0.5},'')
      // .from($section, 1, { y: 200 },'<')
      // .from($sectionNav, 0.5, { opacity: 0 , delay: 0.5},'')
      // .from($sectionNav, 1, { y: 200 },'<')
      // ;
    }
    else{

      sectionToGsap = gsap
      .timeline({
        paused: true
      })
      .to($section, 0.5, { opacity: 0 },'')
      .to($section, 1, { y: -200 },'<')
      ;

      // sectionFromGsap = gsap
      // .timeline({
      //   paused: true
      // })
      // .from($section, 0.5, { opacity: 0 , delay: 0.5},'')
      // .from($section, 1, { y: 200 },'<')
      // ;
    }


  // sectionFromGsap.play();



  if (screen.width > 1024) {
    function navScrollFunc() { 
      ScrollTrigger.create({
        trigger: $navTrigger,
        // start: "top " + anchorStart,
        // end: navTriggerPath + " " + anchorStart,
        start: navTriggerStart + " " + anchorStart,
        // end: "bottom " + anchorStart,
        end: navTriggerEnd + " " + anchorStart,
        pin:  $navWrap,
        scrub: true,
        toggleActions: "play reverse none reverse",
        markers: false,
      });

    }
    navScrollFunc();
    $sidebarLink.on("click", function(event) {
      // console.log('click');
      event.preventDefault();
      sectionToGsap.play();
      setTimeout(() => {
        window.location = $(this).attr("href");
      }, 800);
    });
  }
  else{
    navMobileAnim = gsap
    .timeline({
      paused: true
    })
    .from($navMobileBg, 0.01, { yPercent: 100,  ease: 'linear' },'')
    .from($navMobileBg, 0.3, { opacity: 0,  ease: 'expo.easeOut' },'')
    .from($navMobileBlock, 0.3, { yPercent: 100,  ease: 'expo.easeOut' },'<')
    ;
    function navScrollMobileFunc() {
      ScrollTrigger.create({
        trigger: $footer,
        start: "top bottom",
        end: "bottom top",
        scrub: true,
        toggleActions: "play reverse none reverse",
        toggleClass: {className: "fixed", targets: ".nav"},
        markers: false,
      });

    }
    navScrollMobileFunc();
    function navMobileFunc() {
      // navMobileActive = $navMobileBlock.find('.current-menu-item').text();
      if ($navSectionItem.hasClass('current-menu-item')) {
        navMobileActive = $navMobileBlock.find('.current-menu-item a').text();
      }
      else{
        navMobileActive = 'All works';
      }
      // console.log(navMobileActive);
      $navMobileBtnText.html(navMobileActive);
      $navMobileBtn.on("click", function () {
        navMobileAnim.play();
        $navMobileBtns.addClass('hidden');
      });  
      $navMobileBg.on("click", function () {
        navMobileAnim.reverse();
        $navMobileBtns.removeClass('hidden');
      });  
      $sidebarLink.on("click", function(event) {
        // console.log('click');
        event.preventDefault();
        navMobileAnim.reverse();
        sectionToGsap.play();
        setTimeout(() => {
          window.location = $(this).attr("href");
        }, 800);
      });
    }
    navMobileFunc();
  }
  function controlVideosPortfolio() {

    let iframesBig = document.querySelectorAll(".video-big--js");
    let videoPlayerLayoutBig,videoIdBig,vimeoPlayerBig,videoIdBigBgGsap,videoIdBigBg;


    for ( var i = 0; i < iframesBig.length; i++) {
      // btnArray[i].addEventListener('click', btnEvent, false);
      videoIdBig = iframesBig[i].getAttribute('data-set-vimeo-id');
      videoPlayerLayoutBig =  iframesBig[i].querySelector('.video-big--layout--js');
      videoIdBigBg = iframesBig[i].querySelector('.video-big-bg--js')
      // videoIdBigBgGsap[i] =  gsap.timeline({
      //     paused: true,
      //   })
      //       .to(videoIdBigBg, 0.5, {  opacity: 0, ease:"expo.easeInOut" },'')
      //   ;
      console.log('i '+ i);
      console.log('videoIdBig ' + videoIdBig);
      vimeoPlayerBig = new VimeoPlayer(iframesBig[i],{
        id: videoIdBig,
        width: '100%',
        height: '100%',
        muted:	true,
        loop: true,
        controls:	false,
        quality:	false
      });
      vimeoPlayerBig.loadVideo(videoIdBig);
      if (screen.width > 1024) {
        console.log('desk');
        videoPlayerLayoutBig.addEventListener("mouseenter", () => {
          videoPlayerLayoutBig.classList.add("hover");
          // videoIdBigBgGsap[i].play();
          // $(this).addClass('hover')
          if (!$cursorBlock.hasClass('video')) {
            $cursorBlock.addClass("video");
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
          // videoIdBigBgGsap.reverse();
          videoPlayerLayoutBig.classList.remove("hover");
          // $(this).removeClass('hover')
          if ($cursorBlock.hasClass('video')) {
            $cursorBlock.removeClass("video");
          }
          vimeoPlayerBig.unload().then(function() {
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
        if (screen.width > 768) {
          console.log('tablet ');
        }
        else{
          console.log('mobile ');
        }

        
        ScrollTrigger.create({
          trigger:  iframesBig[i],
          start: "top bottom",
          end: "bottom top",
          scrub: false,
          toggleActions: "play reverse none reverse",
          markers: true,
          onEnter: () => {
            // videoIdBigBgGsap.play();
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
            // videoIdBigBgGsap.play();
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
            // videoIdBigBgGsap.reverse();
            vimeoPlayerBig.unload().then(function() {
              // the video was paused
          }).catch(function(error) {
              switch (error.name) {
                  case 'PasswordError':
                      break;
          
                  case 'PrivacyError':

                      break;
          
                  default:
                      // some other error occurred
                      break;
              }
          });
          },
          onLeaveBack: () => {
            // videoIdBigBgGsap.reverse();
            vimeoPlayerBig.unload().then(function() {
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

        });
      }
    };

    // let iframesBig = document.querySelector('.video-big--js');
    // let videoPlayerLayoutBig = document.querySelector('.video-big--layout--js');
    // let videoIdBig = iframesBig.getAttribute('data-set-vimeo-id');
//     let vimeoPlayerBig = new VimeoPlayer(iframesBig,{
//       id: videoIdBig,
//       width: '100%',
//       height: '100%',
//       muted:	true,
//       loop: true,
//       controls:	false,
//       quality:	false
//     });
//     vimeoPlayerBig.loadVideo(videoIdBig);

// if (screen.width > 1024) {
//   console.log('desk');
//   videoPlayerLayoutBig.addEventListener("mouseenter", () => {
//     // videoIdBigBgGsap.play();
//     if (!$cursorBlock.hasClass('video')) {
//       $cursorBlock.addClass("video");
//     }
//     vimeoPlayerBig.play().then(function() {
//       // the video was played
//     }).catch(function(error) {
//         switch (error.name) {
//             case 'PasswordError':
//                 // the video is password-protected and the viewer needs to enter the
//                 // password first
//                 break;
    
//             case 'PrivacyError':
//                 // the video is private
//                 break;
    
//             default:
//                 // some other error occurred
//                 break;
//         }
//     });
//   });

//   videoPlayerLayoutBig.addEventListener("mouseleave", () => {
//     // videoIdBigBgGsap.reverse();
//     if ($cursorBlock.hasClass('video')) {
//       $cursorBlock.removeClass("video");
//     }
//     vimeoPlayerBig.unload().then(function() {
//       // the video was played
//     }).catch(function(error) {
//         switch (error.name) {
//             case 'PasswordError':
//                 // the video is password-protected and the viewer needs to enter the
//                 // password first
//                 break;
    
//             case 'PrivacyError':
//                 // the video is private
//                 break;
    
//             default:
//                 // some other error occurred
//                 break;
//         }
//     });
//   });

// }
// else{
//   ScrollTrigger.create({
//     trigger:  iframesBig,
//     start: "top bottom",
//     end: "bottom top",
//     scrub: false,
//     toggleActions: "play reverse none reverse",
//     markers: true,
//     onEnter: () => {
//       videoIdBigBgGsap.play();
//       vimeoPlayerBig.play().then(function() {
//         // the video was played
//       }).catch(function(error) {
//           switch (error.name) {
//               case 'PasswordError':
//                   // the video is password-protected and the viewer needs to enter the
//                   // password first
//                   break;
      
//               case 'PrivacyError':
//                   // the video is private
//                   break;
      
//               default:
//                   // some other error occurred
//                   break;
//           }
//       });
//     },
//     onEnterBack: () => {
//       videoIdBigBgGsap.play();
//       vimeoPlayerBig.play().then(function() {
//         // the video was played
//       }).catch(function(error) {
//           switch (error.name) {
//               case 'PasswordError':
//                   // the video is password-protected and the viewer needs to enter the
//                   // password first
//                   break;
      
//               case 'PrivacyError':
//                   // the video is private
//                   break;
      
//               default:
//                   // some other error occurred
//                   break;
//           }
//       });
//     },
//     onLeave: () => {
      
//       // videoIdBigBgGsap.reverse();
//       vimeoPlayerBig.unload().then(function() {
//         // the video was paused
//     }).catch(function(error) {
//         switch (error.name) {
//             case 'PasswordError':
//                 break;
    
//             case 'PrivacyError':

//                 break;
    
//             default:
//                 // some other error occurred
//                 break;
//         }
//     });
//     },
//     onLeaveBack: () => {
//       videoIdBigBgGsap.reverse();
//       vimeoPlayerBig.unload().then(function() {
//         // the video was paused
//     }).catch(function(error) {
//         switch (error.name) {
//             case 'PasswordError':
//                 // the video is password-protected and the viewer needs to enter the
//                 // password first
//                 break;
    
//             case 'PrivacyError':
//                 // the video is private
//                 break;
    
//             default:
//                 // some other error occurred
//                 break;
//         }
//     });
//     },
//     markers: false
//   });
// }


  }
  controlVideosPortfolio();
}
