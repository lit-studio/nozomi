import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
import {DrawSVGPlugin} from "../../libs/gsap-shockingly-green/src/DrawSVGPlugin";
import lottie from "lottie-web";


gsap.registerPlugin(DrawSVGPlugin);
gsap.registerPlugin(ScrollTrigger);
export default function () {
    let     $headerProgress = $(".c-header-progress--js");
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
            path: nozomiData.rootUrl + "/assets/lottie/button_book.json"
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

}