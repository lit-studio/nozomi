import {gsap} from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export default function () {
    // console.log("single blog");
    let
    $body = $('body'),
    $headerProgress = $body.find(".c-header-progress--js"),
    $indexSection = $body.find('.blog-img'),
    $indexSectionBlock = $indexSection.find('.parallax-img-block--js'),
    indexSectionImgTrigger="top center",
    $copyNotice = $body.find('.c-copy--js'),
    $indexSectionImg = $indexSectionBlock.find('img'),
    $blogTopShare = $body.find('.blog-top-share'),
    $blogTopShareLi = $blogTopShare.find('.blog-top-share-li'),
    $blogTopShareBtn = $blogTopShare.find('.blog-top-share-mobile--js');
    $body.find('.blog-content-wrap p img').unwrap();
    $body.find('.blog-content-wrap blockquote p').contents().unwrap();
    
    function indexScaleFunc() {
      if (screen.width > 1024) {
        indexSectionImgTrigger="top center";
      }
      else{
        indexSectionImgTrigger="top 80%";
      }
      ScrollTrigger.create({
        trigger: $indexSectionBlock,
        animation: 
        gsap
            .timeline()
            .fromTo(
              $indexSectionImg,
                { yPercent: -5,scale: 1.2, duration: 2 },
                { yPercent: 5,scale: 1, duration: 2 }
            ),
        start: "top bottom",
        end: "bottom top",
        scrub: true,
        toggleActions: "play reverse none reverse",
        markers: false
      });
    }
    indexScaleFunc();

    // copy content to clipboard
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
    function copyNoticeFunc() {
        $copyNotice.addClass('active');
        setTimeout(function(){
            $copyNotice.removeClass('active');
        },2000);
    }
    // copy to clipboard
    $body.find(".copy").on("click", function () {
        copyToClipboard(".copy-content");    
        copyNoticeFunc();    
        return false;
    });

    function shareMobile() {

        if ($(window).width() <= 1024) {
            $blogTopShareBtn.on("click", function () {
                if (!$blogTopShareBtn.hasClass('close')) {
                    $blogTopShareBtn.addClass('close');
                    $blogTopShareLi.addClass('open');
                } else {
                    $blogTopShareBtn.removeClass('close');
                    $blogTopShareLi.removeClass('open');
                }
            });
            $(document).on('click', function(e) {
                if (!$(e.target).closest($blogTopShare).length) {
                    if ($blogTopShareBtn.hasClass('close')) {
                        $blogTopShareBtn.removeClass('close');
                        $blogTopShareLi.removeClass('open');
                    } 
                }
                e.stopPropagation();
              });
        }
    }

    shareMobile();

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
                    {width: "0", duration: 1},
                    {width: "100%", duration: 1}
                ),
        });
    }

}