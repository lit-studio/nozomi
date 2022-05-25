export default function () {
    console.log("about page");

    let $body = $('body'),
    $aboutGalleryCol = $body.find('.about-gallery-col'),
    $hoverClick = $aboutGalleryCol.find('.item');

  
    function hoverEvent() {
        console.log('hover');
        $hoverClick.each(function () {
          let $this = $(this);
          $this.hover(() => {
            $this.addClass('active');
            console.log('hover');
          }, () => {
            $hoverClick.removeClass('active');
          });
        });
      }
      function clickEvent() {
        console.log('click');
        $hoverClick.on("click",function() {
          let $this = $(this);
          if (!$this.hasClass('active')) {
            $hoverClick.removeClass('active');
            $this.addClass('active');
            console.log('add sclick');
          }
          else{
            $this.removeClass('active');
            console.log('hidden click');
          }
        });
      }
      if (screen.width > 1024) {
        hoverEvent();
      }
      else{
        clickEvent();
      }

}
