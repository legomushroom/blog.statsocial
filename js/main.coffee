# class Main
#   constructor:(@o={})->
#     @vars()
#     @listen()

#   vars:->
#     @$w             = $(window)
#     @isStopLoop     = false
#     @prevScrollTop  = 0
#     @loop           = @loop.bind @

#   listen:->
#     @$w.on 'scroll', =>
#       console.wran 'scroll'
#       @scrollTop = @$w.scrollTop()
#       @stopLoop()

#     @$w.on 'touchstart', => 
#       @startLoop()

#   loop: (isStop)->
#     return if @isStopLoop
#     console.log 'loop', document.body.scrollTop
#     requestAnimationFrame @loop

#   startLoop:->
#     console.log 'loop start'
#     @isStopLoop = false
#     @loop()
#   stopLoop:->
#     console.log 'loop end'
#     @isStopLoop = true


# new Main




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

$scrollTop.on 'click touchstart', (e)->
  $bodyHtml.animate scrollTop: 0

$expandSidebar.on 'click touchstart', (e)->
  $sidebar.toggleClass 'is-expanded'

# setTimeout ->
#   $window.trigger 'scroll'
# , 3000


# window.scroll1 = (isRunning= true)->
#   return if !isRunning
#   requestAnimationFrame window.scroll1
#   console.log 'frame'



# $window.on 'touchstart', ->
#   window.scroll1()
#   console.log 'touchstart'

# $window.on 'touchend', ->
#   console.log 'touchend'


