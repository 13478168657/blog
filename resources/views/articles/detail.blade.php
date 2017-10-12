@extends('layouts.main')
@section('css')
<link href="/css/view.css" rel="stylesheet">
@endsection
@section('script')
<script type="text/javascript" src="/js/jquery.min.js"></script>
@endsection
@section('content')
<article>
    <div class="l_box f_l">
        <div class="topnews">
            <h2>您现在的位置是：<a href="http://www.jiyouh.com/">首页</a>&nbsp;>&nbsp;<a href="http://www.jiyouh.com/shouji/">智能手机</a>&nbsp;>&nbsp;<a href="http://www.jiyouh.com/shouji/apple/">苹果(Apple)</a></h2>
            <div class="news_title">{{$article->title}}</div>

            <div class="news_author"><span class="au01"><a href='mailto:'>腾讯科技</a></span><span class="au02">2015-03-05</span><span class="au03">共<b><script src=http://www.jiyouh.com/e/public/ViewClick/?classid=6&id=137&addclick=1></script></b>人围观</span><strong class="au04 f_r"><div class="ds-thread-count" data-thread-key="137" data-count-type="comments"></a></div></strong></div>
            <div class="tags"><a href="http://www.jiyouh.com/e/tags/?tagname=%B9%C8%B8%E8&tempid=9" target="_blank">谷歌</a> <a href="http://www.jiyouh.com/e/tags/?tagname=iOS&tempid=9" target="_blank">iOS</a> <a href="http://www.jiyouh.com/e/tags/?tagname=Android+Wear&tempid=9" target="_blank">Android Wear</a></div>
            <div class="news_about"><strong>简介</strong>{{$article->description}}</div>
            <div class="news_content">
                <?php
                    echo htmlspecialchars_decode($article->content);
                ?>
                <div class="footend">第一时间获取智能手机行业新鲜资讯和商业动态，可以访问小编的微博<a href="http://weibo.com/jiyouh/" target="_blank">http://weibo.com/jiyouh</a>,如果需要小编陪聊也可以在微信里添加好友,搜索「<span>jiyouhcom</span>」，还可以通过手机扫描左方二维码，关注机友汇微信公众号,即可获得机友汇精华内容推送，并参与相关活动。</div>
            </div>
            <div class="fenx"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a><a href="#" class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a><a href="#" class="bds_twi" data-cmd="twi" title="分享到Twitter"></a></div>
                <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
            <div class="nextinfo">
                <p>上一篇：<a href='http://www.jiyouh.com/shouji/apple/2015-03-05/136.html'>半年时间苹果iOS 8普及率终于过了75%！</a></p>
                <p>下一篇：<a href='http://www.jiyouh.com/shouji/apple/'>返回列表</a></p>
            </div>
            <div class="otherlink">
                <h2>相关文章</h2>
                <ul>
                    <li><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/136.html" title="半年时间苹果iOS 8普及率终于过了75%！">半年时间苹果iOS 8普及率终于过了75%！</a></li><li><a href="http://www.jiyouh.com/peijian/cdsb/2015-02-26/93.html" title="截止2014年底,Moto 360仍是目前最畅销的Android Wear智能手表">截止2014年底,Moto 360仍是目前最畅销的Android Wear智</a></li><li><a href="http://www.jiyouh.com/news/2015-02-25/85.html" title="PayPal垄断了八成移动支付份额 苹果谷歌只能抢"老二"位置">PayPal垄断了八成移动支付份额 苹果谷歌只能抢&quot;老二</a></li><li><a href="http://www.jiyouh.com/shouji/apple/2015-02-25/80.html" title="新版iOS为iPhone增加了大量新表情,却被用户吐槽">新版iOS为iPhone增加了大量新表情,却被用户吐槽</a></li><li><a href="http://www.jiyouh.com/shouji/apple/2015-02-24/65.html" title="苹果首次尝试iOS系统公测 iOS 8.3预计将会先给10万人试用">苹果首次尝试iOS系统公测 iOS 8.3预计将会先给10万人试</a></li><li><a href="http://www.jiyouh.com/news/2015-02-24/64.html" title="谷歌美国遭集体诉讼 被指滥用安卓垄断地位">谷歌美国遭集体诉讼 被指滥用安卓垄断地位</a></li><li><a href="http://www.jiyouh.com/news/2015-02-23/60.html" title="谷歌开发Goober：与Uber比拼物联网">谷歌开发Goober：与Uber比拼物联网</a></li>        </ul>
            </div>
            <div class="news_pl">
                <h2>文章评论</h2>
                <ul>
                    <div class="ds-thread" data-category="6" data-thread-key="137" data-title="传谷歌今年5月将推出iOS版本Android Wear"></div>
                    <script type="text/javascript">
                        var duoshuoQuery = {short_name:"jiyouh"};
                        (function() {
                            var ds = document.createElement('script');
                            ds.type = 'text/javascript';ds.async = true;
                            ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                            ds.charset = 'UTF-8';
                            (document.getElementsByTagName('head')[0]
                            || document.getElementsByTagName('body')[0]).appendChild(ds);
                        })();
                    </script>
                </ul>
            </div>
        </div>
    </div>
    <div class="r_box f_r">
        <div class="tit01">
            <h3>关注我们</h3>
            <div class="gzwm">
                <ul>
                    <li><a class="xlwb" href="http://weibo.com/jiyouh" target="_blank">新浪微博</a></li>
                    <li><a class="txwb" href="http://t.qq.com/jiyouh" target="_blank">腾讯微博</a></li>
                    <li><a class="rss" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=HGZvdHBcdnVlc2l0Mn9zcQ" target="_blank">邮箱</a></li>
                    <li><a class="wx" href="#" onmouseover="tip.start(this)" tips="<font color='#fff'>关注<b>机友汇</b>微信账号</font><br><b><img src='http://www.jiyouh.com/skin/jiyouhui/images/weixintop.jpg'></b>">微信</a></li>
                </ul>
            </div>
        </div>
        <div id="mjs:tip" class="tip" style="position:absolute;left:0;top:0;display:none;"> </div>
        <script>
            var tip={$:function(ele){
                if(typeof(ele)=="object")
                    return ele;
                else if(typeof(ele)=="string"||typeof(ele)=="number")
                    return document.getElementById(ele.toString());
                return null;
            },
                mousePos:function(e){
                    var x,y;
                    var e = e||window.event;
                    return{x:e.clientX+document.body.scrollLeft+document.documentElement.scrollLeft,
                        y:e.clientY+document.body.scrollTop+document.documentElement.scrollTop};
                },
                start:function(obj){
                    var self = this;
                    var t = self.$("mjs:tip");
                    obj.onmousemove=function(e){
                        var mouse = self.mousePos(e);
                        t.style.left = mouse.x + 10 + 'px';
                        t.style.top = mouse.y + 10 + 'px';
                        t.innerHTML = obj.getAttribute("tips");
                        t.style.display = '';
                    };
                    obj.onmouseout=function(){
                        t.style.display = 'none';
                    };
                }
            }
        </script>

        <div class="ad300x100"><img src="http://www.jiyouh.com/skin/jiyouhui/images/ad300x100.jpg"> </div>



        <script type="text/javascript">
            //设置
            myFocus.set({
                id:'myFocus',//ID
                pattern:'mF_kdui'//风格
            });
        </script>

        <div id="myFocus"><!--焦点图盒子-->
            <div class="loading"></div>
            <!--载入画面(可删除)-->
            <div class="pic"><!--图片列表-->
                <ul>
                    <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-02/122.html" target="_blank" title="Huawei TalkBand N1华为智能音乐运动耳机 自由畅快"><img src="http://www.jiyouh.com/d/file/peijian/cdsb/2015-03-02/aff344e00d4c654ffce315f4f423d89a.jpg""  alt="Huawei TalkBand N1华..." text="昨天在巴塞罗那MWC（世界移动通信大会）上华..." /></a></li>
                    <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-02/121.html" target="_blank" title="Huawei TalkBand B2华为智能手环 智选从容"><img src="http://www.jiyouh.com/d/file/peijian/cdsb/2015-03-02/84fb886a9491b382fd432f6e7135afce.jpg"  alt="Huawei TalkBand B2华..." text="昨天在巴塞罗那MWC（世界移动通信大会）上华..." /></a></li>
                    <li><a href="http://www.jiyouh.com/shouji/android/2015-02-27/104.html" target="_blank" title="三星Galaxy S6,原来它长这样！"><img src="http://www.jiyouh.com/d/file/shouji/android/2015-02-27/c4c182bc996e131e13a4cfae910aad43.jpg"  alt="三星Galaxy S6,原来它..." text="三星Galaxy S6发布日期临近，美国三大运营商..." /></a></li>
                    <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-02-27/96.html" target="_blank" title="苹果正式发出3月9日发布会邀请函 主角很可能是Apple Watch智能手表"><img src="http://www.jiyouh.com/d/file/peijian/cdsb/2015-02-27/62f4c621074b06f3be567fdb765eb10d.jpg"  alt="苹果正式发出3月9日发..." text="据国外媒体报道,苹果周四正式向媒体发出邀请..." /></a></li>
                    <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-02-24/62.html" target="_blank" title="Apple Watch能否撬动消费者的购买欲望？"><img src="http://www.jiyouh.com/d/file/peijian/cdsb/2015-02-24/3388544e560e8836fdc6937e061e1a0e.jpg"  alt="Apple Watch能否撬动消..." text=" “Apple Watch最令用户惊喜的可能是其广泛..." /></a></li>
                </ul>
            </div>
        </div>
        <div class="moreSelect" id="lp_right_select">
            <script>
                window.onload = function ()
                {
                    var oLi = document.getElementById("tab").getElementsByTagName("li");
                    var oUl = document.getElementById("ms-main").getElementsByTagName("div");

                    for(var i = 0; i < oLi.length; i++)
                    {
                        oLi[i].index = i;
                        oLi[i].onmouseover = function ()
                        {
                            for(var n = 0; n < oLi.length; n++) oLi[n].className="";
                            this.className = "cur";
                            for(var n = 0; n < oUl.length; n++) oUl[n].style.display = "none";
                            oUl[this.index].style.display = "block"
                        }
                    }
                }
            </script>
            <div class="ms-top">
                <ul class="hd" id="tab">
                    <li class="cur"><a href="/">点击排行</a></li>
                    <li><a href="/">最新文章</a></li>
                    <li><a href="/">站长推荐</a></li>
                </ul>
            </div>
            <div class="ms-main" id="ms-main">
                <div style="display: block;" class="bd bd-news" >
                    <ul>
                        <li><a href="/shenghuo/2015-02-20/52.html" title="一个女生的十年——手机里一直舍不得删的小说">一个女生的十年——手机里一直舍不得删的小说</a></li><li><a href="http://www.jiyouh.com/peijian/cdsb/2015-02-24/74.html" title="Fitbit Surge体验 比腕带强大比手表单一">Fitbit Surge体验 比腕带强大比手表单一</a></li><li><a href="http://www.jiyouh.com/shouji/android/2015-02-24/76.html" title="HTC One M9官方图曝光 配置价格一并出炉">HTC One M9官方图曝光 配置价格一并出炉</a></li><li><a href="http://www.jiyouh.com/zhishi/2015-03-02/119.html" title="手机上3D萌熊出没效果的制作过程">手机上3D萌熊出没效果的制作过程</a></li><li><a href="http://www.jiyouh.com/shouji/android/2015-02-24/72.html" title="华为Ascend P8原型机谍照曝光 售价大约3000元">华为Ascend P8原型机谍照曝光 售价大约3000元</a></li><li><a href="http://www.jiyouh.com/shouji/android/2015-02-20/54.html" title="MOTO强势归来,moto x（x+1）(XT1085) 现已有售">MOTO强势归来,moto x（x+1）(XT1085) 现已有售</a></li>          </ul>
                </div>
                <div  class="bd bd-news">
                    <ul>
                        <li><a href="http://www.jiyouh.com/news/2015-03-05/138.html" title="华为荣耀新总裁亮相 称今年重点立足海外">华为荣耀新总裁亮相 称今年重点立足海外</a></li><li><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/137.html" title="传谷歌今年5月将推出iOS版本Android Wear">传谷歌今年5月将推出iOS版本Android Wear</a></li><li><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/136.html" title="半年时间苹果iOS 8普及率终于过了75%！">半年时间苹果iOS 8普及率终于过了75%！</a></li><li><a href="http://www.jiyouh.com/shouji/android/2015-03-05/135.html" title="手机更卡了！安卓5.0停止默认数据加密">手机更卡了！安卓5.0停止默认数据加密</a></li><li><a href="http://www.jiyouh.com/news/2015-03-05/134.html" title="华为余承东：未来三到五年小米将消失">华为余承东：未来三到五年小米将消失</a></li><li><a href="http://www.jiyouh.com/news/2015-03-05/133.html" title="MWC2015观察：移动芯片公司眼界放宽">MWC2015观察：移动芯片公司眼界放宽</a></li>          </ul>
                </div>
                <div class="bd bd-news">
                    <ul>
                        <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-02/122.html" title="Huawei TalkBand N1华为智能音乐运动耳机 自由畅快">Huawei TalkBand N1华为智能音乐运动耳机 自由畅快</a></li><li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-02/121.html" title="Huawei TalkBand B2华为智能手环 智选从容">Huawei TalkBand B2华为智能手环 智选从容</a></li><li><a href="http://www.jiyouh.com/shouji/android/2015-02-27/104.html" title="三星Galaxy S6,原来它长这样！">三星Galaxy S6,原来它长这样！</a></li><li><a href="http://www.jiyouh.com/peijian/cdsb/2015-02-27/96.html" title="苹果正式发出3月9日发布会邀请函 主角很可能是Apple Watch智能手表">苹果正式发出3月9日发布会邀请函 主角很可能是Apple Watch智能手表</a></li><li><a href="http://www.jiyouh.com/peijian/cdsb/2015-02-24/62.html" title="Apple Watch能否撬动消费者的购买欲望？">Apple Watch能否撬动消费者的购买欲望？</a></li><li><a href="/peijian/ypej/2015-02-20/53.html" title="PULL & BEAR推出全新六款复古耳机系列">PULL & BEAR推出全新六款复古耳机系列</a></li>          </ul>
                </div>
            </div>
            <!--ms-main end -->
        </div>
        <div class="cloud">
            <h3>热门标签</h3>
            <ul>
                <a href="http://www.jiyouh.com/e/tags/?tagname=AndroidWear&tempid=9" target="_blank">AndroidWear</a> <a href="http://www.jiyouh.com/e/tags/?tagname=iOS8&tempid=9" target="_blank">iOS8</a> <a href="http://www.jiyouh.com/e/tags/?tagname=5.0&tempid=9" target="_blank">5.0</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%D3%E0%B3%D0%B6%AB&tempid=9" target="_blank">余承东</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%D2%C6%B6%AF%D0%BE%C6%AC&tempid=9" target="_blank">移动芯片</a> <a href="http://www.jiyouh.com/e/tags/?tagname=SIM%BF%A8&tempid=9" target="_blank">SIM卡</a> <a href="http://www.jiyouh.com/e/tags/?tagname=810&tempid=9" target="_blank">810</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%E6%E7%C1%FA&tempid=9" target="_blank">骁龙</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%B8%DF%CD%A8&tempid=9" target="_blank">高通</a> <a href="http://www.jiyouh.com/e/tags/?tagname=Home%BC%FC&tempid=9" target="_blank">Home键</a> <a href="http://www.jiyouh.com/e/tags/?tagname=MX5Pro&tempid=9" target="_blank">MX5Pro</a> <a href="http://www.jiyouh.com/e/tags/?tagname=M4&tempid=9" target="_blank">M4</a> <a href="http://www.jiyouh.com/e/tags/?tagname=Xperia&tempid=9" target="_blank">Xperia</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%B7%C0%CB%AE&tempid=9" target="_blank">防水</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%B1%A1&tempid=9" target="_blank">薄</a>      </ul>
        </div>
        <div class="ad" id="r_ad"> <img src="http://www.jiyouh.com/skin/jiyouhui/images/03.jpg"> </div>
        <script type="text/javascript">

            jQuery(function() {
                var elm = jQuery('#r_ad');
                var startPos = jQuery(elm).offset().top;
                jQuery.event.add(window, "scroll", function() {
                    var p = jQuery(window).scrollTop();
                    jQuery(elm).css('position',((p) > startPos) ? 'fixed' : 'static');
                    jQuery(elm).css('top',((p) > startPos) ? '30px' : '');
                });
            });
        </script>
    </div>
</article>
@include('layouts.footer')
<script src="http://www.jiyouh.com/e/public/onclick/?enews=donews&classid=6&id=137"></script><!-- 多说js加载开始，一个页面只需要加载一次 -->
<script type="text/javascript">
    var duoshuoQuery = {short_name:"jiyouh"};
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = 'http://static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
</script>
@endsection
