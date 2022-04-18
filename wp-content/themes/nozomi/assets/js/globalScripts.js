import { gsap } from "gsap";
import lottie from "lottie-web";

import header from "./components/c-header";
import footer from "./components/c-footer";
import modal from "./components/c-modal";
import tabAccordeon from "./components/c-tab";

// import "jquery-mask-plugin";
export default function () {
    let $body = $("body"),
        $formBlock = $body.find('.form-block'),
        $formBlockPhone = $formBlock.find('.your-tel'),
        $phoneInput = $formBlockPhone.find('input');


    // function phoneMask() {
    //     $('.agree').prop('checked', false);
    //     $phoneInput.on("click", function() {
    //         $phoneInput.mask('+38(000) 000-00-00');
    //     });
    // }
    header();
    footer();
    modal();
    tabAccordeon();
    // phoneMask();
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
              btnPortfolioAnim.playSegments([0, 30], true);
            });
      
            btnPortfolio.addEventListener("mouseleave", () => {
              btnPortfolioAnim.playSegments([31, 60], true);
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
              btnAboutAnim.playSegments([0, 30], true);
            });
      
            btnAbout.addEventListener("mouseleave", () => {
              btnAboutAnim.playSegments([31, 60], true);
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

              btnBookAnim.playSegments([0, 30], true);

            });
      
            btnBook.addEventListener("mouseleave", () => {

              btnBookAnim.playSegments([31, 60], true);

            });
      
      
          }
          if (btnBook !== null) {
            btnBookHover();
          }
        }
      }
      btnLottieFunc();
    window.addEventListener("resize", () => {
        location.reload()
    });
}
