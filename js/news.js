$(function() {
 // 关注按钮
$("#follow").on("tap",function() {
     if($("#follow").html() == "关注") {
        $(this).html("已关注");
        $(this).css({"background":"white","color":"black","border":"1px solid black"});
     } else {
         $(this).html("关注");
         $(this).css({"background":"#55dbaa","color":"white","border":"none"});
     }
})
 // 点赞
var flag = true;
$("#heart").on("tap",function() {
     if(flag) {
         $("#heart").attr("src","../images/Heart-select.png");
         flag = false;
     } else {
         $("#heart").attr("src","../images/news-heart.png");
         flag = true;
     }
})

 //输出框 
 $(".input-k").on("tap", function() {
    $(".news-comments").css({"display": "none"});
    $(".news-release").css({"display": "block","bottom": "0"});
 })

 $(".new-return").on("tap", function() {
    $(".news-release").css({"display": "none"});
    $(".news-comments").css({"display": "block"});
 })

// 发表评论
    $(".publish").on("tap", function() {
        var myDate = new Date();
        //获取当前年
        var year=myDate.getFullYear();
        //获取当前月
        var month=myDate.getMonth()+1;
        //获取当前日
        var date=myDate.getDate();
        var h=myDate.getHours();       //获取当前小时数(0-23)
        var m=myDate.getMinutes();
        var result1 = $("#comments").val();
        

        if(result1 != "") {
            $.ajax({
                url:"../cn/comment.php?key=" + result1,
                type: "get",
                success: function(data) {
                    console.log(data)
                    $(".area").append('<p>' + "*匿名游客" + ":" +'</p>')
                    $(".area").append('<p>'+ result1 + '</p>');
                    $(".area").append('<p>'+ myDate + '</p>');
                }
            })
        }
    })
    
})

// 清除搜索记录

    $("#btna").on("tap", function() {
        console.log(3)
    })



