import { gsap } from "gsap";
import lottie from "lottie-web";

export default function () {
  console.log( 'header' );
  let   $body = $("body"),
    $window = $(window),
    $header = $(".c-header--js"),
    $menuBtn = $header.find(".btn-menu--js"),
    $menuBg = $header.find(".c-header-mobile-bg--js"),
    $menuBlock = $header.find(".c-header-mobile--js"),
    $menuWrap = $header.find(".c-header-mobile-wrap");

    let menuBtn = document.querySelector(".btn-menu--js");
    const menuBtnAnim = lottie.loadAnimation({
      container: menuBtn,
      renderer: "svg",
      loop: false,
      autoplay: false,
      path: nozomiData.rootUrl + "/assets/lottie/btn_menu.json"
    });
    function menuBtnHover() {
      if (!menuBtn.querySelector("svg")) {
          menuBtn.addEventListener("mouseenter", () => {
            menuBtnAnim.playSegments([0, 30], true);
          });
    
          menuBtn.addEventListener("mouseleave", () => {
            menuBtnAnim.playSegments([30, 0], true);
          }); 
      }

    }
    menuBtnHover();


  function mobileMenu() {
    let modalMenuAnim = gsap
        .timeline({
          paused: true
        })
        .to($mobileMenu, 0.3, { autoAlpha: 1 })
        .from($mobileMenuWrap, 0.3, { xPercent: 100 },'<');


    $mobileMenuBtn.on("click", function () {
      if (!$mobileMenuBtn.hasClass('open')) {
        $header.removeClass('open-submenu page-fixed');
        $mobileMenuBtn.addClass("open");
        $body.addClass("opened-mobile-menu page-fixed");
        $mobileMenu.addClass("open");
        $mobileMenuBg.addClass("open");
        modalMenuAnim.play();

      } else {
        $mobileMenuBtn.removeClass("open");
        $body.removeClass("opened-mobile-menu");
        $body.removeClass('page-fixed');
        $mobileMenu.removeClass("open");
        modalMenuAnim.reverse();


      }
    });


  }

  // mobileMenu();

}
