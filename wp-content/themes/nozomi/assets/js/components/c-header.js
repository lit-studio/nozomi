import { gsap } from "gsap";


export default function () {
  console.log( 'header' );
  let   $body = $("body"),
    $window = $(window),
    $header = $(".c-header--js"),
    $mobileMenuBtn = $header.find(".btn-menu--js"),
    $mobileMenuBg = $header.find(".c-header-mobile-bg--js"),
    $mobileMenu = $header.find(".c-header-mobile--js"),
    $mobileMenuWrap = $header.find(".c-header-mobile-wrap");






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

  mobileMenu();

}
