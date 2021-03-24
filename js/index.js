$(function(){
   // 移入更多设置
   $('.ul1 li').mouseover(function(){
      var index=$(this).index()
      $('.ol1 li').eq(index).hide()
      $('.ol2 li').eq(index).stop().fadeIn(700)
   })
   // 移出
   $('.ul1 li').mouseout(function(){
      var index=$(this).index()
      $('.ol1 li').eq(index).show()
      $('.ol2 li').eq(index).stop().fadeOut(700)
   })
   // 点击头部咨询
   $('.header_a').click(function(){
      $('.zhe').stop().fadeIn(500)
   })
   // 点击底部咨询
   $('.partner .bottom').click(function(){
      $('.zhe').stop().fadeIn(500)
   })
   // 点击弹出框关闭
   $('.clear').click(function(){
      $('.zhe').stop().fadeOut(500)
      $('.zhe3').stop().fadeOut(500)
   })
   // 点击弹出框提交申请
   $('.bb_b a').click(function(){
      $('.zhe').stop().fadeOut(500)
   })
   // 点击更多
   $('.more').click(function(){
      $('.zhe3').stop().fadeIn(500)
   })
})