@extends('layouts.main')
@section('css')
<link href="/css/index.css" rel="stylesheet">
@endsection
@section('content')
<article>
    <div class="l_box f_l">
        <div class="banner f_l">
            <script type="text/javascript">
                //设置
                myFocus.set({
                    id:'myFocus',//ID
                    pattern:'mF_fancy'//风格
                });
            </script>
            <div id="myFocus">
                <div class="loading"></div>
                <div class="pic">
                    <ul>
                        <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-05/139.html" target="_blank" title="细节也要看清楚，华为MWC2015智能手表高清图赏"><img src="http://www.jiyouh.com/d/file/peijian/cdsb/2015-03-05/020b1334822c2304ebf304380ebc42ac.jpg" thumb="" alt="细节也要看清楚，华为MWC2015智能手表高清图赏" /></a></li>
                        <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-02/121.html" target="_blank" title="Huawei TalkBand B2华为智能手环 智选从容"><img src="http://www.jiyouh.com/d/file/peijian/cdsb/2015-03-02/84fb886a9491b382fd432f6e7135afce.jpg" thumb="" alt="Huawei TalkBand B2华为智能手环 智选从容" /></a></li>
                        <li><a href="http://www.jiyouh.com/shouji/android/2015-02-27/104.html" target="_blank" title="三星Galaxy S6,原来它长这样！"><img src="http://www.jiyouh.com/d/file/shouji/android/2015-02-27/c4c182bc996e131e13a4cfae910aad43.jpg" thumb="" alt="三星Galaxy S6,原来它长这样！" /></a></li>
                        <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-02-27/96.html" target="_blank" title="苹果正式发出3月9日发布会邀请函 主角很可能是Apple Watch智能手表"><img src="http://www.jiyouh.com/d/file/peijian/cdsb/2015-02-27/62f4c621074b06f3be567fdb765eb10d.jpg" thumb="" alt="苹果正式发出3月9日发布会邀请函 主角很可能是Apple Watch智能手表" /></a></li>
                        <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-02-24/62.html" target="_blank" title="Apple Watch能否撬动消费者的购买欲望？"><img src="http://www.jiyouh.com/d/file/peijian/cdsb/2015-02-24/3388544e560e8836fdc6937e061e1a0e.jpg" thumb="" alt="Apple Watch能否撬动消费者的购买欲望？" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner代码 结束 -->
        <div class="focustext f_r">

            <section class="ft01">
                <h3><a href="http://www.jiyouh.com/shouji/android/2015-03-05/127.html" target="_blank" title="魅族MX4 Pro降价300元销售 改良版要来了？">魅族MX4 Pro降价300元</a></h3>
                <p>不管魅族会不会在接下来推出改良款MX4 Pro，如果说你很急切入手一台MX4 Pro，那现在无...</p>
            </section>
            <section class="ft02">
                <h3><a href="http://www.jiyouh.com/shouji/android/2015-02-27/102.html" target="_blank" title="魅族Ubuntu MX4 将亮剑巴塞罗那 MWC 2015">魅族Ubuntu MX4 将亮剑</a></h3>
                <p>2015 世界移动通信大会将在 3 月 2 号至 3 月 5 号于西班牙巴塞罗那举行。届时，会在全...</p>
            </section>
        </div>
        <div class="blank"></div>
        <div class="topnews">
            <h2><span><a href="http://www.jiyouh.com/shouji/android/">安卓(Android)</a><a href="http://www.jiyouh.com/shouji/apple/">苹果(Apple)</a><a href="http://www.jiyouh.com/shouji/wphone/">WP(windows)</a></span><b>最新</b>文章</h2>
            @foreach($articles as $article)
            <div class="blogs">
                <figure><img src="{{config('imgConfig.imgUrl')}}{{$article->thumbPic}}"></figure>
                <ul>
                    <h3><a href="/article/detail/{{$article->id}}.html" target="_blank" title="中兴“咔咔”运动相机在MWC2015上正式展出 剑指小蚁运动相机">{{$article->title}}</a></h3>
                    <p>{{$article->description}}</p>
                    <p class="autor"><span class="lm f_l">[<a href=http://www.jiyouh.com/peijian/qtpj/>其他配件</a>]</span><span class="dtime f_l">2015-03-06</span><span class="viewnum f_r">浏览（<a href="http://www.jiyouh.com/peijian/qtpj/2015-03-06/140.html">542</a>）</span><span class="pingl f_r"><a href="http://www.jiyouh.com/peijian/qtpj/2015-03-06/140.html" title="中兴“咔咔”运动相机在MWC2015上正式展出 剑指小蚁运动相机"><span class="ds-thread-count" data-thread-key="140" data-count-type="comments"></a></span>
                        </span></p>
                </ul>
            </div>  
            @endforeach    
            <div class="blogs">
                <figure><img src="http://www.jiyouh.com/d/file/peijian/cdsb/2015-03-05/020b1334822c2304ebf304380ebc42ac.jpg"></figure>
                <ul>
                    <h3><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-05/139.html" target="_blank" title="细节也要看清楚，华为MWC2015智能手表高清图赏">细节也要看清楚，华为MWC2015智能手表高清图赏</a></h3>
                    <p>华为在西班牙巴塞罗那MWC2015上正式推出旗下首款智能手表“Huawei Watch”，6月将在支持Android wear的国家和地区上市。...</p>
                    <p class="autor"><span class="lm f_l">[<a href=http://www.jiyouh.com/peijian/cdsb/>可穿戴设备</a>]</span><span class="dtime f_l">2015-03-05</span><span class="viewnum f_r">浏览（<a href="http://www.jiyouh.com/peijian/cdsb/2015-03-05/139.html">294</a>）</span><span class="pingl f_r"><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-05/139.html" title="细节也要看清楚，华为MWC2015智能手表高清图赏"><span class="ds-thread-count" data-thread-key="139" data-count-type="comments"></a></span>
                        </p>
                </ul>
            </div>      
            <div class="blogs">
                <figure><img src="http://www.jiyouh.com/d/file/news/2015-03-05/a3020c4a12e1aafcc292741bd0b09244.jpg"></figure>
                <ul>
                    <h3><a href="http://www.jiyouh.com/news/2015-03-05/138.html" target="_blank" title="华为荣耀新总裁亮相 称今年重点立足海外">华为荣耀新总裁亮相 称今年重点立足海外</a></h3>
                    <p>华为荣耀新总裁赵明要完成4000万终端销量、明年突破100亿美元收入的目标。...</p>
                    <p class="autor"><span class="lm f_l">[<a href=http://www.jiyouh.com/news/>最新资讯</a>]</span><span class="dtime f_l">2015-03-05</span><span class="viewnum f_r">浏览（<a href="http://www.jiyouh.com/news/2015-03-05/138.html">431</a>）</span><span class="pingl f_r"><a href="http://www.jiyouh.com/news/2015-03-05/138.html" title="华为荣耀新总裁亮相 称今年重点立足海外"><span class="ds-thread-count" data-thread-key="138" data-count-type="comments"></span></a></span>
                        </p>
                </ul>
            </div>      
            <div class="blogs">
                <figure><img src="http://www.jiyouh.com/d/file/shouji/apple/2015-03-05/3331864060db5cff76bc07a5939cf9e7.jpg"></figure>
                <ul>
                    <h3><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/137.html" target="_blank" title="传谷歌今年5月将推出iOS版本Android Wear">传谷歌今年5月将推出iOS版本Android Wear</a></h3>
                    <p>真是如此的话，不远的将来，iPhone 6就能够支持Moto 360。...</p>
                    <p class="autor"><span class="lm f_l">[<a href=http://www.jiyouh.com/shouji/apple/>苹果(Apple)</a>]</span><span class="dtime f_l">2015-03-05</span><span class="viewnum f_r">浏览（<a href="http://www.jiyouh.com/shouji/apple/2015-03-05/137.html">197</a>）</span><span class="pingl f_r"><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/137.html" title="传谷歌今年5月将推出iOS版本Android Wear"><span class="ds-thread-count" data-thread-key="137" data-count-type="comments"></a></span>
                        </p>
                </ul>
            </div>     
            <div class="blogs">
                <figure><img src="http://www.jiyouh.com/d/file/shouji/apple/2015-03-05/63211fa1d0a5c60aa3a42b05acdbf13b.png"></figure>
                <ul>
                    <h3><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/136.html" target="_blank" title="半年时间苹果iOS 8普及率终于过了75%！">半年时间苹果iOS 8普及率终于过了75%！</a></h3>
                    <p>苹果iOS8系统达到四分之三渗透率，花费了六个月时间，目前iOS7系统的渗透率仍然占到22%。...</p>
                    <p class="autor"><span class="lm f_l">[<a href=http://www.jiyouh.com/shouji/apple/>苹果(Apple)</a>]</span><span class="dtime f_l">2015-03-05</span><span class="viewnum f_r">浏览（<a href="http://www.jiyouh.com/shouji/apple/2015-03-05/136.html">102</a>）</span><span class="pingl f_r"><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/136.html" title="半年时间苹果iOS 8普及率终于过了75%！"><span class="ds-thread-count" data-thread-key="136" data-count-type="comments"></a></span>
                        </p>
                </ul>
            </div>      
            <div class="blogs">
                <figure><img src="http://www.jiyouh.com/d/file/shouji/android/2015-03-05/a4def7e22a4a04a365a928fb8b477e4a.jpg"></figure>
                <ul>
                    <h3><a href="http://www.jiyouh.com/shouji/android/2015-03-05/135.html" target="_blank" title="手机更卡了！安卓5.0停止默认数据加密">手机更卡了！安卓5.0停止默认数据加密</a></h3>
                    <p>谷歌宣布安卓5.0的默认加密转变成可选项，原因是部分安卓手机的性能受到拖累。...</p>
                    <p class="autor"><span class="lm f_l">[<a href=http://www.jiyouh.com/shouji/android/>安卓(Android)</a>]</span><span class="dtime f_l">2015-03-05</span><span class="viewnum f_r">浏览（<a href="http://www.jiyouh.com/shouji/android/2015-03-05/135.html">109</a>）</span><span class="pingl f_r"><a href="http://www.jiyouh.com/shouji/android/2015-03-05/135.html" title="手机更卡了！安卓5.0停止默认数据加密"><span class="ds-thread-count" data-thread-key="135" data-count-type="comments"></span></a></span>
                        </p>
                </ul>
            </div>      
            <div class="blogs">
                <figure><img src="http://www.jiyouh.com/d/file/news/2015-03-05/64f2b386eeb41838a109d041b896bd26.jpg"></figure>
                <ul>
                    <h3><a href="http://www.jiyouh.com/news/2015-03-05/134.html" target="_blank" title="华为余承东：未来三到五年小米将消失">华为余承东：未来三到五年小米将消失</a></h3>
                    <p>余承东认为，未来三到五年多数中国智能手机厂商将消失，华为将成为市场领军者。...</p>
                    <p class="autor"><span class="lm f_l">[<a href=http://www.jiyouh.com/news/>最新资讯</a>]</span><span class="dtime f_l">2015-03-05</span><span class="viewnum f_r">浏览（<a href="http://www.jiyouh.com/news/2015-03-05/134.html">142</a>）</span><span class="pingl f_r"><a href="http://www.jiyouh.com/news/2015-03-05/134.html" title="华为余承东：未来三到五年小米将消失"><span class="ds-thread-count" data-thread-key="134" data-count-type="comments"></span></a></span>
                    </p>
                </ul>
            </div>      
            <div class="blogs">
                <figure><img src="http://www.jiyouh.com/d/file/news/2015-03-05/5526df6c850c46de65119799cc16a99c.jpg"></figure>
                <ul>
                    <h3><a href="http://www.jiyouh.com/news/2015-03-05/133.html" target="_blank" title="MWC2015观察：移动芯片公司眼界放宽">MWC2015观察：移动芯片公司眼界放宽</a></h3>
                    <p>芯片厂商的竞争已经从单一产品变为全球性的全模、全产品线、全生态系统竞争。...</p>
                    <p class="autor"><span class="lm f_l">[<a href=http://www.jiyouh.com/news/>最新资讯</a>]</span><span class="dtime f_l">2015-03-05</span><span class="viewnum f_r">浏览（<a href="http://www.jiyouh.com/news/2015-03-05/133.html">89</a>）</span><span class="pingl f_r"><a href="http://www.jiyouh.com/news/2015-03-05/133.html" title="MWC2015观察：移动芯片公司眼界放宽"><span class="ds-thread-count" data-thread-key="133" data-count-type="comments"></span></a></span>
                    </p>
                </ul>
            </div>      
            <div class="blogs">
                <figure><img src="http://www.jiyouh.com/d/file/shouji/apple/2015-03-05/6f19bb6ced652ad7fffa6d2ad6571f9e.jpg"></figure>
                <ul>
                    <h3><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/132.html" target="_blank" title="苹果要在下代iPhone中植入自己的SIM卡">苹果要在下代iPhone中植入自己的SIM卡</a></h3>
                    <p>用户未来可以在苹果手机设置中随意切换移动运营商，而不是安装物理芯片卡。...</p>
                    <p class="autor"><span class="lm f_l">[<a href=http://www.jiyouh.com/shouji/apple/>苹果(Apple)</a>]</span><span class="dtime f_l">2015-03-05</span><span class="viewnum f_r">浏览（<a href="http://www.jiyouh.com/shouji/apple/2015-03-05/132.html">104</a>）</span><span class="pingl f_r"><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/132.html" title="苹果要在下代iPhone中植入自己的SIM卡"><span class="ds-thread-count" data-thread-key="132" data-count-type="comments"></span></a></span></p>
                </ul>
            </div>      
            <div class="blogs">
                <figure><img src="http://www.jiyouh.com/d/file/news/2015-03-05/ab1729345547b9d1a820bfd20eb964cf.jpg"></figure>
                <ul>
                    <h3><a href="http://www.jiyouh.com/news/2015-03-05/131.html" target="_blank" title="三星认为高通骁龙810芯片不够好">三星认为高通骁龙810芯片不够好</a></h3>
                    <p>三星在S6上放弃了高通顶级处理器，没有一种型号的S6配置骁龙810。...</p>
                    <p class="autor"><span class="lm f_l">[<a href=http://www.jiyouh.com/news/>最新资讯</a>]</span><span class="dtime f_l">2015-03-05</span><span class="viewnum f_r">浏览（<a href="http://www.jiyouh.com/news/2015-03-05/131.html">81</a>）</span><span class="pingl f_r"><a href="http://www.jiyouh.com/news/2015-03-05/131.html" title="三星认为高通骁龙810芯片不够好"><span class="ds-thread-count" data-thread-key="131" data-count-type="comments"></span></a></span></p>
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

        <!--tit01 end-->
        <div class="ad300x100"><img src="http://www.jiyouh.com/skin/jiyouhui/images/ad300x100.jpg"> </div>


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
                        <li><a href="http://www.jiyouh.com/shouji/android/2015-02-24/76.html" title="HTC One M9官方图曝光 配置价格一并出炉">HTC One M9官方图曝光 配置价格一并出炉</a></li><li><a href="http://www.jiyouh.com/peijian/qtpj/2015-03-06/140.html" title="中兴“咔咔”运动相机在MWC2015上正式展出 剑指小蚁运动相机">中兴“咔咔”运动相机在MWC2015上正式展出 剑指小蚁运动相机</a></li><li><a href="http://www.jiyouh.com/news/2015-03-05/138.html" title="华为荣耀新总裁亮相 称今年重点立足海外">华为荣耀新总裁亮相 称今年重点立足海外</a></li><li><a href="/shenghuo/2015-02-20/52.html" title="一个女生的十年——手机里一直舍不得删的小说">一个女生的十年——手机里一直舍不得删的小说</a></li><li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-05/139.html" title="细节也要看清楚，华为MWC2015智能手表高清图赏">细节也要看清楚，华为MWC2015智能手表高清图赏</a></li><li><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/137.html" title="传谷歌今年5月将推出iOS版本Android Wear">传谷歌今年5月将推出iOS版本Android Wear</a></li>          </ul>
                </div>
                <div  class="bd bd-news">
                    <ul>
                        <li><a href="http://www.jiyouh.com/peijian/qtpj/2015-03-06/140.html" title="中兴“咔咔”运动相机在MWC2015上正式展出 剑指小蚁运动相机">中兴“咔咔”运动相机在MWC2015上正式展出 剑指小蚁运动相机</a></li><li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-05/139.html" title="细节也要看清楚，华为MWC2015智能手表高清图赏">细节也要看清楚，华为MWC2015智能手表高清图赏</a></li><li><a href="http://www.jiyouh.com/news/2015-03-05/138.html" title="华为荣耀新总裁亮相 称今年重点立足海外">华为荣耀新总裁亮相 称今年重点立足海外</a></li><li><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/137.html" title="传谷歌今年5月将推出iOS版本Android Wear">传谷歌今年5月将推出iOS版本Android Wear</a></li><li><a href="http://www.jiyouh.com/shouji/apple/2015-03-05/136.html" title="半年时间苹果iOS 8普及率终于过了75%！">半年时间苹果iOS 8普及率终于过了75%！</a></li><li><a href="http://www.jiyouh.com/shouji/android/2015-03-05/135.html" title="手机更卡了！安卓5.0停止默认数据加密">手机更卡了！安卓5.0停止默认数据加密</a></li>          </ul>
                </div>
                <div class="bd bd-news">
                    <ul>
                        <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-05/139.html" title="细节也要看清楚，华为MWC2015智能手表高清图赏">细节也要看清楚，华为MWC2015智能手表高清图赏</a></li><li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-02/121.html" title="Huawei TalkBand B2华为智能手环 智选从容">Huawei TalkBand B2华为智能手环 智选从容</a></li><li><a href="http://www.jiyouh.com/shouji/android/2015-02-27/104.html" title="三星Galaxy S6,原来它长这样！">三星Galaxy S6,原来它长这样！</a></li><li><a href="http://www.jiyouh.com/peijian/cdsb/2015-02-27/96.html" title="苹果正式发出3月9日发布会邀请函 主角很可能是Apple Watch智能手表">苹果正式发出3月9日发布会邀请函 主角很可能是Apple Watch智能手表</a></li><li><a href="http://www.jiyouh.com/peijian/cdsb/2015-02-24/62.html" title="Apple Watch能否撬动消费者的购买欲望？">Apple Watch能否撬动消费者的购买欲望？</a></li><li><a href="/peijian/ypej/2015-02-20/53.html" title="PULL & BEAR推出全新六款复古耳机系列">PULL & BEAR推出全新六款复古耳机系列</a></li>          </ul>
                </div>
            </div>
            <!--ms-main end -->
        </div>
        <div class="cloud">
            <h3>热门标签</h3>
            <ul>
                <a href="http://www.jiyouh.com/e/tags/?tagname=%D4%CB%B6%AF%CF%E0%BB%FA&tempid=9" target="_blank">运动相机</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%D0%A1%D2%CF&tempid=9" target="_blank">小蚁</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%DF%C7%DF%C7&tempid=9" target="_blank">咔咔</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%D6%D0%D0%CB&tempid=9" target="_blank">中兴</a> <a href="http://www.jiyouh.com/e/tags/?tagname=AndroidWear&tempid=9" target="_blank">AndroidWear</a> <a href="http://www.jiyouh.com/e/tags/?tagname=iOS8&tempid=9" target="_blank">iOS8</a> <a href="http://www.jiyouh.com/e/tags/?tagname=5.0&tempid=9" target="_blank">5.0</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%D3%E0%B3%D0%B6%AB&tempid=9" target="_blank">余承东</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%D2%C6%B6%AF%D0%BE%C6%AC&tempid=9" target="_blank">移动芯片</a> <a href="http://www.jiyouh.com/e/tags/?tagname=SIM%BF%A8&tempid=9" target="_blank">SIM卡</a> <a href="http://www.jiyouh.com/e/tags/?tagname=810&tempid=9" target="_blank">810</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%E6%E7%C1%FA&tempid=9" target="_blank">骁龙</a> <a href="http://www.jiyouh.com/e/tags/?tagname=%B8%DF%CD%A8&tempid=9" target="_blank">高通</a> <a href="http://www.jiyouh.com/e/tags/?tagname=Home%BC%FC&tempid=9" target="_blank">Home键</a> <a href="http://www.jiyouh.com/e/tags/?tagname=MX5Pro&tempid=9" target="_blank">MX5Pro</a>      </ul>
        </div>
        <div class="tuwen">
            <h3>热门文章</h3>
            <ul>

                <li><a href="http://www.jiyouh.com/shouji/android/2015-02-24/76.html" target="_blank" title="HTC One M9官方图曝光 配置价格一并出炉"><img src="/d/file/shouji/android/2015-02-24/2682b1336d2a6825def3d62c855f0b83.jpg" alt="HTC One M9官方图曝光 配置价格一并出炉"><b>HTC One M9官方图曝光 配置价</b></a>
                    <p><span class="tulanmu">安卓(Android)</span><span class="tutime">2015-02-24</span></p>
                </li>

                <li><a href="http://www.jiyouh.com/peijian/qtpj/2015-03-06/140.html" target="_blank" title="中兴“咔咔”运动相机在MWC2015上正式展出 剑指小蚁运动相机"><img src="/d/file/peijian/qtpj/2015-03-06/490b5de1075e4577dc5fdfb3552ae5df.jpg" alt="中兴“咔咔”运动相机在MWC2015上正式展出 剑指小蚁运动相机"><b>中兴“咔咔”运动相机在MWC2</b></a>
                    <p><span class="tulanmu">其他配件</span><span class="tutime">2015-03-06</span></p>
                </li>

                <li><a href="http://www.jiyouh.com/news/2015-03-05/138.html" target="_blank" title="华为荣耀新总裁亮相 称今年重点立足海外"><img src="/d/file/news/2015-03-05/a3020c4a12e1aafcc292741bd0b09244.jpg" alt="华为荣耀新总裁亮相 称今年重点立足海外"><b>华为荣耀新总裁亮相 称今年重</b></a>
                    <p><span class="tulanmu">最新资讯</span><span class="tutime">2015-03-05</span></p>
                </li>

                <li><a href="/shenghuo/2015-02-20/52.html" target="_blank" title="一个女生的十年——手机里一直舍不得删的小说"><img src="/d/file/shenghuo/2015-02-20/c32bec6baa4ccd354a9cb4cc20b34b37.png" alt="一个女生的十年——手机里一直舍不得删的小说"><b>一个女生的十年——手机里一</b></a>
                    <p><span class="tulanmu">手机生活</span><span class="tutime">2015-02-20</span></p>
                </li>

                <li><a href="http://www.jiyouh.com/peijian/cdsb/2015-03-05/139.html" target="_blank" title="细节也要看清楚，华为MWC2015智能手表高清图赏"><img src="/d/file/peijian/cdsb/2015-03-05/020b1334822c2304ebf304380ebc42ac.jpg" alt="细节也要看清楚，华为MWC2015智能手表高清图赏"><b>细节也要看清楚，华为MWC201</b></a>
                    <p><span class="tulanmu">可穿戴设备</span><span class="tutime">2015-03-05</span></p>
                </li>
            </ul>
        </div>
        <div class="ad"> <img src="http://www.jiyouh.com/skin/jiyouhui/images/03.jpg"> </div>
        <div class="links">
            <h3><span>[<a href="/">申请友情链接</a>]</span>友情链接</h3>
            <ul>
                <li><a href="/">手机配件</a></li>
                <li><a href="/">苹果Apple</a></li>
                <li><a href="/">SumSung</a></li>
                <li><a href="/">Sony</a></li>
                <li><a href="/">三星</a></li>
                <li><a href="/">索尼</a></li>
                <li><a href="/">华维荣耀</a></li>
            </ul>
        </div>

        <div>
            <p class="banquan">机友汇有部分文章来源于互联网，版权归属于原作者。本站所有转载文章言论不代表本站观点，如是侵犯了原作者的权利请发邮件联系站长（zshl@jiyouh.com），我们收到后立即删除。</p>
        </div>
    </div>
</article>
@include('layouts.footer')
@endsection
