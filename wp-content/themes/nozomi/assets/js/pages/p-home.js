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
  $indexSection = $body.find(".index"),
  $indexSectionTitle = $indexSection.find(".item-title"),
  $homeMainSlider = $body.find(".index-slider--js");

  function homeIndexFunc() {
    // console.clear();
    console.log('index');

    const handBirdAnim = lottie.loadAnimation({
      container: document.getElementById('hand_bird'),
      renderer: "svg",
      loop: false,
      autoplay: false,
      path: nozomiData.rootUrl + "/assets/lottie/hand_bird.json"
    });

    let indexSectionGsap =  gsap.timeline({
      paused: true,
    })
        .from($indexSectionTitle, 2, {  autoAlpha: 0, ease: "Power4.easeOut" },'')
        .from($indexSectionTitle, 2, { yPercent: 50, ease: "Power4.easeOut",
        onComplete: () => {
          handBirdAnim.play();

        } 
    },'<')
  ;
  indexSectionGsap.play();


    const svg = document.querySelector("#demo");
    const tl = gsap.timeline();
    let pt = svg.createSVGPoint();
    // const tl = gsap.timeline({onUpdate:onUpdate});

    // let data = document.querySelector(".tlProgress");
    // let counter = document.querySelector("#counter");
    const ratio = 0.5625;
    
    gsap.set("#instructions, #dial", {xPercent: -50});
    // gsap.set("#progressRing", {drawSVG:0});
    
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
      // gsap.set("#dot", {attr:{cx:newPoint.x, cy:newPoint.y}});
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

  let $aboutSection = $body.find('.about'),
  $aboutSectionImg = $aboutSection.find('.parallax-img-block--js'),
  $portfolioSection = $body.find('.portfolio'),
  $portfolioSectionImg = $portfolioSection.find('.parallax-img-block--js'),
  $parallaxBlock = $body.find('.parallax-img-block--js')

  ;

  if ($('.parallax-img-block--js').length > 0) {
    gsap.utils.toArray('.parallax-img-block--js img').forEach(sectionImg => {
      ScrollTrigger.create({
        trigger: sectionImg,
        onEnter: () => {
          gsap.to(sectionImg, {
            autoAlpha: 1,
            duration: 1,
          });
          gsap.to(sectionImg, 2, {scale: 1, ease: "Power4.easeOut"},'<');
        },
        start: "top center",
        end: "bottom top",
        pin: false,
        scrub: false,
        toggleActions: "play none none none",
        markers: false
      });
    });
  }
  function portfolioScaleFunc() {
    ScrollTrigger.create({
      trigger: $portfolioSectionImg,
      animation: 
      gsap
          .timeline()
          .fromTo(
            $portfolioSectionImg,
              { scale: 1.2, duration: 2 },
              { scale: 1, duration: 2 }
          ),
      start: "top bottom",
      end: "bottom top",
      scrub: true,
      toggleActions: "play reverse none reverse",
      markers: false
    });
  }

  portfolioScaleFunc();

  function aboutScaleFunc() {
    ScrollTrigger.create({
      trigger: $aboutSectionImg,
      animation: 
      gsap
          .timeline()
          .fromTo(
            $aboutSectionImg,
              { yPercent: -5,scale: 1.2, duration: 2 },
              { yPercent: 5,scale: 1, duration: 2 }
          ),
      start: "top bottom",
      end: "bottom top",
      scrub: true,
      toggleActions: "play reverse none reverse",
      markers: false
    });
  }
  aboutScaleFunc();

  if ($('.item-wrap--js').length > 0) {
    gsap.utils.toArray('.item-wrap--js').forEach(itemWrap => {
      ScrollTrigger.create({
        trigger: itemWrap,
        onEnter: () => {
          gsap.to(itemWrap, {
            autoAlpha: 1,
            duration: 2,
          });
          gsap.from(itemWrap, 2, {xPercent: -20, ease: "Power4.easeOut"},'<');
        },
        start: "top 70%",
        end: "bottom top",
        pin: false,
        scrub: false,
        toggleActions: "play none none none",
        markers: false
      });
    });
  }


  function homePerspectiveFunc() {
    // console.clear();
    console.log('perspective');
    const svg = document.querySelector("#demoPerspective");
    const tlPer = gsap.timeline();
    // const tl = gsap.timeline({onUpdate:onUpdate});
    let ptPerspective = svg.createSVGPoint();
    // let data = document.querySelector(".tlProgress");
    // let counter = document.querySelector("#counterPerspective");
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
      // gsap.set("#dotPerspective", {attr:{cx:newPointPerspective.x, cy:newPointPerspective.y}});
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
