export default function () {
    console.log("single blog");
    $('.blog-content-wrap p img').unwrap();
    $('.blog-content-wrap blockquote p').contents().unwrap();

    function shareMobile() {

        if (screen.width <= 1024) {
            let $blogTopShare = $('.blog-top-share');
            let $blogTopShareLi = $blogTopShare.find('.blog-top-share-li');
            let $blogTopShareBtn = $blogTopShare.find('.blog-top-share-mobile--js');
            $blogTopShareBtn.on("click", function () {
                if (!$blogTopShareBtn.hasClass('close')) {
                    $blogTopShareBtn.addClass('close');
                    $blogTopShareLi.addClass('open');
                }
                else{
                    $blogTopShareBtn.removeClass('close');
                    $blogTopShareLi.removeClass('open');
                }
            });
        }
    }
    shareMobile();

}