import { gsap } from "gsap";

import header from "./components/c-header";
import footer from "./components/c-footer";
import tab from "./components/c-tab";

export default function () {
  let $body = $('body'),
  $preloaderBlock = $body.find('.preloader--js'),
  $preloaderBg = $body.find('.preloader-bg--js'),
  // $preloaderLink = $preloaderBlock.find('.preloader-link'),
  $preloaderClose = $preloaderBlock.find('.preloader-close--js'),
  $preloaderLineOne = $preloaderBlock.find('.preloader-desc-line-1--js'),
  $preloaderLineTwo = $preloaderBlock.find('.preloader-desc-line-2--js'),
  $preloaderLineThree = $preloaderBlock.find('.preloader-desc-line-3--js'),
  $preloaderLineFour = $preloaderBlock.find('.preloader-desc-line-4--js'),
  $preloaderDescCursive = $preloaderBlock.find('.preloader-desc-cursive'),
  $preloaderBoldLine = $preloaderBlock.find('.preloader-bold-line--js'),
  $section = $body.find('.gsap-anim--js'),
  $sectionNav = $body.find('.gsap-nav--js'),
  sectionFromGsap
  ;
  if (screen.width > 1024) {


    if($sectionNav.length > 0){
      console.log('blog or portfolio');
      sectionFromGsap = gsap
      .timeline({
        paused: true
      })
      .from($section, 0.5, { opacity: 0 },'')
      .from($section, 1, { y: 200 },'<')
      .from($sectionNav, 0.5, { opacity: 0 },'')
      .from($sectionNav, 1, { y: 200 },'<')
      ;
    }
    else{
      console.log('not blog or portfolio');
      sectionFromGsap = gsap
      .timeline({
        paused: true
      })
      .from($section, 0.5, { opacity: 0 },'')
      .from($section, 1, { y: 200 },'<')
      ;
    }
  }
  else{
    sectionFromGsap = gsap
    .timeline({
      paused: true
    })
    .from($section, 0.5, { opacity: 0 },'')
    .from($section, 1, { y: 200 },'<')
    ;
  }
  // sectionFromGsap = gsap
  // .timeline({
  //   paused: true
  // })
  // .from($section, 0.5, { opacity: 0 , delay: 0.5},'')
  // .from($section, 1, { y: 200 },'<')
  // ;


    function preloaderFunc() {
      $body.addClass('preloader-active');

      let preloaderGsapAnim = gsap
      .timeline({
        paused: true
      })
      .from($preloaderClose, {
        duration: 0.5,
        opacity: 0,
        ease: 'expo.easeOut',
      })
      .from($preloaderLineOne, {
        duration:  0.5,
        opacity: 0,
        yPercent:100,
        ease: 'expo.easeOut',
      },'<')
      .from($preloaderLineTwo, {
        duration:  0.5,
        opacity: 0,
        yPercent:100,
        ease: 'expo.easeOut',
      })
      .from($preloaderLineThree, {
        duration:  0.5,
        opacity: 0,
        yPercent:100,
        ease: 'expo.easeOut',
      })
      .from($preloaderLineFour, {
        duration:  0.5,
        opacity: 0,
        yPercent:100,
        ease: 'expo.easeOut',
      })
      .from($preloaderDescCursive, {
        duration: 0.5,
        opacity: 0,
        xPercent:100,
        ease: 'expo.easeOut',
      })
      .from($preloaderBoldLine, {
        duration:  0.5,
        opacity: 0,
        yPercent:100,
        ease: 'expo.easeOut',        
        onComplete: () => {
          preloaderOutGsapAnim.play();
      }
      })
      ;

      // let preloaderLineBoldAnim = gsap
      // .timeline({
      //   paused: true
      // })
      // .from($preloaderBoldLine, {
      //   duration: 1,
      //   opacity: 0,
      //   yPercent:100,
      //   ease: 'expo.easeOut',
      // });

      // let preloaderGsapAnim =  gsap.timeline({
      //   paused: true,
      // })
      //   .from($preloaderLink, 0.3, { autoAlpha: 0,
      //       onComplete: () => {
      //         preloaderLineAnim.play();
      //       }
      //     })
      //   .from($preloaderDescCursive, 0.3, { xPercent: -10 },'')
      //   .from($preloaderDescCursive, 0.3, { autoAlpha: 0,
      //     onComplete: () => {
      //       preloaderLineBoldAnim.play();
      //     }
      //    },'<')
      // ;
      let preloaderOutGsapAnim =  gsap.timeline({
        paused: true,
      })
        .to($preloaderBlock, 2, { yPercent: -100})
        .to($preloaderBg , 1, { autoAlpha: 0,
          onComplete: () => {
            $body.removeClass('preloader-active');
            $preloaderBg.addClass('preloader-bg-hidden');
            sectionFromGsap.play();
        }
        },'<')
      ;
      $preloaderClose.on('click', function () {
        preloaderOutGsapAnim.play();
      });


      window.addEventListener("load", function(){
        setTimeout(function(){
          $('html,body').scrollTop(0);
          preloaderGsapAnim.play();

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
