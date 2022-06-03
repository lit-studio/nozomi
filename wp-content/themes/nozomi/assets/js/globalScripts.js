import { gsap } from "gsap";
import lottie from "lottie-web";

import header from "./components/c-header";
import footer from "./components/c-footer";
import tab from "./components/c-tab";

export default function () {
  let $body = $('body'),
  $preloaderBlock = $body.find('.preloader--js'),
  $preloaderBg = $body.find('.preloader-bg--js'),
  $preloaderLink = $preloaderBlock.find('.preloader-link'),
  $preloaderClose = $preloaderBlock.find('.preloader-close--js'),
  $preloaderLineWrap = $preloaderBlock.find('.preloader-desc-line .preloader-desc-line-wrap--js'),
  $preloaderDescCursive = $preloaderBlock.find('.preloader-desc-cursive'),
  $preloaderBoldLine = $preloaderBlock.find('.preloader-bold-line--js')
 
  
  
  ;

    function preloaderFunc() {
      $body.addClass('preloader-active');

      let preloaderLineAnim = gsap
      .timeline({
        paused: true
      })
      .from($preloaderLineWrap, {
        duration: 1,
        opacity: 0,
        yPercent:100,
        stagger: 0.1,
        ease: 'expo.easeOut',
      }, "-=3");

      let preloaderLineBoldAnim = gsap
      .timeline({
        paused: true
      })
      .from($preloaderBoldLine, {
        duration: 1,
        opacity: 0,
        yPercent:100,
        ease: 'expo.easeOut',
      });

      let preloaderGsapAnim =  gsap.timeline({
        paused: true,
      })
        .from($preloaderLink, 0.3, { autoAlpha: 0,
            onComplete: () => {
              preloaderLineAnim.play();
            }
          })
        .from($preloaderDescCursive, 0.3, { xPercent: -10 },'')
        .from($preloaderDescCursive, 0.3, { autoAlpha: 0,
          onComplete: () => {
            preloaderLineBoldAnim.play();
          }
         },'<')
      ;
      let preloaderOutGsapAnim =  gsap.timeline({
        paused: true,
      })
        .to($preloaderBlock, 2, { yPercent: -100})
        .to($preloaderBg , 1, { autoAlpha: 0,
          onComplete: () => {

            $preloaderBg.addClass('preloader-bg-hidden');
        }
        },'<')
      ;
      $preloaderClose.on('click', function () {
        $body.removeClass('preloader-active');
        preloaderOutGsapAnim.play();
        // $preloaderBg.addClass('preloader-bg-hidden');
      });
      // window.scrollTo(0, 0);
      // $(window).scrollTop(0);
      // setTimeout(function(){
      //   // $(window).scrollTop(0);
      //   $preloaderBlock.fadeOut(1000);
      // }, 100);

      // window.addEventListener("load", function(){
      //   $(window).scrollTop(0);
      //   setTimeout(function(){
      //     // $(window).scrollTop(0);
      //     $preloaderBlock.fadeOut(1000);
      //   }, 100);
      // });

      window.addEventListener("load", function(){
        setTimeout(function(){
          $('html,body').scrollTop(0);
          preloaderGsapAnim.play();
          // gsap.to($preloaderBlock, 0.5, { autoAlpha: 0 },'');
      }, 500);
      });
    }
    let $window = $(window),
    $indexHome = $('.index-home'),
    winHeight = $window.height();
    // winHeightScreen = screen.height;
    if (winHeight > 560) {
      if (winHeight > 700) {
        $indexHome.addClass('mobile-height');
      }
      else{
        $indexHome.addClass('mobile-middle');
      }
    }

    preloaderFunc();
    header();
    footer();
    tab();

    function screenReload() {
      let widthScreen = screen.width;
      let  widthScreenNew;
      window.addEventListener("resize", () => {
        widthScreenNew = screen.width;

        if (widthScreenNew !== widthScreen) {
          location.reload();
        }

      });
    }
    screenReload();

}
