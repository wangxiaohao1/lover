<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx767be5a32678a061","ae34d0d865569de5d29e562faef8bcb7");
$sign = $jssdk->getSignPackage();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>2017年嘉旭福美公司年会邀请函</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1,user-scalable=no">
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0;">
    <link href="css/min.css" rel="stylesheet">
    <link href="file/swiper-3.3.1.min.css" rel="stylesheet">
    <script src="file/jquery-1.12.3.min.js"></script>
    <script src="file/swiper-3.3.1.min.js"></script>
    <script src="file/swiper.animate1.0.2.min.js"></script>
</head>
<body>
<div class="swiper-container"  style="background-image:url('img/backg.png')">
    <img src="img/music.png" id="music" style=" width:10%;
    position: absolute;
    right: 20px;
    top: 10px;
    z-index: 99;">
    <!--<img class="header1" src="img/header1.png" style="width: 45%;position: fixed;margin-top: 3%;right: 0px;z-index: 99"/>-->
    <!--<img class="footer" src="img/footer.png" style="width: 100%;position: fixed;bottom: 0px">-->

    <div class="swiper-wrapper">
        <div class="swiper-slide" id="slide1">
            <img id="header1" src="img/header1.png" style="width: 45%;position: absolute;margin-top: 0%;right: 0px;z-index: 99"/>
            <img id="footer1" src="img/footer.png" style="width: 100%;position: absolute;bottom: 0px">
            <img id="headerjxfm" src="img/header.png" style="width: 35%;margin-top: 30px">
            <img id="header11" src="img/header2.png" style="width: 50%;float: left;margin-left: 26%;margin-top: 4%"/>
            <img id="invate1" src="img/invate.png" style="width: 50%;float: left;margin-left: 26%;">

            <span id="invate" style="font-weight: bold; line-height: inherit;  background-color: initial; color: rgb(175, 23, 35);width: 50%;float: left;margin-left: 26%;text-align: center"> <br><br>嘉旭福美2017年会</span>
            </div>

        <div class="swiper-slide" id="slide2">
            <img id="header2" src="img/header1.png" style="width: 45%;position: absolute;margin-top: 0%;right: -10%;z-index: 99"/>
            <img id="footer2" src="img/footer.png" style="width: 100%;position: absolute;bottom: 0px">
<div id="divback2" style="width: 80%;height: 90%;background-color: white;opacity: 0.4;float: left;margin-left: 10%">

</div>
            <img src="img/czyq.png" id="bouimg2" style="width: 70%;position: absolute;left: 15%;top:10%;z-index: 80">
            <span id="bouhead2" style="font-weight: bold;  background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:9%;z-index: 80;text-align: center">诚挚邀请</span>

            <div id="bouheader2" style="text-align:justify; color: rgb(196, 67, 60); background-color: initial;width: 70%;position: absolute;left: 15%;top:21%;z-index: 80;">尊敬的女士/先生<br>&nbsp; &nbsp;本公司迎来了她的第四个新年，我们深知在发展的道路上离不开您的支持与厚爱。公司决定在2017年1月19日举办“智慧福美，创赢未来，2016年度员工表彰大会暨迎春联欢会”。<br>&nbsp; &nbsp;公司为大家准备了丰富多彩的活动，更有超级大奖等您来。故在此邀请您，与您一起展望未来，希望您准时参加。</div>


        </div>

            <div class="swiper-slide" id="slide3">
                <img id="header3" src="img/header1.png" style="width: 45%;position: absolute;margin-top: 0%;right: -10%;z-index: 99"/>
                <img id="footer3" src="img/footer.png" style="width: 100%;position: absolute;bottom: 0px">
                <img id="hylcimg" src="img/czyq.png" style="width: 70%;position: absolute;left: 15%;top:10%;z-index: 80">
                <span id="hylcspan" style="font-weight: bold;line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:9%;z-index: 80;text-align: center">会议流程</span>


                <span  style="background-color: white; color: rgb(196, 67, 60);width: 70%;height: 0.5%;position: absolute;left: 15%;top:28%;z-index: 90;text-align: center"></span>
                <img id="hylc31" src="img/qiandao.png" style="position: absolute;left: 45%;top:23%;z-index: 90;text-align: center;width: 10%">
                <span id="hylc31left" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 15%;top:23%;z-index: 90;text-align: center;line-height: 200%">15:40-16:00</span>
                <span id="hylc31right" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 55%;top:23%;z-index: 90;text-align: center;line-height: 200%">嘉宾签到</span>


                <span  style="background-color: white; color: rgb(196, 67, 60);width: 70%;height: 0.5%;position: absolute;left: 15%;top:36%;z-index: 90;text-align: center"></span>
                <img id="hylc32" src="img/zhici.png" style="position: absolute;left: 45%;top:31%;z-index: 90;text-align: center;width: 10%">
                <span id="hylc32left" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 15%;top:31%;z-index: 90;text-align: center;line-height: 200%">16:00-16:20</span>
                <span id="hylc32right" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 55%;top:31%;z-index: 90;text-align: center;line-height: 200%">领导致辞</span>


                <span  style="background-color: white; color: rgb(196, 67, 60);width: 70%;height: 0.5%;position: absolute;left: 15%;top:44%;z-index: 90;text-align: center"></span>
                <img id="hylc33" src="img/bizhang.png" style="position: absolute;left: 45%;top:39%;z-index: 90;text-align: center;width: 10%">
                <span id="hylc33left" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 15%;top:39%;z-index: 90;text-align: center;line-height: 200%">16:20-16:40</span>
                <span id="hylc33right" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 55%;top:39%;z-index: 90;text-align: center;line-height: 200%">员工表彰</span>

                <span  style="background-color: white; color: rgb(196, 67, 60);width: 70%;height: 0.5%;position: absolute;left: 15%;top:52%;z-index: 90;text-align: center"></span>
                <img id="hylc34" src="img/lianhuanhui.png" style="position: absolute;left: 45%;top:47%;z-index: 90;text-align: center;width: 10%">
                <span id="hylc34left" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 15%;top:47%;z-index: 90;text-align: center;line-height: 200%">16:40-17:40</span>
                <span id="hylc34right" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 55%;top:47%;z-index: 90;text-align: center;line-height: 200%">联欢会</span>

                <span  style="background-color: white; color: rgb(196, 67, 60);width: 70%;height: 0.5%;position: absolute;left: 15%;top:60%;z-index: 90;text-align: center"></span>
                <img id="hylc35" src="img/heying.png" style="position: absolute;left: 45%;top:54%;z-index: 90;text-align: center;width: 10%">
                <span id="hylc35left" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 15%;top:55%;z-index: 90;text-align: center;line-height: 200%">17:40-17:50</span>
                <span id="hylc35right" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 55%;top:55%;z-index: 90;text-align: center;line-height: 200%">合影</span>

                <span  style="background-color: white; color: rgb(196, 67, 60);width: 70%;height: 0.5%;position: absolute;left: 15%;top:68%;z-index: 90;text-align: center"></span>
                <img id="hylc36" src="img/wancan.png" style="position: absolute;left: 45%;top:63%;z-index: 90;text-align: center;width: 10%">
                <span id="hylc36left" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 15%;top:63%;z-index: 90;text-align: center;line-height: 200%">18:00</span>
                <span id="hylc36right" style="color: rgb(196, 67, 60);width: 30%;height: 5%;position: absolute;left: 55%;top:63%;z-index: 90;text-align: center;line-height: 200%">晚餐</span>



                <!--<div  id="hylc31" class="hylc" style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:20%;z-index: 80;text-align: center;background-color: #90111A;vertical-align: middle">-->
                    <!--<div style="text-align: left;"><span style="line-height: 200%;color: rgb(255, 203, 208);">&nbsp;15:40-16:00  &nbsp;签到</span></div>-->
                <!--</div>-->
                <!--<div  id="hylc32" class="hylc" style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:29%;z-index: 80;text-align: center;background-color: #90111A;vertical-align: middle">-->
                    <!--<div style="text-align: left;"><span style="line-height: 200%;color: rgb(255, 203, 208);">&nbsp;16:00-16:20  &nbsp;领导致词</span></div>-->
                <!--</div>-->
                <!--<div  id="hylc33" class="hylc" style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:38%;z-index: 80;text-align: center;background-color: #90111A;vertical-align: middle">-->
                    <!--<div style="text-align: left;"><span style="line-height: 200%; color: rgb(255, 203, 208);">&nbsp;16:20-16:40 &nbsp;员工表彰</span></div>-->
                <!--</div>-->
                <!--<div  id="hylc34" class="hylc" style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:47%;z-index: 80;text-align: center;background-color: #90111A;vertical-align: middle">-->
                    <!--<div style="text-align: left;"><span style="line-height: 200%; color: rgb(255, 203, 208);">&nbsp;16:40-17:40 &nbsp;联欢会</span></div>-->
                <!--</div>-->
                <!--<div id="hylc35" class="hylc" style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:55%;z-index: 80;text-align: center;background-color: #90111A;vertical-align: middle">-->
                    <!--<div style="text-align: left;"><span style="line-height: 200%; color: rgb(255, 203, 208);">&nbsp;17:40-17:50 &nbsp;合影</span></div>-->
                <!--</div>-->
                <!--<div id="hylc36" class="hylc" style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:64%;z-index: 80;text-align: center;background-color: #90111A;vertical-align: middle">-->
                    <!--<div style="text-align: left;"><span style="line-height: 200%;color: rgb(255, 203, 208);">&nbsp;&nbsp;18:00  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;晚餐</span></div>-->
                <!--</div>-->


            </div>
        <div class="swiper-slide" id="slide4">
            <img id="header4" src="img/header1.png" style="width: 45%;position: absolute;margin-top: 0%;right: -10%;z-index: 99"/>
            <img id="footer4" src="img/footer.png" style="width: 100%;position: absolute;bottom: 0px">
            <img id="ycjmimg" src="img/czyq.png" style="width: 70%;position: absolute;left: 15%;top:10%;z-index: 80">
            <span id="ycjmspan" class="font45" style="font-weight: bold; line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:9%;z-index: 80;text-align: center">演出节目</span>

           <img id="backtop4" src="img/backtop4.png" style="width: 70%;position: absolute;left: 15%;top: 20%">
           <img id="backbottom4" src="img/backbottom42.png" style="width: 70%;position: absolute;left: 15%;top: 24%">

            <div id="ycjm41" class="hylc"  style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:27%;z-index: 80;text-align: center;vertical-align: middle">
                <div style="text-align: center"><span style="line-height: 200%; color: rgb(196, 67, 60);">开场舞蹈</span></div>
            </div>
            <div id="ycjm42"  class="hylc" style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:35%;z-index: 80;text-align: center;vertical-align: middle">
                <div style="text-align: center"><span style="line-height: 200%; color: rgb(196, 67, 60);">相声表演</span></div>
            </div>
            <div id="ycjm43"  class="hylc" style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:43%;z-index: 80;text-align: center;vertical-align: middle">
                <div style="text-align: center"><span style="line-height: 200%; color: rgb(196, 67, 60);">歌曲演唱</span></div>
            </div>
            <div id="ycjm44"  class="hylc" style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:51%;z-index: 80;text-align: center;vertical-align: middle">
                <div style="text-align: center"><span style="line-height: 200%; color: rgb(196, 67, 60);">乐器表演</span></div>
            </div>
            <div id="ycjm45"  class="hylc" style="cursor: default;width: 70%;height: 7%;position: absolute;left: 15%;top:59%;z-index: 80;text-align: center;vertical-align: middle">
                <div style="text-align: center"><span style="line-height: 200%; color:rgb(196, 67, 60);">大合唱</span></div>
            </div>
        </div>
        <div class="swiper-slide" id="slide5">
            <img id="header5" src="img/header1.png" style="width: 45%;position: absolute;margin-top: 0%;right: -10%;z-index: 99"/>
            <img id="footer5" src="img/footer.png" style="width: 100%;position: absolute;bottom: 0px">
            <img id="cjhjimg" src="img/czyq.png" style="width: 70%;position: absolute;left: 15%;top:10%;z-index: 80">
            <span id="cjhjspan" class="font45" style="font-weight: bold; line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:9%;z-index: 80;text-align: center">抽奖环节</span>
            <div id="cjhjdiv1"  style="width: 80%;height: 70%;background-color: white;opacity: 0.4;float: left;margin-left: 10%;margin-top: 32%;border:2px solid red">

            </div>
            <div id="cjhjdiv2" class="hylc" style="line-height: inherit; color: rgb(196, 67, 60); background-color: initial;width: 70%;position: absolute;left: 15%;top:19%;z-index: 80;text-align: center;">
                <p> &nbsp;</p>
                <p>一等奖</p>
                <p>奖品：四件套</p>
                <p>二等奖 </p>
                <p>奖品：时尚双肩背包</p>
                <p>三等奖 </p>
                <p>奖品：毛毯</p>
                <p>更有幸运大奖等您</p>
                <!--<p style="font-size: 35px" id="xydj">幸运大奖</p>-->
                </div>

        </div>
        <div class="swiper-slide" id="slide6">
            <img id="header6" src="img/header1.png" style="width: 45%;position: absolute;margin-top: 0%;right: -10%;z-index: 99"/>
            <img id="footer6" src="img/footer.png" style="width: 100%;position: absolute;bottom: 0px">
            <img id="sjddimg" src="img/czyq.png" style="width: 70%;position: absolute;left: 15%;top:10%;z-index: 80">
            <span id="sjddspan" class="font45" style="font-weight: bold; line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:9%;z-index: 80;text-align: center">时间地点</span>
       <div id="sjdd61" style=" line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:20%;z-index: 80;text-align: center">定兴县四季经典酒店<br>2017年1月19日下午四点</div>
            <img id="sjdd63" src="img/didian.jpg" style="width: 70%;position: absolute;left: 15%;top:30%;border-radius: 10%;border: 2px solid red">
            <!--<p id="sjdd62" class="hylc" style="font-weight: bold;line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:69%;z-index: 80;text-align: center">2017年1月19日下午四点</p>-->

        </div>
        <div class="swiper-slide" id="slide7">
            <img id="header7" src="img/header1.png" style="width: 45%;position: absolute;margin-top: 0%;right: -10%;z-index: 99"/>
            <img id="footer7" src="img/footer.png" style="width: 100%;position: absolute;bottom: 0px">
            <span id="wenzi71" style=" line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:15%;z-index: 80;text-align: center">谢谢观看</span>
            <span id="wenzi72" style="line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:20%;z-index: 80;text-align: center">Thanks for watching</span>
            <span id="wenzi73" style=" line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:27%;z-index: 80;text-align: center">感谢嘉人们的到来</span>
            <span id="wenzi74" style="line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:32%;z-index: 80;text-align: center">Look forward to the arrival of the family</span>
<img id="erweima" style="width: 30%;position: absolute;left:35%;top:40% " src="img/erweima.jpg">
            <span id="wenzi75" style="font-family: ziti; line-height: inherit; background-color: initial; color: rgb(196, 67, 60);width: 70%;position: absolute;left: 15%;top:65%;z-index: 80;text-align: center">因您所托·不负重托</span>

        </div>
    </div>

        </div>

<audio src="img/bg.mp3" autoplay="" id="audio" loop></audio>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    $(function(){
        $("#header1").attr("class","animated fadeinrightbig");
        $("#headerjxfm").attr("class","animated fadeinleftbig");
        $("#header11").attr("class","animated fadein");
        $("#invate1").attr("class","animated flipinx");
        $("#invate").attr("class","animated flipinx");
        $("#footer1").attr("class","animated fadeinupbig");
        $("#music").attr("class","loading");
        var i=0;
        var music = document.getElementById("audio");
        $("#music").click(function(){
            if(i==0){

                $("#music").removeClass("loading");
                i=1;
                music.pause();
            }
            else{
                $("#music").attr("src","img/music.png");
                $("#music").attr("class","loading");
                i=0;
                music.play();
            }
        })

        var myswiper1 = new Swiper('.swiper-container',{
            direction:'vertical',
            centeredSlides: true,
            slidesPerView: 'auto',
            freeMode:false,
            watchSlidesProgress : true,
            freeModeMomentumBounce:false,
            resistanceRatio : 0,
            runCallbacksOnInit : true,
            onSlideChangeStart:function(swiper){
                var index = swiper.activeIndex;
                if(index==0){
                    $("#header2").removeClass("animated fadeinrightbig");
                    $("#footer2").removeAttr("class","animated fadeinupbig");
                    $("#divback2").removeAttr("class","animated fadeindownbig");
                    $("#bouimg2").removeAttr("class","animated bounceIn");
                    $("#bouhead2").removeAttr("class","animated bounceIn");
                    $("#bouheader2").removeAttr("class","animated bounceIn");
                    $("#boutext21").removeAttr("class","animated bounceIn");
                    $("#boutext22").removeAttr("class","animated bounceIn");
                }
                if(index==1){
                    $("#header1").removeClass("animated fadeinrightbig");
                    $("#headerjxfm").removeClass("animated fadeinleftbig");
                    $("#header11").removeClass("animated fadein");
                    $("#invate1").removeClass("animated flipinx");
                    $("#invate").removeClass("animated flipinx");
                    $("#footer1").removeClass("animated fadeinupbig");
                    $("#header3").removeClass("animated fadeinrightbig");
                    $("#footer3").removeAttr("class","animated fadeinupbig");
                    $("#hylcimg").removeAttr("class","animated flipinx");
                    $("#hylcspan").removeAttr("class","animated flipinx");
                    $("#hylc31").removeAttr("class","animated flipinx");
                    $("#hylc32").removeAttr("class","animated flipinx");
                    $("#hylc33").removeAttr("class","animated flipinx");
                    $("#hylc34").removeAttr("class","animated flipinx");
                    $("#hylc35").removeAttr("class","animated flipinx");
                    $("#hylc36").removeAttr("class","animated flipinx");
                    $("#hylc31").removeAttr("class","animated fadein");
                    $("#hylc32").removeAttr("class","animated fadein");
                    $("#hylc33").removeAttr("class","animated fadein");
                    $("#hylc34").removeAttr("class","animated fadein");
                    $("#hylc35").removeAttr("class","animated fadein");
                    $("#hylc36").removeAttr("class","animated fadein");
                    $("#hylc31left").removeAttr("class","animated fadeinleft");
                    $("#hylc32left").removeAttr("class","animated fadeinleft");
                    $("#hylc33left").removeAttr("class","animated fadeinleft");
                    $("#hylc34left").removeAttr("class","animated fadeinleft");
                    $("#hylc35left").removeAttr("class","animated fadeinleft");
                    $("#hylc36left").removeAttr("class","animated fadeinleft");
                    $("#hylc31right").removeAttr("class","animated fadeinright");
                    $("#hylc32right").removeAttr("class","animated fadeinright");
                    $("#hylc33right").removeAttr("class","animated fadeinright");
                    $("#hylc34right").removeAttr("class","animated fadeinright");
                    $("#hylc35right").removeAttr("class","animated fadeinright");
                    $("#hylc36right").removeAttr("class","animated fadeinright");
                }

                if(index==2){
                    $("#header4").removeClass("animated fadeinrightbig");
                    $("#footer4").removeAttr("class","animated fadeinupbig");
                    $("#header2").removeClass("animated fadeinrightbig");
                    $("#footer2").removeAttr("class","animated fadeinupbig");
                    $("#divback2").removeAttr("class","animated fadeindownbig");
                    $("#bouimg2").removeAttr("class","animated bounceIn");
                    $("#bouhead2").removeAttr("class","animated bounceIn");
                    $("#bouheader2").removeAttr("class","animated bounceIn");
                    $("#boutext21").removeAttr("class","animated bounceIn");
                    $("#boutext22").removeAttr("class","animated bounceIn");
                    $("#ycjmimg").removeAttr("class","animated fadeinup");
                    $("#ycjmspan").removeAttr("class","animated fadeinup");
                    $("#ycjm41").removeAttr("class","animated fadeinup");
                    $("#ycjm42").removeAttr("class","animated fadeinup");
                    $("#ycjm43").removeAttr("class","animated fadeinup");
                    $("#ycjm44").removeAttr("class","animated fadeinup");
                    $("#ycjm45").removeAttr("class","animated fadeinup");
                    $("#backtop4").removeAttr("class","animated fadeinup");
                    $("#backbottom4").removeAttr("class","animated fadeinup");

                }
                if(index==3){
                    $("#header5").removeClass("animated fadeinrightbig");
                    $("#footer5").removeAttr("class","animated fadeinupbig");
                    $("#header3").removeClass("animated fadeinrightbig");
                    $("#footer3").removeAttr("class","animated fadeinupbig");
                    $("#hylcimg").removeAttr("class","animated flipinx");
                    $("#hylcspan").removeAttr("class","animated flipinx");
                    $("#hylc31").removeAttr("class","animated flipinx");
                    $("#hylc32").removeAttr("class","animated flipinx");
                    $("#hylc33").removeAttr("class","animated flipinx");
                    $("#hylc34").removeAttr("class","animated flipinx");
                    $("#hylc35").removeAttr("class","animated flipinx");
                    $("#hylc36").removeAttr("class","animated flipinx");
                    $("#cjhjimg").removeAttr("class","animated flipiny");
                    $("#cjhjspan").removeAttr("class","animated flipiny");
                    $("#cjhjdiv1").removeAttr("class","animated flipiny2");
                    $("#cjhjdiv2").removeAttr("class","animated flipiny");
                    $("#hylc31").removeAttr("class","animated fadein");
                    $("#hylc32").removeAttr("class","animated fadein");
                    $("#hylc33").removeAttr("class","animated fadein");
                    $("#hylc34").removeAttr("class","animated fadein");
                    $("#hylc35").removeAttr("class","animated fadein");
                    $("#hylc36").removeAttr("class","animated fadein");
                    $("#hylc31left").removeAttr("class","animated fadeinleft");
                    $("#hylc32left").removeAttr("class","animated fadeinleft");
                    $("#hylc33left").removeAttr("class","animated fadeinleft");
                    $("#hylc34left").removeAttr("class","animated fadeinleft");
                    $("#hylc35left").removeAttr("class","animated fadeinleft");
                    $("#hylc36left").removeAttr("class","animated fadeinleft");
                    $("#hylc31right").removeAttr("class","animated fadeinright");
                    $("#hylc32right").removeAttr("class","animated fadeinright");
                    $("#hylc33right").removeAttr("class","animated fadeinright");
                    $("#hylc34right").removeAttr("class","animated fadeinright");
                    $("#hylc35right").removeAttr("class","animated fadeinright");
                    $("#hylc36right").removeAttr("class","animated fadeinright");
                }
                if(index==4){
                    $("#header6").removeClass("animated fadeinrightbig");
                    $("#footer6").removeAttr("class","animated fadeinupbig");
                    $("#header4").removeClass("animated fadeinrightbig");
                    $("#footer4").removeAttr("class","animated fadeinupbig");
                    $("#ycjmimg").removeAttr("class","animated fadeinup");
                    $("#ycjmspan").removeAttr("class","animated fadeinup");
                    $("#ycjm41").removeAttr("class","animated fadeinup");
                    $("#ycjm42").removeAttr("class","animated fadeinup");
                    $("#ycjm43").removeAttr("class","animated fadeinup");
                    $("#ycjm44").removeAttr("class","animated fadeinup");
                    $("#ycjm45").removeAttr("class","animated fadeinup");
                    $("#sjddimg").removeAttr("class","animated fadein");
                    $("#sjddspan").removeAttr("class","animated fadein");
                    $("#sjdd61").removeAttr("class","animated fadein");
                    $("#sjdd62").removeAttr("class","animated fadein");
                    $("#sjdd63").removeAttr("class","animated fadein");
                    $("#backtop4").removeAttr("class","animated fadeinup");
                    $("#backbottom4").removeAttr("class","animated fadeinup");
                }
                if(index==5){
                    $("#header5").removeClass("animated fadeinrightbig");
                    $("#footer5").removeAttr("class","animated fadeinupbig");
                    $("#cjhjimg").removeAttr("class","animated flipiny");
                    $("#cjhjspan").removeAttr("class","animated flipiny");
                    $("#cjhjdiv1").removeAttr("class","animated flipiny2");
                    $("#cjhjdiv2").removeAttr("class","animated flipiny");
                    $("#header7").removeClass("animated fadeinrightbig");
                    $("#footer7").removeAttr("class","animated fadeinupbig");
                    $("#wenzi71").removeAttr("class","animated bounceIn");
                    $("#wenzi72").removeAttr("class","animated bounceIn");
                    $("#wenzi73").removeAttr("class","animated bounceIn");
                    $("#wenzi74").removeAttr("class","animated bounceIn");
                    $("#wenzi75").removeAttr("class","animated bounceIn");
                    $("#erweima").removeAttr("class","animated bounceIn");
                }
                if(index==6){
                    $("#header6").removeClass("animated fadeinrightbig");
                    $("#footer6").removeAttr("class","animated fadeinupbig");
                    $("#sjddimg").removeAttr("class","animated fadein");
                    $("#sjddspan").removeAttr("class","animated fadein");
                    $("#sjdd61").removeAttr("class","animated fadein");
                    $("#sjdd62").removeAttr("class","animated fadein");
                    $("#sjdd63").removeAttr("class","animated fadein");
                }

            },
            onSlideChangeEnd:function(swiper){
                var index = swiper.activeIndex;
                if(index==0){
                    $("#header1").attr("class","animated fadeinrightbig");
                    $("#headerjxfm").attr("class","animated fadeinleftbig");
                    $("#header11").attr("class","animated fadein");
                    $("#invate1").attr("class","animated flipinx");
                    $("#invate").attr("class","animated flipinx");
                    $("#footer1").attr("class","animated fadeinupbig");
                }
                if(index==1){

                    $("#header2").attr("class","animated fadeinrightbig");
                    $("#footer2").attr("class","animated fadeinupbig");
                    $("#divback2").attr("class","animated fadeindownbig");

                    $("#bouimg2").attr("class","animated bounceIn");
                    $("#bouhead2").attr("class","animated bounceIn");
                    $("#bouheader2").attr("class","animated bounceIn");
                    $("#boutext21").attr("class","animated bounceIn");
                    $("#boutext22").attr("class","animated bounceIn");
                    $("#divback2").css("opactiy","0.4");
                }
                if(index==2){
                    $("#header3").attr("class","animated fadeinrightbig");
                    $("#footer3").attr("class","animated fadeinupbig");
                    $("#hylcimg").attr("class","animated flipinx");
                    $("#hylcspan").attr("class","animated flipinx");
                    $("#hylc31").attr("class","animated fadein");
                    $("#hylc32").attr("class","animated fadein");
                    $("#hylc33").attr("class","animated fadein");
                    $("#hylc34").attr("class","animated fadein");
                    $("#hylc35").attr("class","animated fadein");
                    $("#hylc36").attr("class","animated fadein");
                    $("#hylc31left").attr("class","animated fadeinleft");
                    $("#hylc32left").attr("class","animated fadeinleft");
                    $("#hylc33left").attr("class","animated fadeinleft");
                    $("#hylc34left").attr("class","animated fadeinleft");
                    $("#hylc35left").attr("class","animated fadeinleft");
                    $("#hylc36left").attr("class","animated fadeinleft");
                    $("#hylc31right").attr("class","animated fadeinright");
                    $("#hylc32right").attr("class","animated fadeinright");
                    $("#hylc33right").attr("class","animated fadeinright");
                    $("#hylc34right").attr("class","animated fadeinright");
                    $("#hylc35right").attr("class","animated fadeinright");
                    $("#hylc36right").attr("class","animated fadeinright");

                }
                if(index==3){
                    $("#header4").attr("class","animated fadeinrightbig");
                    $("#footer4").attr("class","animated fadeinupbig");
                    $("#ycjmimg").attr("class","animated fadeinup");
                    $("#ycjmspan").attr("class","animated fadeinup");
                    $("#ycjm41").attr("class","animated fadeinup");
                    $("#ycjm42").attr("class","animated fadeinup");
                    $("#ycjm43").attr("class","animated fadeinup");
                    $("#ycjm44").attr("class","animated fadeinup");
                    $("#ycjm45").attr("class","animated fadeinup");
                    $("#backtop4").attr("class","animated fadeinup");
                    $("#backbottom4").attr("class","animated fadeinup");
                }
                if(index==4){
                    $("#header5").attr("class","animated fadeinrightbig");
                    $("#footer5").attr("class","animated fadeinupbig");
                    $("#cjhjimg").attr("class","animated flipiny");
                    $("#cjhjspan").attr("class","animated flipiny");
                    $("#cjhjdiv1").attr("class","animated flipiny2");
                    $("#cjhjdiv2").attr("class","animated flipiny");
                }
                if(index==5){
                    $("#header6").attr("class","animated fadeinrightbig");
                    $("#footer6").attr("class","animated fadeinupbig");
                    $("#sjddimg").attr("class","animated fadein");
                    $("#sjddspan").attr("class","animated fadein");
                    $("#sjdd61").attr("class","animated fadein");
                    $("#sjdd62").attr("class","animated fadein");
                    $("#sjdd63").attr("class","animated fadein");
                }
                if(index==6){
                    $("#header7").addClass("animated fadeinrightbig");
                    $("#footer7").attr("class","animated fadeinupbig");
                    $("#wenzi71").attr("class","animated bounceIn");
                    $("#wenzi72").attr("class","animated bounceIn");
                    $("#wenzi73").attr("class","animated bounceIn");
                    $("#wenzi74").attr("class","animated bounceIn");
                    $("#wenzi75").attr("class","animated bounceIn");
                    $("#erweima").attr("class","animated bounceIn");
                }
            },

        });








    })


    var dataForWeixin={

        appId:"",

        MsgImg:"http://wangxiaohao.duapp.com/recruit/img/header1.png",

        TLImg:"http://wangxiaohao.duapp.com/recruit/img/header1.png",

        url:"http://wangxiaohaoduapp.com/recruit",

        title:"2017年嘉旭福美公司年会邀请函",

        desc:"2017年嘉旭福美公司年会邀请函",

        fakeid:"",

        callback:function(){}

    };



    wx.config({
        debug: false,
        appId: '<?php echo $sign["appId"];?>', // ������ںŵ�Ψһ��ʶ
        timestamp: '<?php echo $sign["timestamp"];?>', // �������ǩ����ʱ���
        nonceStr: '<?php echo $sign["nonceStr"];?>', // �������ǩ���������
        signature: '<?php echo $sign["signature"];?>',// ���ǩ��������¼1
        jsApiList: ['onMenuShareAppMessage'] // 必填，需要使用的JS接口列表
    });
    wx.ready(function(){
        wx.onMenuShareAppMessage({
            appId: '<?php echo $sign["appId"];?>',

            MsgImg:"http://wangxiaohao.duapp.com/recruit/img/header1.png",

            TLImg:"http://wangxiaohao.duapp.com/recruit/img/header1.png",

            url:"http://wangxiaohaoduapp.com/recruit",

            title:"2017年嘉旭福美公司年会邀请函",

            desc:"2017年嘉旭福美公司年会邀请函",

        });
        wx.error(function(res){

            // config信息验证失败会执行error函数，如签名过期导致验证失败

        });
    });


</script>


</body>
</html>