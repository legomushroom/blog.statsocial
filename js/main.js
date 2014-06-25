(function() {
  var $body, $bodyHtml, $core, $document, $expandSidebar, $header, $headerIcon, $scrollTop, $sidebar, $sidebarPanel, $window;

  $window = $(window);

  $document = $(document);

  $body = $(document.body);

  $bodyHtml = $('html, body');

  $header = $('#js-header');

  $core = $('#js-core');

  $expandSidebar = $('#js-expand-sidebar');

  $sidebar = $('#js-sidebar');

  $sidebarPanel = $('.sidebar-panel');

  $headerIcon = $('.header__right__menu-icon');

  $scrollTop = $('#js-scroll-top, #js-scroll-top-sidebar');

  $window.on('scroll', function() {
    var isBottom, isShowScroll, scrollTop, windowHeight;
    scrollTop = $window.scrollTop();
    windowHeight = $window.height();
    $header.toggleClass('is-fixed', scrollTop >= 1);
    isShowScroll = scrollTop >= windowHeight;
    $scrollTop.toggleClass('is-showed', isShowScroll);
    $sidebarPanel.toggleClass('is-scroll-top', isShowScroll);
    isBottom = scrollTop + windowHeight >= $document.height();
    return $core.toggleClass('is-clean-shadow', isBottom);
  });

  $scrollTop.on('click touchstart', function(e) {
    return $bodyHtml.animate({
      scrollTop: 0
    });
  });

  $expandSidebar.on('click touchstart', function(e) {
    return $sidebar.toggleClass('is-expanded');
  });

  $headerIcon.on('click touchstart', function(e) {
    $header.toggleClass('is-menu');
    e.preventDefault();
    return e.stopPropagation();
  });

  $(document.body).on('click touchstart', function(e) {
    return $header.removeClass('is-menu');
  });

  $window.on('resize', function() {
    if ($window.outerWidth() > 1100) {
      return $sidebar.removeClass('is-expanded');
    }
  });

}).call(this);
