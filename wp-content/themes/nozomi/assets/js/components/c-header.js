import { gsap } from "gsap";
import lottie from "lottie-web";
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger)

export default function () {
  console.log( 'header' );
  let   $body = $("body"),
    $window = $(window),
    $header = $(".c-header--js"),
    $logoHeader = $header.find(".c-header-logo-item"),
    $menuBtn = $header.find(".btn-menu--js"),
    $menuBg = $header.find(".c-header-bg--js"),
    $menuBlock = $header.find(".c-header-menu--js"),
    $headerTrigger = $header.find(".c-header-trigger--js"),
    $aboutTrigger = $body.find(".about-trigger--js"),
    menuBtn = document.querySelector(".btn-menu--js");

    let logoHeaderAnim = gsap
    .timeline({
      paused: true
    })
    .to($logoHeader, 0.3, { yPercent: -200, ease: "linear" });

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
    let modalMenuAnim = gsap
        .timeline({
          paused: true
        })
        .to($menuBlock, 0.3, { autoAlpha: 1 },'')
        .from($menuBlock, 0.3, { yPercent: -200 },'')
        .from($menuBg, 0.3, { yPercent: -100 },'<');


    $menuBtn.on("click", function () {
      if (!$menuBtn.hasClass('open')) {
        menuBtnAnim.playSegments([30, 63], true);
        $menuBtn.addClass("open");
        $header.addClass("open");
        modalMenuAnim.play();
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
    });

    $(document).on('click', function(e) {
      if (!$(e.target).closest(".c-header--js").length) {
        if ($menuBtn.hasClass('open')) {
          menuBtnAnim.playSegments([63, 0], true);
          $menuBtn.removeClass("open");
          $header.removeClass("open");
          modalMenuAnim.reverse();
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
    gsap.to("#cursor", 0.8,{ x : e.clientX + 10 , y : e.clientY + 10
      // css: {
      //   left: e.clientX,
      //   top: e.clientY
      //   // left: e.clientX + 10,
      //   // top: e.clientY + 10
      // }
      , ease:"power2.out"
    });
   }


  if (screen.width > 1024) {
    console.log('mouseMoveCursor(e)');
    window.addEventListener("mousemove", mouseMoveCursor);
  }

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
