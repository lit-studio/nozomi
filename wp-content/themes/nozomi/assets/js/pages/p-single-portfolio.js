import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
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

}