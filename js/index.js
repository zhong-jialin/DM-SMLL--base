$(function(){
    // 轮播图速度
    $('.carousel').carousel({
        interval: 3000
      })
    // logo图片
    $('.imglogo').hover(function(){
        $(this).attr("src","img/logo.png");
    },function(){
        $(this).attr("src","img/logo2.png");
    })

    //轮播图滑动效果
    let starX =0, endX = 0;
    let carouselInner = $('#lk_carousel .carousel-inner')[0];
    

    // 轮播图
    // 监听窗口
    $(window).on('resize',function(){
        //获取窗口宽度
        //设置局部变量
        let clientW = $(window).width();
        //设置窗口临界点
        let ShowBigpic = clientW >= 900;
        let $allItems = $('#lk_carousel .carousel-item');
         //console.log($allItems);
        //对$allItems遍历 拿到
        $allItems.each((index, item)=>{
            // console.log(item);
            // 取路径 true取大图
            let src = ShowBigpic ? $(item).data('lg-img'):$(item).data('sm-img');
            let imgUrl = `url(${src})`;
            // console.log(imgUrl);
            //console.log(src);
        //     // 大图添加背景 empty()：加背景之前清空内容再加背景防止叠加图片
             $(item).empty().css({
                backgroundImage:imgUrl
             });
             //创建img标签
             if(!ShowBigpic){
                let imgelem = `<img src="${src}">`;
                // 清除所有内容在添加img
                $(item).empty().append(imgelem);
             }
         });

    });
    $(window).trigger('resize');
    //调用函数



    // 内容超出显示滚动条
    $(window).on('resize', ()=>{
        let $ul = $('#lk_produce .nav-tabs')
        let lis = $('#lk_produce .nav-tabs .nav-item')
        let lisw = 0;
        lis.each((index, item)=>{
            lisw += $(item).width()
        })
        // console.log(lisw);
        // 设置ul父元素长度变量
        let parenw = $ul.parent().width();
        if(lisw>parenw){
            $ul.css({
                // 大于父元素宽度时添加长度 显示滚动条 父元素设置了overflow：auto
                width: lisw + 'px'
            })
        }else{
            //小于父元素长度 删除style属性 去掉滚动条
            $ul.removeAttr('style');
        }
    }).trigger('resize');
        // 二级菜单
        // 鼠标经过显示菜单
        $('#lk_header .navbar-tittle li').mouseover(function(){
                var index = $(this).index();
                //$('.downtab-title .downtab').eq(index).stop().slideDown("slow").siblings().css('display','none');
                $('.downtab-title .downtab').eq(index).stop().slideDown("slow").siblings().stop().slideUp("slow");
                //当二级菜单显示时鼠标焦点进入菜单时不进行任何改变， 当鼠标焦点离开菜单时收回菜单
                $('.downtab-title .downtab').hover(function(){
                    ;
                },function(){
                    $('.downtab-title .downtab').slideUp("slow");
                })
        })
        // $('#lk_carousel').mouseover(function(){
        //         var index = $(this).index();
        //         $('.downtab-title .downtab').slideUp("slow");
        //         // console.log(indexx); 
        // })

// -------------------------------------------    
        // 点击最后一个li标签回到顶部
    $('.fixtool li:last').click(function(){
        $('body,html').animate({
            scrollTop: 0
          },1000);    
    })
    // .downtab-title的高度
    var toolTop = $('#lk_produce').offset().top;
    // 定义节流阀变量
    var flag = true;
    // 页面加载调用函数
    scrollTop()
    scrollTop2()
    // 文档大于变量高度时 电梯导航 触发淡出效果 
    //低于时触发 电梯导航消失
    function scrollTop2(){
        if($(document).scrollTop() >= toolTop) {
            $('.fixtools').fadeIn();
        }else{
            $('.fixtools').fadeOut();
        }
    }
    function scrollTop(){
        if($(document).scrollTop() >= toolTop) {
            $('.fixtool').fadeIn();
        }else{
            $('.fixtool').fadeOut();
        }
    }
    $(window).scroll(function(){
        // 滚动页面调用函数
        scrollTop()
        // 滚动到某个内容区域 电梯导航添加或移除current类名
        // 便利w类名 i是下标 ele offset值
        //flag 默认开启 点击li标签时关闭 不触发滚动页面函数 li标签点击动画结束时在开启flag
        if(flag){
            $("#lk_about .ww").each(function(i,ele){
                if($(document).scrollTop() >= $(ele).offset().top){
                    $('.fixtool li').eq(i).addClass("current").siblings().removeClass("current");
                }
            })
        }

    })
    // 电梯导航
    // 点击li标签不需要执行滚动页面函数
    // 点击效果结束在开启节流阀
    $('.fixtool li').click(function(){
        flag = false;
        // 选出对应索引号的内容区的盒子 计算他的offset
       var current =  $("#lk_about .w").eq($(this).index()).offset().top;
    //    页面滚动效果
        $("body, html").stop().animate({
            // 吧盒子的页面高度赋给窗口
            scrollTop: current
            // 点击效果结束回调函数  开启节流阀flag = true
        },function(){

            flag = true;
        })
        // 点击后当前li添加类名
        $(this).addClass("current").siblings().removeClass("current")
    })
})