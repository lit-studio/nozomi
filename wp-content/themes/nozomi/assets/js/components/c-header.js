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
        // $header.removeClass('open-submenu page-fixed');
        // $body.addClass("opened-mobile-menu page-fixed");
        // $header.addClass("open");
        modalMenuAnim.play();

        logoHeaderAnim.reverse();
      } else {
        menuBtnAnim.playSegments([63, 30], true);
        $menuBtn.removeClass("open");
        // $body.removeClass("opened-mobile-menu");
        // $body.removeClass('page-fixed');
        // $mobileMenu.removeClass("open");
        $header.removeClass("open");
        modalMenuAnim.reverse();
        logoHeaderAnim.play();
      }
    });


  }

  mobileMenu();

}
