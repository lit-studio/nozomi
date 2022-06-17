import { gsap } from "gsap";
import VimeoPlayer from '@vimeo/player';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
import {DrawSVGPlugin} from "../../libs/gsap-shockingly-green/src/DrawSVGPlugin";
import lottie from "lottie-web";


gsap.registerPlugin(DrawSVGPlugin);
gsap.registerPlugin(ScrollTrigger);
export default function () {
  let $body = $('body'),
  $cursorBlock = $body.find(".cursor-dot");
    let $headerProgress = $(".c-header-progress--js");
    let $indexSingle = $(".index-single-portfolio");    
    let $imgParallaxblock = $(".parallax-img-block--js");
    let indexSingleHeight = $indexSingle.innerHeight();
    console.log("single portfolio");

    if ($headerProgress.length > 0) {
      ScrollTrigger.create({
        trigger: "#site",
        start: "top top",
        end: "bottom bottom",
        scrub: true,
        toggleActions: "play reverse none reverse",
        markers: false,
        animation: gsap
          .timeline()
          .fromTo(
            $headerProgress,
            { width: "0", duration: 1 },
            { width: "100%", duration: 1 }
          ),
      });
    }
    function btnLottieFeelFunc() {
      console.log('btn-feel')
      let btnFeel = document.querySelector(".btn-feel--js");
      if (btnFeel) {
        function btnFeelHover() {
          const btnFeelAnim = lottie.loadAnimation({
            container: btnFeel,
            renderer: "svg",
            loop: false,
            autoplay: false,
            path: nozomiData.rootUrl + "/assets/lottie/button_book_grey.json"
          });
    
          btnFeel.addEventListener("mouseenter", () => {
            if(!btnFeel.classList.contains("active")){
              btnFeel.classList.add("active");
              btnFeelAnim.playSegments([0, 30], true);
            }
          });
    
          btnFeel.addEventListener("mouseleave", () => {
            if(btnFeel.classList.contains("active")){
              btnFeel.classList.remove("active");
              btnFeelAnim.playSegments([31, 60], true);
            }
          });
    
          btnFeel.addEventListener("click", () => {
            if(btnFeel.classList.contains("active")){
              btnFeel.classList.remove("active");
              btnFeelAnim.playSegments([31, 60], true);
            }
          });
    
        }
        if (btnFeel !== null) {
          btnFeelHover();
        }
      }
    }
    btnLottieFeelFunc();

    function imgScaleFunc() {
    ScrollTrigger.create({
      trigger: $imgParallaxblock,
      animation: 
      gsap
          .timeline()
          .fromTo(
            $imgParallaxblock,
              { scale: 1.2, duration: 2 },
              { scale: 1, duration: 2 }
          ),
      start: "top " + indexSingleHeight,
      end: "bottom top",
      scrub: true,
      toggleActions: "play reverse none reverse",
      markers: false
    });
  }

  imgScaleFunc();

  // function controlVideosSingle() {
  //   let iframesBig = document.querySelector('.video-big--js');
  //   let videoIdBig = iframesBig.getAttribute('data-set-vimeo-id');
  //   let vimeoPlayerBig = new VimeoPlayer(iframesBig,{
  //     id: videoIdBig,
  //     width: '100%',
  //     height: '100%',
  //     muted:	true,
  //     loop: true,
  //     controls:	false,
  //     quality:	false
  //   });
  //   vimeoPlayerBig.loadVideo(videoIdBig);
  //   vimeoPlayerBig.play().then(function() {
  //     // the video was played
  //   }).catch(function(error) {
  //       switch (error.name) {
  //           case 'PasswordError':
  //               // the video is password-protected and the viewer needs to enter the
  //               // password first
  //               break;
    
  //           case 'PrivacyError':
  //               // the video is private
  //               break;
    
  //           default:
  //               // some other error occurred
  //               break;
  //       }
  //   });
  // }
  // controlVideosSingle();
}