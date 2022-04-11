import { gsap } from "gsap";

export default function () {
    if ($('.price-list-item-gsap--js').length > 0) {
        $('.c-tab-item-title').on('click', function () {
            console.log('tab');
            let $tabItem = $(this).closest('.c-tab-item');
            let $tabItemContent = $tabItem.find(".c-tab-item-block");

            // gsap.timeline().to($faqItemContent, 0.3, {height: 0});
            gsap.timeline().to($('.c-tab-item-block'), 0.3, {height: 0});
            $('.c-tab-item').removeClass("active");
            if ($tabItemContent.height() !== 0) {
                gsap.timeline().to($tabItemContent, 0.3, {
                    height: 0,
                    onUpdate: () => window.dispatchEvent(new Event('resize'))
                });
                $tabItem.removeClass("active");
            } else {
                gsap.timeline().to($tabItemContent, 0.3, {
                    height: "auto",
                    onUpdate: () => window.dispatchEvent(new Event('resize'))
                });
                $tabItem.addClass("active");
            }
        });
    }


}