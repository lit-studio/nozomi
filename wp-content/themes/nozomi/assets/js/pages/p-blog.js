import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);
export default function () {
    console.log("blog");
  
    let $body = $('body'),
    $navSection = $body.find('.nav'),
    $navTrigger = $body.find('.p-blog-content'),
    $navWrap = $navSection.find('.nav-wrap'),
    $navMobileBtn = $navSection.find('.nav-mobile-btn--js'),
    $navMobileBtnText = $navMobileBtn.find('.nav-mobile-btn-text'),
    $navMobileBlock = $navSection.find('.nav-menu--js'),
    $navMobileBg = $navSection.find('.nav-menu-bg--js'),
    navMobileActive
  ;




  if (screen.width > 1024) {
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
  else{
    let navMobileAnim = gsap
    .timeline({
      paused: true
    })
    .from($navMobileBg, 0.01, { yPercent: 100,  ease: 'linear' },'')
    .from($navMobileBg, 0.3, { opacity: 0,  ease: 'expo.easeOut' },'')
    .from($navMobileBlock, 0.3, { yPercent: 100,  ease: 'expo.easeOut' },'<')
    ;

    function navMobileFunc() {
      navMobileActive = $navMobileBlock.find('.current-menu-item').text();
      console.log(navMobileActive);
      $navMobileBtnText.html(navMobileActive);
      $navMobileBtn.on("click", function () {
        navMobileAnim.play();
      });  
      $navMobileBg.on("click", function () {
        navMobileAnim.reverse();
      });  
    }
    navMobileFunc();
  }
}
