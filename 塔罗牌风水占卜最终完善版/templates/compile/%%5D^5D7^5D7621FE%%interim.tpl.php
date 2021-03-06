<?php /* Smarty version 2.6.25, created on 2019-03-28 15:29:25
         compiled from index/xingzuo2019/interim.tpl */ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=0"/>
    <title>2019运势分析</title>
    <link rel="stylesheet" href="/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/css/common.css?v=1.7">
    <link rel="stylesheet" href="/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/css/interim.css?v=1.7">
    <script type="text/javascript" src="/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/script/rem.js?v=1.7"></script>
</head>

<body>
<section class="page">
    <section class="main-wrap flex-column">
        <div class="banner-wrap flex-column">
            <img class="banner" src="/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/image/interim/banner.png?v=1.7">
        </div>
        <div class="owner-wrap flex-column">
            <span class="owner flex-center"><em><?php echo $this->_tpl_vars['row']['data']['xz']; ?>
</em>的</span>
            <span class="owner-2 flex-center">2019运势分析</span>
        </div>

        <ul class="items flex-column">
            <li class="item item-1 flex-center"><img class="icon interim" src="/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/image/interim/wait_icon.png?v=1.7"><span>星座基础分析中&emsp;</span></li>
            <li class="item item-2 flex-center"><img class="icon interim" src="/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/image/interim/wait_icon.png?v=1.7"><span>爱情运势分析中&emsp;</span></li>
            <li class="item item-3 flex-center"><img class="icon interim" src="/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/image/interim/wait_icon.png?v=1.7"><span>财富运势分析中&emsp;</span></li>
            <li class="item item-4 flex-center"><img class="icon interim" src="/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/image/interim/wait_icon.png?v=1.7"><span>事业运势分析中&emsp;</span></li>
        </ul>
        <span class="over-text flex-center" style="display: none">分析完毕, 生成报告中...</span>
    </section>
</section>

</body>

<script type="text/javascript" src="/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/script/jquery.min.js"></script>
<script type="text/javascript" src="/ffsm/statics/divine.cdn.h55u.com/platform/js/zwSdk.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.item-1 .icon').removeClass('interim');
            $('.item-1 .icon').attr('src', '/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/image/interim/over_icon.png?v=1.7');
            $('.item-1 span').text('星座基础分析完成');
            setTimeout(function () {
                $('.item-2 .icon').removeClass('interim');
                $('.item-2 .icon').attr('src', '/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/image/interim/over_icon.png?v=1.7');
                $('.item-2 span').text('爱情运势分析完成');
                setTimeout(function () {
                    $('.item-3 .icon').removeClass('interim');
                    $('.item-3 .icon').attr('src', '/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/image/interim/over_icon.png?v=1.7');
                    $('.item-3 span').text('财富运势分析完成');
                    setTimeout(function () {
                        $('.item-4 .icon').removeClass('interim');
                        $('.item-4 .icon').attr('src', '/ffsm/statics/const.cdn.xingzuozhuanjia.com/Horoscope/image/interim/over_icon.png?v=1.7');
                        $('.item-4 span').text('事业运势分析完成');
                        setTimeout(function () {
                            $('.over-text').fadeIn();
                            setTimeout(function () {
                                var orderId = "<?php echo $this->_tpl_vars['row']['oid']; ?>
";
                                var src = '1001';
                                window.location.href = "/?ac=xingzuo2019&oid=" + orderId+"&src="+src;
                            },1000)
                        }, 200);
                    }, 1000);
                }, 1000);
            }, 1000);
        },2000);

    });
</script>

</html>