<?php
/**
 * Template part for displaying contact form modal
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lumos
 */
?>
<section class="section-modal section-modal--js">
    <div class="modal-block modal-form modal-block--js" id="c-modal-form" data-modal="c-modal-form">
        <div class="modal-wrap">
            <div  class="modal-info">
                <div class="modal-title">
                    Запис на консультацію
                </div>
                <div class="modal-desc">
                    Залиште свої контакти нижче і наші адміністратори зв'яжуться з вами найближчим часом.
                </div>
                <div class="form-block">
                    <?php echo do_shortcode( '[contact-form-7 id="34" title="Contact form"]' ); ?>
                </div>
            </div>
            <div class="modal-close">
                <button class="btn btn-modal-close btn-modal-close--js"></button>
            </div>
            <div class="modal-bg modal-bg--js"></div>
        </div>
    </div>
</section>