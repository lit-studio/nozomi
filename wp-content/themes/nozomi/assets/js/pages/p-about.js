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
      // console.log('click');
      // $hoverClick.on("click",function() {
      //   let $this = $(this);
      //   if (!$this.hasClass('active')) {
      //     $hoverClick.removeClass('active');
      //     $this.addClass('active');
      //     console.log('add click');
      //   }
      //   else{
      //     $this.removeClass('active');
      //     console.log('hidden click');
      //   }
      // });
      $hoverClick.on({
        'touchstart': function() {
          if ($(this).hasClass('active')) {
            // $(this).removeClass('red')
            // $hoverClick.removeClass('active');
            $(this).removeClass('active');
            console.log('hidden click');
            // return false;
          }
          else{
            $hoverClick.removeClass('active');
            $(this).addClass('active');
            console.log('add click');
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
