import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);
export default function () {
    console.log("blog");
  
    let $body = $('body'),
    $indexSection = $body.find('.index-blog'),
    $navSection = $body.find('.nav'),
    $navSectionItem = $navSection.find('.menu-item'),
    $navTrigger = $body.find('.blogs'),
    $footer = $body.find('.c-footer'),
    $navWrap = $navSection.find('.nav-wrap'),
    $navMobileBtn = $navSection.find('.nav-mobile-btn--js'),
    $navMobileBtnText = $navMobileBtn.find('.nav-mobile-btn-text'),
    $navMobileBlock = $navSection.find('.nav-menu--js'),
    $navMobileBg = $navSection.find('.nav-menu-bg--js'),
    $section = $body.find('.gsap-anim--js'),
    $sectionNav = $body.find('.gsap-nav--js'),
    $navMobileBtns = $navSection.find('.nav-mobile-btns'),    
    indexSectionHeight = $indexSection.height(),
    navHeight = $navMobileBlock.height(),
    navTriggerHeight = $navTrigger.height(),
    navStopHeight = navHeight,
    navTriggerPath = navTriggerHeight - navStopHeight,
    anchorStart = indexSectionHeight - navStopHeight,
    navMobileActive,navMobileAnim,sectionFromGsap,sectionToGsap
  ;
  // console.log('navHeight ' + navHeight );
  // console.log('navStopHeight ' + navStopHeight );
  // console.log('anchorStart ' + anchorStart );
  // console.log('navTriggerPath ' + navTriggerPath );
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
      // sectionFromGsap = gsap
      // .timeline({
      //   paused: true
      // })
      // .from($section, 0.5, { opacity: 0 , delay: 0.5},'')
      // .from($section, 1, { y: 200 },'<')
      // .from($sectionNav, 0.5, { opacity: 0 , delay: 0.5},'')
      // .from($sectionNav, 1, { y: 200 },'<')
      // ;
    }
    else{

      sectionToGsap = gsap
      .timeline({
        paused: true
      })
      .to($section, 0.5, { opacity: 0 },'')
      .to($section, 1, { y: -200 },'<')
      ;

      // sectionFromGsap = gsap
      // .timeline({
      //   paused: true
      // })
      // .from($section, 0.5, { opacity: 0 , delay: 0.5},'')
      // .from($section, 1, { y: 200 },'<')
      // ;
    }


  // sectionFromGsap.play();

  if (screen.width > 1024) {
    function navScrollFunc() {
      ScrollTrigger.create({
        trigger: $navTrigger,
        start: "top " + anchorStart,
        end: navTriggerPath + " " + anchorStart,
        pin:  $navWrap,
        scrub: true,
        toggleActions: "play reverse none reverse",
        markers: true,
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
    navMobileAnim = gsap
    .timeline({
      paused: true
    })
    .from($navMobileBg, 0.01, { yPercent: 100,  ease: 'linear' },'')
    .from($navMobileBg, 0.3, { opacity: 0,  ease: 'expo.easeOut' },'')
    .from($navMobileBlock, 0.3, { yPercent: 100,  ease: 'expo.easeOut' },'<')
    ;
    function navScrollMobileFunc() {
      ScrollTrigger.create({
        trigger: $footer,
        start: "top bottom",
        end: "bottom top",
        scrub: true,
        toggleActions: "play reverse none reverse",
        toggleClass: {className: "fixed", targets: ".nav"},
        markers: false,
      });

    }
    navScrollMobileFunc();
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
        $navMobileBtns.addClass('hidden');

      });  
      $navMobileBg.on("click", function () {
        navMobileAnim.reverse();
        $navMobileBtns.removeClass('hidden');

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
