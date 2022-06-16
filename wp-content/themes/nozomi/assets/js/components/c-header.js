import { gsap } from "gsap";
import lottie from "lottie-web";
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger)

export default function () {
  console.log( 'header' );
  let   $body = $("body"),
    $header = $(".c-header--js"),
    $logoHeader = $header.find(".c-header-logo-item"),
    $menuBtn = $header.find(".btn-menu--js"),
    $menuBg = $header.find(".c-header-bg--js"),
    $menuBlock = $header.find(".c-header-menu--js"),
    $menuBlockMobile = $header.find(".c-header-mobile--js"),
    $headerTrigger = $header.find(".c-header-trigger--js"),
    $aboutTrigger = $body.find(".about-trigger--js"),
    menuBtn = document.querySelector(".btn-menu--js");

    let $links = $menuBlock.find('.menu-item'),
    $linkskMobile = $menuBlockMobile.find('.menu-item'),
    modalMenuAnim
    ;
    
    let linksAnim = gsap
    .timeline({
      paused: true
    })
    .from($links, {
      duration: 1,
      opacity: 0,
      yPercent: -10,
      stagger: 0.1,
      ease: 'expo.easeOut',
    }, "-=3");

    let linksAnimMobile = gsap
    .timeline({
      paused: true
    })
    .from($linkskMobile, {
      duration: 1,
      opacity: 0,
      yPercent: -10,
      stagger: 0.1,
      ease: 'expo.easeOut',
    }, "-=3");
    
    let logoHeaderAnim = gsap
    .timeline({
      paused: true
    })
    .to($logoHeader, 0.3, { yPercent: -300, ease: "linear" });

    const menuBtnAnim = lottie.loadAnimation({
      container: menuBtn,
      renderer: "svg",
      loop: false,
      autoplay: false,
      path: nozomiData.rootUrl + "/assets/lottie/btn_menu.json"
    });
    function menuBtnHover() {
      $menuBtn.hover(() => {
        if (!$menuBtn.hasClass('open')) {
          menuBtnAnim.playSegments([0, 30], true);
        }
      }, () => {
        if (!$menuBtn.hasClass('open')) {
          menuBtnAnim.playSegments([30, 0], true);
        }

      });
    }
    menuBtnHover();

    function scrollHeader() {

      ScrollTrigger.create({
        trigger: $headerTrigger,
        start: "top top",
        end: "bottom top",
        scrub: true,
        toggleActions: "play reverse none reverse",
        toggleClass: {className: 'header-fixed', targets: '.c-header--js'},
        onEnter: () => {
          if (!$menuBtn.hasClass('open')) {
            logoHeaderAnim.play();
          }
        },
        onEnterBack: () => {
          if (!$menuBtn.hasClass('open')) {
            logoHeaderAnim.play();
          }
        },
        onLeave: () => {
          if (!$menuBtn.hasClass('open')) {
            logoHeaderAnim.reverse();
          }         
        },
        onLeaveBack: () => {
          if (!$menuBtn.hasClass('open')) {
            logoHeaderAnim.reverse();
          }   
        },
        markers: false
      });
    }
    scrollHeader();

  function mobileMenu() {


        if (screen.width > 1024) {

          modalMenuAnim = gsap
          .timeline({
            paused: true
          })
          .to($menuBlock, 0.3, { autoAlpha: 1 },'')
          .from($menuBlock, 0.3, { yPercent: -200 },'')
          .from($menuBg, 0.3, { yPercent: -100 },'<');
        }
        else{

          modalMenuAnim = gsap
          .timeline({
            paused: true
          })
          .to($menuBlockMobile, 0.3, { autoAlpha: 1 },'')
          .from($menuBlockMobile, 0.3, { yPercent: -100 },'')
          .from($menuBg, 0.3, { yPercent: -100 },'<');
          $header.addClass('start');
        }
        
    $menuBtn.on("click", function () {

      if (screen.width > 1024) {
        linksAnim.play();
        if (!$menuBtn.hasClass('open')) {
          menuBtnAnim.playSegments([30, 63], true);
          $menuBtn.addClass("open");
          $header.addClass("open");
          modalMenuAnim.play();
          linksAnim.restart();
          // linksAnim.play();
          if ($header.hasClass('header-fixed')) {
            logoHeaderAnim.reverse();
          }
  
        } else {
          menuBtnAnim.playSegments([63, 30], true);
          $menuBtn.removeClass("open");
          $header.removeClass("open");
          modalMenuAnim.reverse();
          if ($header.hasClass('header-fixed')) {
            logoHeaderAnim.play();
          }
        }
      }
      else{
        linksAnimMobile.play();
        if (!$menuBtn.hasClass('open')) {
          menuBtnAnim.playSegments([30, 63], true);
          $menuBtn.addClass("open");
          $header.addClass("open");
          modalMenuAnim.play();
          linksAnimMobile.restart();
          if ($header.hasClass('header-fixed')) {
            logoHeaderAnim.reverse();
          }
  
        } else {
          menuBtnAnim.playSegments([63, 0], true);
          $menuBtn.removeClass("open");
          $header.removeClass("open");
          modalMenuAnim.reverse();
          linksAnimMobile.reverse();
          if ($header.hasClass('header-fixed')) {
            logoHeaderAnim.play();
          }
        }
      }

    });

    $(document).on('click', function(e) {
      if (!$(e.target).closest(".c-header--js").length) {
        if ($menuBtn.hasClass('open')) {
          menuBtnAnim.playSegments([63, 0], true);
          $menuBtn.removeClass("open");
          $header.removeClass("open");
          modalMenuAnim.reverse();
          linksAnim.reverse();
          if ($header.hasClass('header-fixed')) {
            logoHeaderAnim.play();
          }

        }
      }
      e.stopPropagation();
    });

  }

  mobileMenu();

  
  function mouseMoveCursor(e) {
    gsap.to("#cursor", 0.8,{ x : e.clientX , y : e.clientY
      , ease:"power2.out"
    });
   }


  if (screen.width > 1024) {
    window.addEventListener("mousemove", mouseMoveCursor);
  }
  if ($aboutTrigger.length > 0) {
    function burgerChange() {
      console.log( 'start bg animation' );
      ScrollTrigger.create({
        trigger: $aboutTrigger,
        scroller: "body",
        start: "top 80px",
        end: "bottom 80px",
        scrub: true,
        toggleActions: "play reverse none reverse",
        toggleClass: {className: 'inversion', targets: '.btn-menu--js'},
        markers: false
      });
    }
    burgerChange();
  }
}
