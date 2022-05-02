import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);
export default function () {
    console.log("blog");
  
    let $body = $('body'),
    $navSection = $body.find('.nav'),
    $navTrigger = $body.find('.p-blog-content'),
    $navWrap = $navSection.find('.nav-wrap')
  ;


  function navScrollFunc() {
      ScrollTrigger.create({
        trigger: $navTrigger,
        start: "top top",
        end: "bottom bottom",
        pin:  $navWrap,
        scrub: true,
        toggleActions: "play reverse none reverse",
        markers: false,
      });

  }
  navScrollFunc();
}
