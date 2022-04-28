import { gsap } from "gsap";
import lottie from "lottie-web";

import header from "./components/c-header";
import footer from "./components/c-footer";

// import ScrollToPlugin from "gsap/ScrollToPlugin";
// gsap.registerPlugin(ScrollToPlugin);

export default function () {
  let $body = $('body'),
  $preloaderBlock = $body.find('.preloader--js');

    function preloaderFunc() {
      // window.scrollTo(0, 0);
      // $(window).scrollTop(0);
      // setTimeout(function(){
      //   // $(window).scrollTop(0);
      //   $preloaderBlock.fadeOut(1000);
      // }, 100);

      // window.addEventListener("load", function(){     
      //   $(window).scrollTop(0);
      //   setTimeout(function(){
      //     // $(window).scrollTop(0);
      //     $preloaderBlock.fadeOut(1000);
      //   }, 100);
      // });

      window.addEventListener("load", function(){     
        setTimeout(function(){
          $('html,body').scrollTop(0);
          $preloaderBlock.fadeOut(500);
      }, 500);
      });
    }
    let $window = $(window),
    $indexHome = $('.index-home'),
    winHeight = $window.height(),
    winHeightScreen = screen.height;
    console.log('winHeightScreen ' + winHeightScreen );
    console.log('winHeight ' + winHeight );
    if (winHeight > 560) {
      if (winHeight > 700) {
        $indexHome.addClass('mobile-height');
      }
      else{
        $indexHome.addClass('mobile-middle');
      }
    }

    preloaderFunc();
    header();
    footer();

    

    // gsap.to(window, 0,{scrollTo:{y:0}});
    // $(document).on('load', function () {
    //   $(window).scrollTop(0);
    // });


    function btnLottieFunc() {
        let btnPortfolio = document.querySelector(".btn-portfolio--js");
        let btnAbout = document.querySelector(".btn-about--js");
        let btnBook = document.querySelector(".btn-book--js");
        // let btnBookItem = document.querySelector(".btn-book--js .btn-item");
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
              if(!btnPortfolio.classList.contains("active")){
                btnPortfolio.classList.add("active");
                btnPortfolioAnim.playSegments([0, 30], true);
              }
            });
      
            btnPortfolio.addEventListener("mouseleave", () => {
              if(btnPortfolio.classList.contains("active")){
                btnPortfolio.classList.remove("active");
                btnPortfolioAnim.playSegments([31, 60], true);
              }
            });

            btnPortfolio.addEventListener("click", () => {
              if(btnPortfolio.classList.contains("active")){
                btnPortfolio.classList.remove("active");
                btnPortfolioAnim.playSegments([31, 60], true);
              }
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
              if(!btnAbout.classList.contains("active")){
                btnAbout.classList.add("active");
                btnAboutAnim.playSegments([0, 30], true);
              }
            });
      
            btnAbout.addEventListener("mouseleave", () => {
              if(btnAbout.classList.contains("active")){
                btnAbout.classList.remove("active");
                btnAboutAnim.playSegments([31, 60], true);
              }
            });
            btnAbout.addEventListener("click", () => {
              if(btnAbout.classList.contains("active")){
                btnAbout.classList.remove("active");
                btnAboutAnim.playSegments([31, 60], true);
              }
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
              if(!btnBook.classList.contains("active")){
                btnBook.classList.add("active");
                btnBookAnim.playSegments([0, 30], true);
              }
            });
      
            btnBook.addEventListener("mouseleave", () => {
              if(btnBook.classList.contains("active")){
                btnBook.classList.remove("active");
                btnBookAnim.playSegments([31, 60], true);
              }
            });

            btnBook.addEventListener("click", () => {
              if(btnBook.classList.contains("active")){
                btnBook.classList.remove("active");
                btnBookAnim.playSegments([31, 60], true);
              }
            });
      
          }
          if (btnBook !== null) {
            btnBookHover();
          }
        }
    }
    btnLottieFunc();
    
    function screenReload() {
      let widthScreen = screen.width;
      let  widthScreenNew;  
      window.addEventListener("resize", () => {
        widthScreenNew = screen.width;

        if (widthScreenNew !== widthScreen) {
          location.reload();
        }

      });
    }
    screenReload();

}
