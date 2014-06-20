$window = $(window)
$document = $(document)
$body = $(document.body)
$bodyHtml = $('html, body')

$header = $('#js-header')
$core = $('#js-core')
$expandSidebar = $('#js-expand-sidebar')
$sidebar = $('#js-sidebar')
$sidebarPanel = $('.sidebar-panel')

$scrollTop = $('#js-scroll-top, #js-scroll-top-sidebar')

$window.on 'scroll', ->
  scrollTop = $window.scrollTop()
  windowHeight = $window.height()
  $header.toggleClass('is-fixed',( scrollTop >= 1))

  isShowScroll = scrollTop >= windowHeight
  $scrollTop.toggleClass 'is-showed', isShowScroll
  $sidebarPanel.toggleClass 'is-scroll-top', isShowScroll

  isBottom = scrollTop + windowHeight >= $document.height()
  $core.toggleClass('is-clean-shadow', isBottom)

$scrollTop.on 'click', (e)->
  $bodyHtml.animate scrollTop: 0

$expandSidebar.on 'click', (e)->
  $sidebar.toggleClass 'is-expanded'