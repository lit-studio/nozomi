import { gsap } from "gsap";
import { DrawSVGPlugin } from "../../libs/gsap-shockingly-green/src/DrawSVGPlugin";
gsap.registerPlugin(DrawSVGPlugin);
export default function () {

  console.log("home page");

  let $body = $('body'),

  $homeMainSlider = $body.find(".index-slider--js");

  function homeIndexFunc() {
    // console.clear();
    console.log('index');
    const svg = document.querySelector("#demo");
    const tl = gsap.timeline();
    // const tl = gsap.timeline({onUpdate:onUpdate});
    let pt = svg.createSVGPoint();
    // let data = document.querySelector(".tlProgress");
    let counter = document.querySelector("#counter");
    const ratio = 0.5625;
    
    gsap.set("#instructions, #dial", {xPercent: -50});
    gsap.set("#progressRing", {drawSVG:0});
    
    tl.to("#masker", {duration: 2, attr:{r:2400}, ease:"power2.in"});
    tl.reversed(true);
    
    function mouseHandlerIndex() {
      tl.reversed(!tl.reversed());
    }
    
    function getPointIndex(evt){
      pt.x = evt.clientX; 
      pt.y = evt.clientY;
      return pt.matrixTransform(svg.getScreenCTM().inverse());
    }
    
    function mouseMoveIndex(evt) {
      let newPoint = getPointIndex(evt);
      gsap.set("#dot", {attr:{cx:newPoint.x, cy:newPoint.y}});
      gsap.to("#masker", 0.88, {attr:{cx:newPoint.x, cy:newPoint.y}, ease:"power2.out"});
     }
    

    
    function newSizeIndex() {
      let w = window.innerWidth ;
      let h = window.innerHeight;
      if (w > h * (16/9) ) {
        gsap.set("#demo", { attr: { width: w, height: w * ratio } });
      } else {
        gsap.set("#demo", { attr: { width: h / ratio, height: h } });
      }
      let data = svg.getBoundingClientRect();
      gsap.set("#demo", {x:w/2 - data.width/2});
      gsap.set("#demo", {y:h/2 - data.height/2});
    }
    
    window.addEventListener("mousedown", mouseHandlerIndex);
    window.addEventListener("mouseup", mouseHandlerIndex);
    window.addEventListener("mousemove", mouseMoveIndex);
    
    newSizeIndex();
    window.addEventListener("resize", newSizeIndex);
  }
  homeIndexFunc();

  function homePerspectiveFunc() {
    // console.clear();
    console.log('perspective');
    const svg = document.querySelector("#demoPerspective");
    const tlPer = gsap.timeline();
    // const tl = gsap.timeline({onUpdate:onUpdate});
    let ptPerspective = svg.createSVGPoint();
    // let data = document.querySelector(".tlProgress");
    let counter = document.querySelector("#counterPerspective");
    const ratioPerspective = 0.5625;
    
    gsap.set("#instructionsPerspective, #dialPerspective", {xPercent: -50});
    gsap.set("#progressRingPerspective", {drawSVG:0});
    
    tlPer.to("#maskerPerspective", {duration: 2, attr:{r:2400}, ease:"power2.in"});
    tlPer.reversed(true);
    
    function mouseHandlerPerspective() {
      tlPer.reversed(!tlPer.reversed());
    }
    
    function getPointPerspective(evt){
      ptPerspective.x = evt.clientX; 
      ptPerspective.y = evt.clientY;
      return ptPerspective.matrixTransform(svg.getScreenCTM().inverse());
    }
    
    function mouseMovePerspective(evt) {
      let newPointPerspective = getPointPerspective(evt);
      gsap.set("#dotPerspective", {attr:{cx:newPointPerspective.x, cy:newPointPerspective.y}});
      gsap.to("#maskerPerspective", 0.88, {attr:{cx:newPointPerspective.x, cy:newPointPerspective.y}, ease:"power2.out"});
     }
    

    
    function newSizePerspective() {
      let wPerspective = window.innerWidth ;
      let hPerspective = window.innerHeight;
      if (wPerspective > hPerspective * (16/9) ) {
        gsap.set("#demoPerspective", { attr: { width: wPerspective, height: wPerspective * ratioPerspective } });
      } else {
        gsap.set("#demoPerspective", { attr: { width: hPerspective / ratioPerspective, height: hPerspective } });
      }
      let dataPerspective = svg.getBoundingClientRect();
      gsap.set("#demoPerspective", {x:wPerspective/2 - dataPerspective.width/2});
      gsap.set("#demoPerspective", {y:hPerspective/2 - dataPerspective.height/2});
    }
    
    window.addEventListener("mousedown", mouseHandlerPerspective);
    window.addEventListener("mouseup", mouseHandlerPerspective);
    window.addEventListener("mousemove", mouseMovePerspective);
    
    newSizePerspective();
    window.addEventListener("resize", newSizePerspective);
  }
  homePerspectiveFunc();

}
