import { gsap } from "gsap";
import {SplitText} from "../libs/gsap-shockingly-green/src/SplitText";
import lottie from "lottie-web";
import {DrawSVGPlugin} from "../libs/gsap-shockingly-green/src/DrawSVGPlugin";

gsap.registerPlugin(DrawSVGPlugin);
gsap.registerPlugin(SplitText);

import header from "./components/c-header";
import footer from "./components/c-footer";
import tab from "./components/c-tab";

export default function () {
  let $body = $('body'),  
  $window = $(window),
  $pHome =  $(".p-home"),
  $indexPapperBg = $body.find(".papper-bg--js"),
  $preloaderBlock = $body.find('.preloader--js'),
  $preloaderBg = $body.find('.preloader-bg--js'),
  $preloaderClose = $preloaderBlock.find('.preloader-close--js'),
  $preloaderLineOne = $preloaderBlock.find('.preloader-desc-line-1--js'),
  $preloaderLineTwo = $preloaderBlock.find('.preloader-desc-line-2--js'),
  $preloaderLineThree = $preloaderBlock.find('.preloader-desc-line-3--js'),
  $preloaderLineFour = $preloaderBlock.find('.preloader-desc-line-4--js'),
  $preloaderBoldLine = $preloaderBlock.find('.preloader-bold-line--js'),
  $section = $body.find('.gsap-anim--js'),
  $sectionNav = $body.find('.gsap-nav--js'),
  windowHeight =  $window.innerHeight(),
  windowHeightHalf =   windowHeight,
  sectionFromGsap,preloaderOutGsapAnim,preloaderGsapAnim,moveY,
  $indexHome = $body.find('.index-home'),
  winHeight = $window.height();

  if(($indexPapperBg.length > 0)&&(screen.width > 640) ){
    function indexPapperFunc() {
      // console.log('papper bg');
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

  const handBirdAnim = lottie.loadAnimation({
    container: document.getElementById('hand_bird'),
    renderer: "svg",
    loop: false,
    autoplay: false,
    path: nozomiData.rootUrl + "/assets/lottie/hand_bird.json"
  });

  if($pHome.length > 0){
    // console.log('home');
    if($section.length > 0){
      sectionFromGsap = gsap
      .timeline({
        paused: true
      })
      .from($section, 2, { opacity: 0 },'')
      .from($section, 2, { y: windowHeightHalf, ease: 'power1.easeOut' },'<')
      .from('.item-img-item', 1, {  autoAlpha: 0, 
        onComplete: () => {
          handBirdAnim.setSpeed(1.8);
          handBirdAnim.play();
        } 
      },'-=1')
      ;
    }
  }
  else{
    if (screen.width > 1024) {
      moveY = 200;
      if($sectionNav.length > 0){
        sectionFromGsap = gsap
        .timeline({
          paused: true
        })
        .from($section, 1, { opacity: 0 },'+=0.4')
        .from($section, 1, { y:  moveY, ease: 'power1.easeOut'},'<')
        .from($sectionNav,1, { opacity: 0 },'<')
        .from($sectionNav, 1.5, { y:  moveY, ease: 'power1.easeOut' },'<')
        ;
      }
      else{
        // console.log('not blog or portfolio');
        sectionFromGsap = gsap
        .timeline({
          paused: true
        })
        .from($section, 1, { opacity: 0 },'+=0.4')
        .from($section, 1.5, {  y:  moveY, ease: 'power1.easeOut' },'<')
        ;
      }
    }
    else{
      moveY = 100;
      sectionFromGsap = gsap
      .timeline({
        paused: true
      })
      .from($section, 1, { opacity: 0 },'+=0.4')
      .from($section, 1.5, { y: moveY, ease: 'power1.easeOut' },'<')
      ;
    }
  }

  function preloaderFunc() {
    $body.addClass('preloader-active');

    let qoute = $body.find(".preloader-desc-cursive--js");

    if (getCookie('cookies')){
      // console.log('we have cookie');
      $preloaderBlock.addClass('hidden');
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
      }
      },'<');

      window.addEventListener("load", function(){
        setTimeout(function(){
          $('html,body').scrollTop(0);
          preloaderOutGsapAnim.play();

      }, 100);
      });
    }
    else{
      // console.log('we have not cookie');    
      function takeCookie(){
        let d = new Date();
        let cookiesDays = 7;
        d.setTime(d.getTime() + (cookiesDays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = "cookies=true" + ";" + expires + ";path=/";
      }  
    let  mySplitText = new SplitText(qoute, {
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
        takeCookie();
    }
    },'<');
      window.addEventListener("load", function(){
      setTimeout(function(){
        $('html,body').scrollTop(0);
        preloaderGsapAnim.play();

    }, 100);
      });
      $preloaderClose.on('click', function () {
        preloaderOutGsapAnim.play();
      });  
      
    }

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


  if (screen.width <= 1920) {
    if (screen.width <= 1680) {
      if (winHeight <= 600) {
        $indexHome.addClass('mobile-height');
      }
    }
    else{
      if (winHeight <= 750) {
        $indexHome.addClass('mobile-height');
      }
    }

  }
  else{
    if (winHeight <= 950) {
      $indexHome.addClass('mobile-height');
    }
  }
  preloaderFunc();
  header();
  footer();
  tab();

  function screenReload() {

    let widthScreen = screen.width,
    widthScreenNew;

    window.addEventListener("resize", () => {
      widthScreenNew = screen.width;

      if (widthScreenNew !== widthScreen) {
        location.reload();
      }

    });
  }
  screenReload();

}
