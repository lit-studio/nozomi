import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);
export default function () {
    console.log("blog");
  
    let $body = $('body'),
    $navSection = $body.find('.nav'),
    $navSectionItem = $navSection.find('.menu-item'),
    $navTrigger = $body.find('.p-blog-content'),
    $navTriggerTablet = $body.find('.p-blog-blogs'),
    $navWrap = $navSection.find('.nav-wrap'),
    $navMobileBtn = $navSection.find('.nav-mobile-btn--js'),
    $navMobileBtnText = $navMobileBtn.find('.nav-mobile-btn-text'),
    $navMobileBlock = $navSection.find('.nav-menu--js'),
    $navMobileBg = $navSection.find('.nav-menu-bg--js'),
    $section = $navTrigger.find('.gsap-anim--js'),
    $sectionNav = $navTrigger.find('.gsap-nav--js'),
    navMobileActive,sectionFromGsap,sectionToGsap
  ;
  let $sidebarLink = $navMobileBlock.find('a');

    if (screen.width > 1024) {

      sectionToGsap = gsap
      .timeline({
        paused: true
      })
      .to($section, 0.5, { opacity: 0 },'')
      .to($section, 1, { y: -200 },'<')
      .to($sectionNav, 0.5, { opacity: 0 },'')
      .to($sectionNav, 1, { y: -200 },'<')
      ;
      sectionFromGsap = gsap
      .timeline({
        paused: true
      })
      .from($section, 0.5, { opacity: 0 , delay: 0.5},'')
      .from($section, 1, { y: 200 },'<')
      .from($sectionNav, 0.5, { opacity: 0 , delay: 0.5},'')
      .from($sectionNav, 1, { y: 200 },'<')
      ;
    }
    else{

      sectionToGsap = gsap
      .timeline({
        paused: true
      })
      .to($section, 0.5, { opacity: 0 },'')
      .to($section, 1, { y: -200 },'<')
      ;

      sectionFromGsap = gsap
      .timeline({
        paused: true
      })
      .from($section, 0.5, { opacity: 0 , delay: 0.5},'')
      .from($section, 1, { y: 200 },'<')
      ;
    }


  sectionFromGsap.play();

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
    $sidebarLink.on("click", function(event) {
      // console.log('click');
      event.preventDefault();
      sectionToGsap.play();
      setTimeout(() => {
        window.location = $(this).attr("href");
      }, 800);
    });
  }
  else{
    let navMobileAnim = gsap
    .timeline({
      paused: true
    })
    .from($navMobileBg, 0.01, { yPercent: 100,  ease: 'linear' },'')
    .from($navMobileBg, 0.3, { opacity: 0,  ease: 'expo.easeOut' },'')
    .from($navMobileBlock, 0.3, { yPercent: 200,  ease: 'expo.easeOut' },'<')
    ;
    // function navScrollFunc() {
    //   ScrollTrigger.create({
    //     trigger: $navTriggerTablet,
    //     start: "top center",
    //     end: "bottom bottom",
    //     pin:  $navSection,
    //     scrub: true,
    //     toggleActions: "play reverse none reverse",
    //     markers: true,
    //   });

    // }
    // navScrollFunc();
    function navMobileFunc() {

      if ($navSectionItem.hasClass('current-menu-item')) {
        navMobileActive = $navMobileBlock.find('.current-menu-item a').text();
      }
      else{
        navMobileActive = 'All posts';
      }
      // console.log(navMobileActive);
      $navMobileBtnText.html(navMobileActive);
      $navMobileBtn.on("click", function () {
        navMobileAnim.play();
      });  
      $navMobileBg.on("click", function () {
        navMobileAnim.reverse();
      });  
      $sidebarLink.on("click", function(event) {
        // console.log('click');
        event.preventDefault();
        navMobileAnim.reverse();
        sectionToGsap.play();
        setTimeout(() => {
          window.location = $(this).attr("href");
        }, 800);
      });
    }
    navMobileFunc();
  }





}
