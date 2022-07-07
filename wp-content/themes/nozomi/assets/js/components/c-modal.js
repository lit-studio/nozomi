export default function () {

    let $body = $('body'),
        el,
        $btnModal = $body.find('.btn-modal--js'),
        $windowModal = $body.find('.section-modal--js'),
        $modalBlock = $body.find('.modal-block--js'),
        $btnClose = $body.find('.btn-modal-close--js'),
        $modalBg = $body.find('.modal-bg--js'),
        $contactForm = $body.find('#wpcf7-f34-o1'),
        $contactFormChange = $contactForm.find('.wpcf7-form'),
        $contactFormBtn = $contactForm .find('.wpcf7-submit')
    ;


    function blockModal() {
        console.log('modal block');
        $btnModal.on("click",function() {
            $body.removeClass('open-modal').find($btnModal).removeClass('btn-active');
            $windowModal.removeClass('show-modal').find($modalBlock).removeClass('open');
            $modalBg.removeClass("open");
            // console.log('modal click');
            $(this).addClass('btn-active');
            el = $(this).attr('data-modal');
            $body.addClass('open-modal');
            $windowModal.addClass('show-modal').find($modalBlock).filter('[data-modal="' + el + '"]').addClass('open');
            $modalBg.addClass("open");
        });
        $btnClose.on("click",function() {
            // console.log('modal close');
            $body.removeClass('open-modal').find($btnModal).removeClass('btn-active');
            $windowModal.removeClass('show-modal').find($modalBlock).removeClass('open');
            $modalBg.removeClass("open");
        });
        $modalBg.on("click",function() {
            // console.log('modal close bg');
            $body.removeClass('open-modal').find($btnModal).removeClass('btn-active');
            $windowModal.removeClass('show-modal').find($modalBlock).removeClass('open');
            $modalBg.removeClass("open");
        });
        $contactFormBtn.on("click",function() {
            setTimeout(function(){
                // console.log('site timeout');
                if ($contactFormChange.hasClass('sent')) {
                    console.log('modal close after submit');
                    $body.removeClass('open-modal').find($btnModal).removeClass('btn-active');
                    $windowModal.removeClass('show-modal').find($modalBlock).removeClass('open');
                    $modalBg.removeClass("open");
                }
            }, 2000);
        });
    }

    blockModal();


}
