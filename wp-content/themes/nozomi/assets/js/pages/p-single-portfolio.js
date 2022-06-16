import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
import {DrawSVGPlugin} from "../../libs/gsap-shockingly-green/src/DrawSVGPlugin";
import lottie from "lottie-web";


gsap.registerPlugin(DrawSVGPlugin);
gsap.registerPlugin(ScrollTrigger);
export default function () {
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
      // ScrollTrigger.create({
      //   trigger: $portfolioSectionImg ,
      //   onEnter: () => {
      //     gsap.to($portfolioSectionImg, {
      //       autoAlpha: 1,
      //       duration: 1,
      //     });
      //     gsap.to($portfolioSectionImg, 2, {scale: 1, ease: "Power4.easeOut"},'<');
      //   },
      //   start: "top 80%",
      //   end: "bottom top",
      //   pin: false,
      //   scrub: false,
      //   toggleActions: "play none none none",
      //   markers: false
      // });
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
}