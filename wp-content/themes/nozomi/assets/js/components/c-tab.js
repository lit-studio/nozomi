import { gsap } from "gsap";

export default function () {
    let $tab = $(".work-list-gsap--js"),
    $tabImg = $tab.find(".item-img"),
    $tabItem =  $tab.find(".c-tab-item"),
    $tabItemTitile =  $tab.find(".c-tab-item-title"),
    $tabItemThis,$tabItemContent,dataTab;
    if ($tab.length > 0) {
        $tabItem.filter('[data-tab="1"]').addClass('active');
        $tabImg.filter('[data-tab="1"]').addClass('active');
        $tabItemContent = $tabItem.filter('[data-tab="1"]').find(".c-tab-item-block");
        gsap.timeline().to($tabItemContent, 0.3, {
            height: "auto",
            onUpdate: () => window.dispatchEvent(new Event('resize'))
        });

        $tabItemTitile.on('click', function () {
            // console.log('tab');
            $tabItemThis = $(this).closest($tabItem);
            dataTab = $tabItemThis.attr('data-tab');
            // console.log('dataTab ', dataTab);
            $tabItemContent = $tabItemThis.find(".c-tab-item-block");
            if ($tabItemContent.height() == 0) {
                gsap.timeline().to($('.c-tab-item-block'), 0.3, {height: 0});
                $tabImg.removeClass("active");
                $tabItem.removeClass("active");
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