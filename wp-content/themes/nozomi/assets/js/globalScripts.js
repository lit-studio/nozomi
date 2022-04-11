import header from "./components/c-header";
import footer from "./components/c-footer";
import modal from "./components/c-modal";
import tabAccordeon from "./components/c-tab";
import "jquery-mask-plugin";
export default function () {
    let $body = $("body"),
        $formBlock = $body.find('.form-block'),
        $formBlockPhone = $formBlock.find('.your-tel'),
        $phoneInput = $formBlockPhone.find('input');


    function phoneMask() {
        $('.agree').prop('checked', false);
        $phoneInput.on("click", function() {
            $phoneInput.mask('+38(000) 000-00-00');
        });
    }
    header();
    footer();
    modal();
    tabAccordeon();
    phoneMask();
}
