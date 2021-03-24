$(function(){
   // 点击校企合作
   $('.apply_a2').click(function(){
      $('.zhe').stop().fadeIn(500)
   })
   // 点击大学生见习申请
   $('.apply_a1').click(function(){
      $('.zhe2').stop().fadeIn(500)
   })
   // 点击弹出框关闭
   $('.clear').click(function(){
      $('.zhe,.zhe2').stop().fadeOut(500)
   })
   // 点击弹出框提交申请
   $('.bb_b a').click(function(){
      $('.zhe,zhe2').stop().fadeOut(500)
   })
})