import { gsap } from "gsap";
import VimeoPlayer from '@vimeo/player';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

export default function () {
    // console.log("portfolio");  
    let $body = $('body'),
    $cursorBlock = $body.find(".cursor-dot"),
    $indexSection = $body.find('.index-portfolio'),
    $navSection = $body.find('.nav'),
    $navSectionItem = $navSection.find('.menu-item'),
    $navTrigger = $body.find('.portfolios'),
    $itemWrapTrigger = $body.find('.item-wrap-trigger--js'),
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
    anchorStart,anchorEnd,navTriggerStart,navTriggerEnd,
    navMobileActive,navMobileAnim,sectionToGsap,
    iframesBig = document.querySelectorAll('.video-big--js'),
    $iframesBigBox = $body.find('.video--js'),
    videoPlayerLayoutBig = $body.find('.video-big--layout--js'),
    el,
    videoIdBig =[],
    vimeoPlayerBig =[];
  anchorStart = indexSectionHeight - navStopHeight;
  anchorEnd = indexSectionHeight - navStopHeight;
  if (indexSectionHeight > windowHeight) {
    navTriggerStart =  navHeight;
    navTriggerEnd = 'bottom';
  }
  else{
    navTriggerStart = 'top';
    navTriggerEnd = navTriggerHeight - navStopHeight;
  }

  let $sidebarLink = $navMobileBlock.find('a');

  if ($(window).width() > 1024) {

    sectionToGsap = gsap
    .timeline({
      paused: true
    })
    .to($section, 0.5, { opacity: 0 },'')
    .to($section, 1, { y: -200 },'<')
    .to($sectionNav, 0.5, { opacity: 0 },'')
    .to($sectionNav, 1, { y: -200 },'<')
    ;

  }
  else{

    sectionToGsap = gsap
    .timeline({
      paused: true
    })
    .to($section, 0.5, { opacity: 0 },'')
    .to($section, 1, { y: -200 },'<')
    ;

  }

  if ($(window).width() > 1024) {
    function navScrollFunc() { 
      ScrollTrigger.create({
        trigger: $navTrigger,
        start: navTriggerStart + " " + anchorStart,
        end: navTriggerEnd + " " + anchorStart,
        pin:  $navWrap,
        scrub: true,
        toggleActions: "play reverse none reverse",
        markers: false,
      });

    }
    navScrollFunc();
    $sidebarLink.on("click", function(event) {
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
    .from($navMobileBlock, 0.3, { yPercent: 160,  ease: 'expo.easeOut' },'<')
    ;
    if ($(window).width() > 640) {
      function navScrollMobileFunc() {
        ScrollTrigger.create({
          trigger: $footer,
          start: "-20px bottom",
          end: "bottom top",
          scrub: true,
          toggleActions: "play reverse none reverse",
          toggleClass: {className: "fixed", targets: ".nav"},
          markers: false,
        });  
      }
      navScrollMobileFunc();
    }
    else{
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
    }




    function navMobileFunc() {
      if ($navSectionItem.hasClass('current-menu-item')) {
        navMobileActive = $navMobileBlock.find('.current-menu-item a').text();
      }
      else{
        navMobileActive = 'All works';
      }
      $navMobileBtnText.html(navMobileActive);
      $navMobileBtn.on("click", function () {
        navMobileAnim.play();
        $navMobileBtns.addClass('hidden');
        $body.addClass('open-nav');

      });  
      $navMobileBg.on("click", function () {
        $body.removeClass('open-nav');
        navMobileAnim.reverse();
        $navMobileBtns.removeClass('hidden');
        
      });  
      $sidebarLink.on("click", function(event) {
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
      if ($(window).width() > 1024) {        
        for ( i = 0; i < iframesBig.length; i++) {
          videoIdBig[i] = iframesBig[i].getAttribute('data-set-vimeo-id');
          iframesBig[i].setAttribute('data-loop', i);
          vimeoPlayerBig[i] = new VimeoPlayer(iframesBig[i],{
            id: videoIdBig[i],
            width: '100%',
            height: '100%',
            muted:	true,
            loop: true,
            controls:	false,
           });
           vimeoPlayerBig[i].play().then(function() {
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
           vimeoPlayerBig[i].pause();
           vimeoPlayerBig[i].unload();
        }
        $itemWrapTrigger.each(function () {
          let $this = $(this);
          $this.hover(() => {
            if ( $this.find($iframesBigBox).length > 0 ) {
              if (!$cursorBlock.hasClass('video')) {
                $cursorBlock.addClass("video");
              }
              el = $this.find($iframesBigBox).attr('data-loop');
              $this.find(videoPlayerLayoutBig).addClass('hover');
              vimeoPlayerBig[el].play();
            }

          }, () => {
            if ( $this.find($iframesBigBox).length > 0 ) {
              $cursorBlock.removeClass("video");
              $this.find(videoPlayerLayoutBig).removeClass('hover');
              vimeoPlayerBig[el].unload();
            }
          });
        });

      }
      else{
        if ($(window).width() > 768) {
          for ( var i = 0; i < iframesBig.length; i++) {
            videoIdBig[i] = iframesBig[i].getAttribute('data-set-vimeo-id');
            iframesBig[i].setAttribute('data-loop', i);
            vimeoPlayerBig[i] = new VimeoPlayer(iframesBig[i],{
              id: videoIdBig[i],
              width: '100%',
              height: '100%',
              muted:	true,
              loop: true,
              controls:	false

            });
          }
          gsap.utils.toArray($iframesBigBox).forEach(section => {
            ScrollTrigger.create({
              trigger: section,
              start: "top center",
              end: "bottom center",
              pin: false,
              scrub: true,
              toggleActions: "play reverse none reverse",
              markers: false,
              toggleClass: {targets: section, className: "active"},
              onEnter: () => {
                el = $iframesBigBox.filter('.active').attr('data-loop');
                $iframesBigBox.filter('.active').find(videoPlayerLayoutBig).addClass('hover');
                vimeoPlayerBig[el].play();
              },
              onEnterBack: () => {
                el = $iframesBigBox.filter('.active').attr('data-loop');
                  $iframesBigBox.filter('.active').find(videoPlayerLayoutBig).addClass('hover');
                vimeoPlayerBig[el].play();
              },
              onLeave: () => {         
                videoPlayerLayoutBig.removeClass('hover');
                vimeoPlayerBig[el].unload();
              },
              onLeaveBack: () => {
                videoPlayerLayoutBig.removeClass('hover');
                vimeoPlayerBig[el].unload();
              },
            });
          });
        }
        else{
          // console.log('mobile');
        }

       
      }

 }
  controlVideosPortfolio();
}
