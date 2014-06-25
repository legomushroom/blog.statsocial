$window = $(window)
$document = $(document)
$body = $(document.body)
$bodyHtml = $('html, body')

$header = $('#js-header')
$core = $('#js-core')
$expandSidebar = $('#js-expand-sidebar')
$sidebar = $('#js-sidebar')
$sidebarPanel = $('.sidebar-panel')

$headerIcon = $ '.header__right__menu-icon'

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

$scrollTop.on 'click touchstart', (e)->
  $bodyHtml.animate scrollTop: 0

$expandSidebar.on 'click touchstart', (e)->
  $sidebar.toggleClass 'is-expanded'


$headerIcon.on 'click touchstart', (e)->
  $header.toggleClass 'is-menu'
  e.preventDefault()
  e.stopPropagation()

$(document.body).on 'click touchstart', (e)->
  $header.removeClass 'is-menu'

$window.on 'resize', ->
  if $window.outerWidth() > 1100
    $sidebar.removeClass 'is-expanded'








