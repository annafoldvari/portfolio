(function($) {
  var $win = $(window);
  var $rows = $('#content-portfolio .row1');

  // If delay is zero, animation happens as soon as element in on screen.
  // If delay is 100px, animation happens once 100px of the element is on screen.
  var delay = 100;

  $rows.css('opacity', 0);

  $win.on('scroll', function () {
    var scrollTop = $win.scrollTop();

    $rows.each(function () {
        var $self = $(this);
        var prev=$self.offset();
        var $children = $self.children();

        if ((scrollTop - prev.top) > -$win.height() + delay) {
          var $children = $self.children();
          $children.eq(0).addClass('fadeInLeft');
          $children.eq(1).addClass('fadeInRight');
          $self.css('opacity', 1);
        }
    });
  }).scroll();
})( jQuery );