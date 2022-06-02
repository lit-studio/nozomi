import { gsap } from "gsap";

export default function () {
    if ($('.work-list-gsap--js').length > 0) {
        let $tab = $(".work-list-gsap--js");
        let $tabImg = $tab.find(".item-img");
        let $tabItem =  $tab.find(".c-tab-item");
        let $tabItemTitile =  $tab.find(".c-tab-item-title");
        let  $tabImgThis,$tabItemThis,$tabItemContent,dataTab;
        $tabItem.filter('[data-tab="1"]').addClass('active');
        $tabImg.filter('[data-tab="1"]').addClass('active');
        $tabItemContent = $tabItem.filter('[data-tab="1"]').find(".c-tab-item-block");
        gsap.timeline().to($tabItemContent, 0.3, {
            height: "auto",
            onUpdate: () => window.dispatchEvent(new Event('resize'))
        });


        $tabItemTitile.on('click', function () {
            console.log('tab');
            $tabItemThis = $(this).closest($tabItem);
            dataTab = $tabItemThis.attr('data-tab');
            // this.className.filter('[data-tab="' + dataTab + '"]').addClass('active');
            console.log('dataTab ', dataTab);
            $tabItemContent = $tabItemThis.find(".c-tab-item-block");
            // gsap.timeline().to($faqItemContent, 0.3, {height: 0});
            gsap.timeline().to($('.c-tab-item-block'), 0.3, {height: 0});
            $tabImg.removeClass("active");
            $tabItem.removeClass("active");
            if ($tabItemContent.height() !== 0) {
                gsap.timeline().to($tabItemContent, 0.3, {
                    height: 0,
                    onUpdate: () => window.dispatchEvent(new Event('resize'))
                });
                $tabItemThis.removeClass("active");
                $tabImg.filter('[data-tab="' + dataTab + '"]').removeClass("active");
            } else {
                gsap.timeline().to($tabItemContent, 0.3, {
                    height: "auto",
                    onUpdate: () => window.dispatchEvent(new Event('resize'))
                });
                $tabItemThis.addClass("active");
                $tabImg.filter('[data-tab="' + dataTab + '"]').addClass('active');
            }
        });
    }
}