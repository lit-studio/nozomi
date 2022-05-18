import {gsap} from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);
export default function () {
    let $headerProgress = $(".c-header-progress--js");
    console.log("single blog");
    $('.blog-content-wrap p img').unwrap();
    $('.blog-content-wrap blockquote p').contents().unwrap();


    // copy content to clipboard
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }

    // copy to clipboard
    $(".copy").on("click", function () {
        copyToClipboard(".copy-content");
        return false;
    });

    function shareMobile() {

        if (screen.width <= 1024) {
            let $blogTopShare = $('.blog-top-share');
            let $blogTopShareLi = $blogTopShare.find('.blog-top-share-li');
            let $blogTopShareBtn = $blogTopShare.find('.blog-top-share-mobile--js');
            $blogTopShareBtn.on("click", function () {
                if (!$blogTopShareBtn.hasClass('close')) {
                    $blogTopShareBtn.addClass('close');
                    $blogTopShareLi.addClass('open');
                } else {
                    $blogTopShareBtn.removeClass('close');
                    $blogTopShareLi.removeClass('open');
                }
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