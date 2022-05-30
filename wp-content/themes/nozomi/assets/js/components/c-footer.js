import { gsap } from "gsap";
import lottie from "lottie-web";
import {DrawSVGPlugin} from "../../libs/gsap-shockingly-green/src/DrawSVGPlugin";

gsap.registerPlugin(DrawSVGPlugin);

export default function () {
  function btnLottieFooterFunc() {
    console.log('book footer')
    let btnBook = document.querySelector(".btn-book--js");
    if (btnBook) {
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
  btnLottieFooterFunc();

}
