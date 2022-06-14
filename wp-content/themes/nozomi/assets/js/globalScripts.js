import { gsap } from "gsap";
import {SplitText} from "../libs/gsap-shockingly-green/src/SplitText";
gsap.registerPlugin(SplitText);

import header from "./components/c-header";
import footer from "./components/c-footer";
import tab from "./components/c-tab";

export default function () {
  let $body = $('body'),  
  $pHome = $(".p-home"),
  $indexPapperBg = $body.find(".papper-bg--js"),
  $preloaderBlock = $body.find('.preloader--js'),
  $preloaderBg = $body.find('.preloader-bg--js'),
  // $preloaderLink = $preloaderBlock.find('.preloader-link'),
  $preloaderClose = $preloaderBlock.find('.preloader-close--js'),
  $preloaderLineOne = $preloaderBlock.find('.preloader-desc-line-1--js'),
  $preloaderLineTwo = $preloaderBlock.find('.preloader-desc-line-2--js'),
  $preloaderLineThree = $preloaderBlock.find('.preloader-desc-line-3--js'),
  $preloaderLineFour = $preloaderBlock.find('.preloader-desc-line-4--js'),
  // $preloaderDescCursive = $preloaderBlock.find('.preloader-desc-cursive'),
  $preloaderBoldLine = $preloaderBlock.find('.preloader-bold-line--js'),
  $section = $body.find('.gsap-anim--js'),
  $sectionNav = $body.find('.gsap-nav--js'),
  windowHeight =  $(window).innerHeight(),
  windowHeightHalf =   windowHeight,
  sectionFromGsap,preloaderOutGsapAnim,preloaderGsapAnim
  ;

  
  console.log('windowHeightHalf' + windowHeightHalf);
  if($indexPapperBg.length > 0){
    function indexPapperFunc() {
      console.log('papper bg');
      const svg = document.querySelector("#demo");
      const tl = gsap.timeline();
      let pt = svg.createSVGPoint();
      const ratio = 0.5625;   
      
      tl.to("#masker", {duration: 2, attr:{r:2400}, ease:"power2.in"});
      tl.reversed(true);
      
      function mouseHandlerIndex() {
        tl.reversed(!tl.reversed());
      }
      
      function getPointIndex(evt){
        pt.x = evt.clientX; 
        pt.y = evt.clientY;
        return pt.matrixTransform(svg.getScreenCTM().inverse());
      }
      
      function mouseMoveIndex(evt) {
        let newPoint = getPointIndex(evt);
        gsap.to("#masker", 0.88, {attr:{cx:newPoint.x, cy:newPoint.y}, ease:"power2.out"});
       }   
  
      
      function newSizeIndex() {
        let w = window.innerWidth ;
        let h = window.innerHeight;
        if (w > h * (16/9) ) {
          gsap.set("#demo", { attr: { width: w, height: w * ratio } });
        } else {
          gsap.set("#demo", { attr: { width: h / ratio, height: h } });
        }
        let data = svg.getBoundingClientRect();
        gsap.set("#demo", {x:w/2 - data.width/2});
        gsap.set("#demo", {y:h/2 - data.height/2});
      }
      
      window.addEventListener("mousedown", mouseHandlerIndex);
      window.addEventListener("mouseup", mouseHandlerIndex);
      window.addEventListener("mousemove", mouseMoveIndex);
      
      newSizeIndex();
      window.addEventListener("resize", newSizeIndex);
    }
    indexPapperFunc()
  }
  // sectionFromGsap = gsap
  // .timeline({
  //   paused: true
  // })
  // .from($section, 0.5, { opacity: 0 , delay: 0.5},'')
  // .from($section, 1, { y: 200 },'<')
  // ;
  
  if($pHome.length > 0){
    console.log('home');
    sectionFromGsap = gsap
    .timeline({
      paused: true
    })
    .from($section, 2, { opacity: 0 },'')
    .from($section, 2, { y: windowHeightHalf, ease: 'power1.easeOut' },'<')
    ;
  }
  else{
    if (screen.width > 1024) {

      if($sectionNav.length > 0){
        console.log('blog or portfolio');
        sectionFromGsap = gsap
        .timeline({
          paused: true
        })
        .from($section, 1, { opacity: 0 },'+=0.4')
        .from($section, 1, { y: 200, ease: 'power1.easeOut'},'<')
        .from($sectionNav,1, { opacity: 0 },'')
        .from($sectionNav, 1, { y: 200, ease: 'power1.easeOut' },'<')
        ;
      }
      else{
        console.log('not blog or portfolio');
        sectionFromGsap = gsap
        .timeline({
          paused: true
        })
        .from($section, 1, { opacity: 0 },'+=0.4')
        .from($section, 1, {  y: 200, ease: 'power1.easeOut' },'<')
        ;
      }
    }
    else{
      sectionFromGsap = gsap
      .timeline({
        paused: true
      })
      .from($section, 1, { opacity: 0 },'+=0.4')
      .from($section, 1, { y: 200, ease: 'power1.easeOut' },'<')
      ;
    }
  }

  


    function preloaderFunc() {

      $('html,body').scrollTop(0);
      $body.addClass('preloader-active');

      let qoute = $body.find(".preloader-desc-cursive--js"),
      mySplitText = new SplitText(qoute, {
          type: "chars",
          charsClass: "char",
          position: "relative"
      }),
      chars = mySplitText.chars,
      charsGsapAnim = gsap
      .timeline({
        paused: true
      }).from(chars, {
        duration: 0.5,
        opacity: 0,
        ease: 'power1.easeOut',
        stagger: 0.09
      });
      
      preloaderGsapAnim = gsap
      .timeline({
        paused: true
      })
      .from($preloaderClose, {
        duration: 0.5,
        opacity: 0,
        ease: 'power1.easeOut',
        onStart: () => {
          $preloaderBlock.addClass('visible');
      }
      })
      .from($preloaderLineOne, {
        duration:  0.7,
        opacity: 0,
        yPercent:100,
        ease: 'power1.easeOut',
      },'<')
      .from($preloaderLineTwo, {
        duration:  0.5,
        opacity: 0,
        yPercent:100,
        ease: 'power1.easeOut',
      },'+=0.5')
      .from($preloaderLineThree, {
        duration:  0.7,
        opacity: 0,
        yPercent:100,
        ease: 'power1.easeOut',
      },'+=0.5')
      .from($preloaderLineFour, {
        duration:  0.7,
        opacity: 0,
        yPercent:100,
        ease: 'power1.easeOut',
        onComplete: () => {
          charsGsapAnim.play();
      }
      },'+=0.5')
      .from($preloaderBoldLine, {
        duration:  0.7,
        opacity: 0,
        yPercent:100,
        ease: 'power1.easeOut',        
        onComplete: () => {
          preloaderOutGsapAnim.play();
      }
      },'+=0.5')
      ; 

      preloaderOutGsapAnim =  gsap.timeline({
        paused: true,
      })
      .to($preloaderBlock, 2, { y: - windowHeightHalf,ease: 'power1.easeOut',
        onStart: () => {
          sectionFromGsap.play();
      }
      })
      .to($preloaderBg , 0.3, { autoAlpha: 0,
        onComplete: () => {
          $body.removeClass('preloader-active');
          $preloaderBg.addClass('preloader-bg-hidden');
          // takeCookie();
      }
      },'<');

      window.addEventListener("load", function(){
        setTimeout(function(){
          $('html,body').scrollTop(0);
          preloaderGsapAnim.play();

      }, 500);
      });
     $preloaderClose.on('click', function () {
        preloaderOutGsapAnim.play();
      }); 


      // if (getCookie('cookies')){
      //   console.log('we have cookie');
      //   $preloaderBlock.addClass('hidden');
      //   preloaderOutGsapAnim =  gsap.timeline({
      //     paused: true,
      //   })
      //     .to($preloaderBlock, 2, { yPercent: -100})
      //     .to($preloaderBg , 1, { autoAlpha: 0,
      //       onComplete: () => {
      //         $body.removeClass('preloader-active');
      //         $preloaderBg.addClass('preloader-bg-hidden');
      //         sectionFromGsap.play();
      //     }
      //     },'<')
      //   ;
      //   preloaderOutGsapAnim.play();


      // }
      // else{
      //   console.log('we have not cookie');    
      //   function takeCookie(){
      //     let d = new Date();
      //     let cookiesDays = 7;
      //     d.setTime(d.getTime() + (cookiesDays * 24 * 60 * 60 * 1000));
      //     let expires = "expires=" + d.toUTCString();
      //     document.cookie = "cookies=true" + ";" + expires + ";path=/";
      //   }  

      //   let qoute = $body.find(".preloader-desc-cursive--js"),
      //   mySplitText = new SplitText(qoute, {
      //       type: "chars",
      //       charsClass: "char",
      //       position: "relative"
      //   }),
      //   chars = mySplitText.chars,
      //   charsGsapAnim = gsap
      //   .timeline({
      //     paused: true
      //   }).from(chars, {
      //     duration: 0.5,
      //     opacity: 0,
      //     // scale: 0,
      //     // xPercent: -10,
      //     // rotationX: 180,
      //     // transformOrigin: "0% 50% -50",
      //     ease: 'expo.easeOut',
      //     stagger: 0.09
      //   });
        
      //   preloaderGsapAnim = gsap
      //   .timeline({
      //     paused: true
      //   })
      //   .from($preloaderClose, {
      //     duration: 0.5,
      //     opacity: 0,
      //     ease: 'expo.easeOut',
      //   })
      //   .from($preloaderLineOne, {
      //     duration:  0.5,
      //     opacity: 0,
      //     yPercent:100,
      //     ease: 'expo.easeOut',
      //   },'<')
      //   .from($preloaderLineTwo, {
      //     duration:  0.5,
      //     opacity: 0,
      //     yPercent:100,
      //     ease: 'expo.easeOut',
      //   },'-=0.1')
      //   .from($preloaderLineThree, {
      //     duration:  0.5,
      //     opacity: 0,
      //     yPercent:100,
      //     ease: 'expo.easeOut',
      //   },'-=0.1')
      //   .from($preloaderLineFour, {
      //     duration:  0.5,
      //     opacity: 0,
      //     yPercent:100,
      //     ease: 'expo.easeOut',
      //     onComplete: () => {
      //       charsGsapAnim.play();
      //   }
      //   },'-=0.1')
      //   .from($preloaderBoldLine, {
      //     duration:  0.5,
      //     opacity: 0,
      //     yPercent:100,
      //     ease: 'expo.easeOut',        
      //     onComplete: () => {
      //       preloaderOutGsapAnim.play();
      //   }
      //   })
      //   ; 

      //   preloaderOutGsapAnim =  gsap.timeline({
      //     paused: true,
      //   })
      //   .to($preloaderBlock, 2, { yPercent: -100})
      //   .to($preloaderBg , 1, { autoAlpha: 0,
      //     onComplete: () => {
      //       $body.removeClass('preloader-active');
      //       $preloaderBg.addClass('preloader-bg-hidden');
      //       sectionFromGsap.play();
      //       takeCookie();
      //   }
      //   },'<');

      //  preloaderGsapAnim.play();

      // $preloaderClose.on('click', function () {
      //   preloaderOutGsapAnim.play();
      // });  
      // }

      function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }      
    }
    let $window = $(window),
    $indexHome = $('.index-home'),
    winHeight = $window.height();
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
