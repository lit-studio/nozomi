import { gsap } from "gsap";
import lottie from "lottie-web";
import VimeoPlayer from '@vimeo/player';
import {DrawSVGPlugin} from "../../libs/gsap-shockingly-green/src/DrawSVGPlugin";
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(DrawSVGPlugin);
gsap.registerPlugin(ScrollTrigger);

export default function () {

  console.log("home page");

  let $body = $('body'),

  $homeMainSlider = $body.find(".index-slider--js");

  function homeIndexFunc() {
    // console.clear();
    console.log('index');
    const svg = document.querySelector("#demo");
    const tl = gsap.timeline();
    // const tl = gsap.timeline({onUpdate:onUpdate});
    let pt = svg.createSVGPoint();
    // let data = document.querySelector(".tlProgress");
    let counter = document.querySelector("#counter");
    const ratio = 0.5625;
    
    gsap.set("#instructions, #dial", {xPercent: -50});
    gsap.set("#progressRing", {drawSVG:0});
    
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
      gsap.set("#dot", {attr:{cx:newPoint.x, cy:newPoint.y}});
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
  homeIndexFunc();

  function homePerspectiveFunc() {
    // console.clear();
    console.log('perspective');
    const svg = document.querySelector("#demoPerspective");
    const tlPer = gsap.timeline();
    // const tl = gsap.timeline({onUpdate:onUpdate});
    let ptPerspective = svg.createSVGPoint();
    // let data = document.querySelector(".tlProgress");
    let counter = document.querySelector("#counterPerspective");
    const ratioPerspective = 0.5625;
    
    gsap.set("#instructionsPerspective, #dialPerspective", {xPercent: -50});
    gsap.set("#progressRingPerspective", {drawSVG:0});
    
    tlPer.to("#maskerPerspective", {duration: 2, attr:{r:2400}, ease:"power2.in"});
    tlPer.reversed(true);
    
    function mouseHandlerPerspective() {
      tlPer.reversed(!tlPer.reversed());
    }
    
    function getPointPerspective(evt){
      ptPerspective.x = evt.clientX; 
      ptPerspective.y = evt.clientY;
      return ptPerspective.matrixTransform(svg.getScreenCTM().inverse());
    }
    
    function mouseMovePerspective(evt) {
      let newPointPerspective = getPointPerspective(evt);
      gsap.set("#dotPerspective", {attr:{cx:newPointPerspective.x, cy:newPointPerspective.y}});
      gsap.to("#maskerPerspective", 0.88, {attr:{cx:newPointPerspective.x, cy:newPointPerspective.y}, ease:"power2.out"});
     }
    

    
    function newSizePerspective() {
      let wPerspective = window.innerWidth ;
      let hPerspective = window.innerHeight;
      if (wPerspective > hPerspective * (16/9) ) {
        gsap.set("#demoPerspective", { attr: { width: wPerspective, height: wPerspective * ratioPerspective } });
      } else {
        gsap.set("#demoPerspective", { attr: { width: hPerspective / ratioPerspective, height: hPerspective } });
      }
      let dataPerspective = svg.getBoundingClientRect();
      gsap.set("#demoPerspective", {x:wPerspective/2 - dataPerspective.width/2});
      gsap.set("#demoPerspective", {y:hPerspective/2 - dataPerspective.height/2});
    }
    
    window.addEventListener("mousedown", mouseHandlerPerspective);
    window.addEventListener("mouseup", mouseHandlerPerspective);
    window.addEventListener("mousemove", mouseMovePerspective);
    
    newSizePerspective();
    window.addEventListener("resize", newSizePerspective);
  }
  homePerspectiveFunc();
  function btnLottieFunc() {
    let btnPortfolio = document.querySelector(".btn-portfolio--js");
    let btnAbout = document.querySelector(".btn-about--js");
    let btnBook = document.querySelector(".btn-book--js");
    if (!btnPortfolio.querySelector("svg")) {
      function btnPortfolioHover() {
        const btnPortfolioAnim = lottie.loadAnimation({
          container: btnPortfolio,
          renderer: "svg",
          loop: false,
          autoplay: false,
          path: nozomiData.rootUrl + "/assets/lottie/button_portfolio.json"
        });
  
        btnPortfolio.addEventListener("mouseenter", () => {
          btnPortfolioAnim.playSegments([0, 30], true);
        });
  
        btnPortfolio.addEventListener("mouseleave", () => {
          btnPortfolioAnim.playSegments([31, 60], true);
        });
  
  
      }
      if (btnPortfolio !== null) {
        btnPortfolioHover();
      }
    }
    if (!btnAbout.querySelector("svg")) {
      function btnAboutHover() {
        const btnAboutAnim = lottie.loadAnimation({
          container: btnAbout,
          renderer: "svg",
          loop: false,
          autoplay: false,
          path: nozomiData.rootUrl + "/assets/lottie/button_about.json"
        });
  
        btnAbout.addEventListener("mouseenter", () => {
          btnAboutAnim.playSegments([0, 30], true);
        });
  
        btnAbout.addEventListener("mouseleave", () => {
          btnAboutAnim.playSegments([31, 60], true);
        });
  
  
      }
      if (btnAbout !== null) {
        btnAboutHover();
      }
    }
    if (!btnBook.querySelector("svg")) {
      function btnBookHover() {
        const btnBookAnim = lottie.loadAnimation({
          container: btnBook,
          renderer: "svg",
          loop: false,
          autoplay: false,
          path: nozomiData.rootUrl + "/assets/lottie/button_book.json"
        });
  
        btnBook.addEventListener("mouseenter", () => {
          btnBookAnim.playSegments([0, 30], true);
        });
  
        btnBook.addEventListener("mouseleave", () => {
          btnBookAnim.playSegments([31, 60], true);
        });
  
  
      }
      if (btnBook !== null) {
        btnBookHover();
      }
    }
  }
  btnLottieFunc();
  function controlVideos() {
    let $iframes = $('.video--js');
    $iframes.each(function () {
      let $this = $(this);


    let $videoPlayerLayout =$this.find('.item-video--layout--js');
    // let $currentIframeSrc;
    let videoId = $this.attr('data-set-vimeo-id');
    let vimeoPlayer = new VimeoPlayer($this,{
      id: videoId,
      width: '100%',
      height: '100%',
      controls:	false,
      quality:	false
    });


    // vimeoPlayer.on('play', function() {
    //     console.log('played the video!');
    // });
    // console.log('vimeo'); 
    $videoPlayerLayout.hover(() => {
      vimeoPlayer.play();
    }, () => {
      vimeoPlayer.pause();
    });
        // $videoPlayerLayout.on('click', function () {
           
        //     if (!$iframes.hasClass('played')) {
        //         $iframes.addClass('played');
        //         vimeoPlayer.play();

        //     } else {
        //         $iframes.removeClass("played");
        //         vimeoPlayer.pause();

        //     }

        // });
  });
}
controlVideos();

}
