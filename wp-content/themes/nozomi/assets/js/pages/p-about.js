export default function () {
    console.log("about page");

    let $body = $('body'),
    $aboutGalleryCol = $body.find('.about-gallery-col'),
    $hoverClick = $body.find('.about-gallery-col .item'),
    $this;
  
    function hoverEvent() {
      $hoverClick.each(function () {
        let $this = $(this);
        $this.hover(() => {
          $this.addClass('active');
          // console.log('hover');
        }, () => {
          $hoverClick.removeClass('active');
        });
      });
    }
    function clickEvent() {
      $hoverClick.on({
        'touchstart': function() {
          if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            // console.log('hidden click');
          }
          else{
            $hoverClick.removeClass('active');
            $(this).addClass('active');
            // console.log('add click');
          }
        },
      })
    }
    if (screen.width > 1024) {
      hoverEvent();
    }
    else{
      clickEvent();
    }


}
