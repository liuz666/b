<?php if (!defined('THINK_PATH')) exit();?>
    <!DOCTYPE HTML>
<html>
<head>
    <script>
        var sUserAgent = navigator.userAgent.toLowerCase();
        var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
        var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
        var bIsMidp = sUserAgent.match(/midp/i) == "midp";
        var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
        var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
        var bIsAndroid = sUserAgent.match(/android/i) == "android";
        var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
        var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";

        if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
            window.location.href = 'http://m.chuangha.com/';
        }
        // var _hmt = _hmt || [];  //百度商桥
        //   (function() {
        //   var hm = document.createElement("script");
        //   hm.src = "https://hm.baidu.com/hm.js?04f8341f0e6f69a827b51660ee69c701";
        //   var s = document.getElementsByTagName("script")[0]; 
        //   s.parentNode.insertBefore(hm, s);
        //   })();
    </script>
    <!-- <div class="topBar">
        <div class="grWidth">
            <p class="fl">欢迎访问创哈官方网站！</p>
            <div class="topRight fr">
             	<a href="http://chuangha.com" target="_blank">厦门创哈</a>
            </div>
        </div>
    </div> -->
    <div class="header" >
        <div class="grWidth">
            <div class="headMain">
                <h1 class="logo fl">
                    <a href="/">
                        <img src="/Public/home/images/592559bb9ac41.jpg" alt="创哈网络" title="创哈网络" height="40">
                    </a>
                </h1>
                <div class="headRight fr">
                    <a href="javascript:void(0);"><i></i>资质认证</a>
                    <a href="javascript:void(0);"><i></i>客户服务</a>
                    <a href="javascript:void(0);"><i></i>售后无忧</a>
                </div>
            </div>
        </div>
        <div id="nav_wrap"  class="nav_wrap">
            <!-- 导航开始-->
            <div id="nav">
                <ul>
                    <li class="headerli">
                        <a href="/index.php/Home/Index/index" target="_blank">首页</a>
                    </li>
                    <li class="headerli">
                        <a href="/index.php/Home/Network/wenwangwen">网络文化业务</a>
                        <ul class="hover-menu">
                            <li><a href="/index.php/Home/Network/wenwangwen">网络文化经营许可证</a>
                        </ul>
                    </li>
                    <li class="headerli">
                        <a href="#">增值电信业务</a>
                        <ul class="hover-menu">
                            <li><a href="/index.php/Home/Network/icp">ICP许可证（适用于游戏、社区、社交）</a>
                            <li><a href="/index.php/Home/Network/edi" target="_blank">EDI许可证（适用于电商、平台）</a>
                        </ul>
                    </li>
                    <li class="headerli">
                        <a href="#">游戏运营资质</a>
                        <ul class="hover-menu">
                            <li><a href="/index.php/Home/Network/rjzzq">软件著作权</a></li>
                            <li><a href="/index.php/Home/Network/yxba">游戏出版备案（游戏版号）</a></li>
                            <li><a href="/index.php/Home/Network/yxba">游戏运营备案</a></li>
                        </ul>
                    </li>   
                    <li class="headerli"><a href="/index.php/Home/Network/zy">文网文ICP公司转让业务</a></li>
                    <p class="phone fr"><?php echo ($li4['phone']); ?></p>
                </ul>
            </div>
        </div>
        <!-- 导航结束-->
        <!--导航代码结束-->
    
        <!--<script>kfguin="<?php echo ($li4['qq3']); ?>";ws="http://chuangha.com/"; companyname="创哈网络"; welcomeword="您好,欢迎光临创哈网络<brT>请问,有什么可以帮到您的吗?"; type="1";</script>-->
        <script src="/Public/home/js/lanrenzhijia.js"></script>
    </div>
    <!--[if lt IE 8]>
        <meta http-equiv="refresh" content="0;url=http://www.4db.com/public/browser">
        <script>location.href = "http://www.4db.com/public/browser";</script>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="initial-scale=0" />
    <title><?php echo ($title); ?>创哈网络</title>
    <meta name="description" content="<?php echo ($description); ?>" />
    <meta name="keywords" content="<?php echo ($keywords); ?>" />
    <link rel="stylesheet" type="text/css" href="/Public/home/css/style.css">
    <link href="/Public/home/css/reset.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/Public/home/css/yzh.css">
    <script src="/Public/home/js/jquery.js"></script>
    <script src="/Public/home/js/selectivizr.js"></script>
    <script src="/Public/home/js/jquery_002.js"></script>
</head>


<body>
    <!-- 广告轮播图 -->
    <div class="banner">
        <div class="bd">
            <ul>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$no): $mod = ($i % 2 );++$i;?><li>
                        <a href="<?php echo ($no['url']); ?>">
                        <img src="/Public/img/<?php echo ($no['imgpath']); ?>" alt="幻灯片" /></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <ul class="hd">
            <li class="on"></li>
            <li></li>
            <li></li>
        </ul>
       <!--  
            <div class="demand">
  <h3 class="title">
    <span>留言</span></h3>
  <p class="center">顾问5分钟内为您快速匹配解决方案</p>
  <form action="/index.php/Home/Index/liu" enctype="multipart/form-data" method="post">
    <input type="hidden" name="action" value="post" />
    <input type="hidden" name="diyid" value="1" />
    <input type="hidden" name="do" value="2" />
    <input class="f1" type="text" name="xuqiu" placeholder="请填写您的需求">
    <input class="f2" type="text" name="phone" placeholder="留下电话，方便联系您">
    <input type="submit" name="submit" value="立即留言" class='sub' />
    <input type="hidden" name="dede_fields" value="xuqiu,text;tel,text" />
    <input type="hidden" name="dede_fieldshash" value="0e68dec80c94afbccb5c2757aecf13c4" /></form>
  <h4 class="tie2">
    <span>最新成交记录</span></h4>
<div class="demand_box">
         -->
    </div>
    <script type="text/javascript" src="/Public/home/js/layer.js"></script>
    <script src="/Public/home/js/yzh.js"></script>
    <script>
    form_submit('demand_form');
    jQuery(".demand_box").slide({
        mainCell: "ul",
        autoPlay: true,
        effect: "topMarquee",
        vis: 2,
        interTime: 60
    });
    </script>
    </div>
    <script type="text/javascript">
    /*SuperSlide图片切换*/
    jQuery(".banner").slide({
        titCell: ".hd li",
        mainCell: ".bd ul",
        effect: "fold",
        autoPlay: true,
        easing: "easeOutCirc",
        interTime: 6000
    });
    </script>
    <link href="/Public/home/css/wreset.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
    $(function() {
        $(".div-title a").eq(1).addClass("ahober"); // $("#top a").first().addClass("hei");
        $(".div-title a").hover(function() {
            $(".div-title a").removeClass("ahober");
            $(".div-title-center .div-cenr1").eq($(this).index()).show().siblings().hide();
            $(this).addClass("ahober");

        });
    })
    </script>
    <!-- 谁需要办理 -->
    <div class="main-box m-t-30">
        <div class="main ">
            <div class="title ">
                <h2>谁需要办理文网文？</h2>
            </div>
            <ul class="main-div1-ul1">
                <li >
                    <div class="photo "><img src="/Public/home/images/img1.jpg" /></div>
                    <div class="content ">
                        <h4 class="p-l-5 center">如果您的网站有提供以下文化产品服务</h4>
                        <p>将文化产品登载在互联网上，或者通过互联网发送到计算机、电话机、收音机、电视机、游戏机等用户端，供上网用户浏览、阅读、 欣赏、点播、使用或者下载等服务。<br />互联网文化产品的制作、复制、进口、批发、零售、出租、播放等服务。互联网文化产品的展览、比赛等服务。</p>
                    </div>
                </li>
                <li class=" main-div-ul-lir">
                    <div class="photo"><img src="/Public/home/images/img2.jpg"/></div>
                    <div class="content">
                        <h4 class="p-l-5 center">如果您的网站有以下文化产品类型</h4>
                        <p><a>音像制品</a><span>|</span><a>游戏产品</a><span>|</span><a class="yac">演出剧（节）目</a></p>
                        <p><a>艺术品</a><span>|</span><a>动画</a><span>|</span><a class="yac">其他文化类产品</a></p>
                    </div>
                </li>
            </ul>
            <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank" class="zixun">立即咨询</a>
        </div>
    </div>
    <!-- 什么是文网文 -->
    <div class="main-box">
        <div class="main">
            <div class="title ">
                <h2>什么是文网文？</h2>
            </div>
            <ul class="main-div1-ul1 main-div1-ul12">
                <li >
                    <div class="photo"><img src="/Public/home/images/img3.jpg"  /></div>
                    <div class="content">
                        <h4 class="p-l-5 center">标准含义</h4>
                        <p>《网络文化经营许可证》，是指经文化行政部门和电信管理机构批准，颁发给从事经营性互联网文化活动的互联网信息服务提供者的市场合法准入资质；其中经营性互联网文化活动是指以营利为目的，通过向上网用户收费或者电子商务、广告、赞助等方式获取利益，提供互联网文化产品及其服务的活动。</p>
                    </div>
                </li>
                <li class=" main-div-ul-lir">
                    <div class="photo"><img src="/Public/home/images/img4.jpg"  /></div>
                    <div class="content">
                        <h4 class="p-l-5 center">审批机构</h4>
                        <p>企业注册地所在各省、直辖市、自治区文化厅（局）进行审批</p>
                    </div>
                </li>
                <li >
                    <div class="photo"><img src="/Public/home/images/img5.jpg" /></div>
                    <div class="content">
                        <h4 class="p-l-5 center">年检要求</h4>
                        <p style="margin-top:8px;">根据当地具体管理部门要求，部分地区需要年报或月报</p>
                    </div>
                </li>
                <li class=" main-div-ul-lir">
                    <div class="photo"><img src="/Public/home/images/img6.jpg" /></div>
                    <div class="content">
                        <h4 class="p-l-5 center">有效期限</h4>
                        <p>文网文经营许可证使用年限为3年有效期、3年后需要办理续期</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- 办理需注意事项 -->
    <div class="main1">
        <div class="main2-center">
            <h2 class="about-h2 about-h21" >文网文许可证办理前需注意</h2>
            <div class="about-tit">
                <div class="div-title">
                    <a>注意所需前置审批</a>
                    <a>注意文网文申请地域</a>
                    <a>注意所在行业服务模式</a>
                </div>
                <div class="div-title-center">
                    <div class="div-cenr1" style="display:none">
                        <p class="div-tit-p">如网站中含有前置审批(特殊行业)内容，则需要首先通过行业前置审批后才可以申请文网文许可证</p>
                        <div class="city city2 ">
                            <a href="javascript:window.location=%http://chuangha.com%27" target="_blank" class="hz">论坛类</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank" >药品信息类</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">药品交易类</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">医疗服务类</a>
                        </div>
                        <div class="city3">
                            <p><span class="hz">BBS论坛(电子公告服务)</span><span>互联网药品信息服务许可证</span><span>互联网药品交易资格证</span><span>医疗保健信息前置审批</span></p>
                        </div>
                        <div class="city city1 city2 ">
                            <a href="javascript:window.location=%http://chuangha.com%27" target="_blank" class="hz">广播类</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">出版类</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">新闻类</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">视频类</a>
                        </div>
                        <div class="city3">
                            <p><span class="hz">广播电视节目制作经营许可证</span><span>互联网出版许可证</span><span>互联网新闻信息服务许可证</span><span>信息网络传播视听节目许可证</span></p>
                        </div>
                        <p class="z-p z-p1 z-p12">"来厦门这些证也能帮你办理"</p>
                        <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank" class="zixun">立即咨询</a>
                    </div>
                    <div class="div-cenr1">
                        <p class="div-tit-p">文网文许可证由企业注册所在地的文化厅（局）审批，各地区政策有区别</p>
                        <div class="city">
                            <a href="javascript:window.location=%http://chuangha.com%27" target="_blank" class="hz">北京</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">上海</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">广州</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">深圳</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">杭州</a>
                        </div>
                        <div class="city city1">
                            <a href="javascript:window.location=%http://chuangha.com%27" target="_blank" style="margin-left: 0;">天津</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">西安</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">南京</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">武汉</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">更多城市</a>
                        </div>
                        <p class="z-p z-p1">"厦门在全国各地开设分支机构，可为全国客户服务"</p>
                        <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank" class="zixun">立即咨询</a>
                    </div>
                    <div class="div-cenr1" style="display:none">
                        <p class="div-tit-p div-tit-p1"><span class="zx">在线盈利模式包括</span>互联网文化产品的制作、复制、进口、批发、零售、出租、播放等活动</p>
                        <div class="city city2">
                            <a href="javascript:window.location=%http://chuangha.com%27" target="_blank" class="hz">美术品艺术品</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">音乐娱乐产品</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">动漫画产品</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">展览/比赛活动</a>
                        </div>
                        <div class="city city1 city2">
                            <a href="javascript:window.location=%http://chuangha.com%27" target="_blank" class="hz">演出剧、表演</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">虚拟货币交易</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">游戏产品运营</a><a href="javascript:window.location=%http://chuangha.com%27" target="_blank">更多行业</a>
                        </div>
                        <p class="z-p z-p1">厦门拥有丰富的各类行业文网文办理经验</p>
                        <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank" class="zixun">立即咨询</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 许可证办理条件 -->
    <div class="main" style="line-height: 30px;">
        <h2 class="about-h2">文网文许可证办理条件</h2>
        <div class="tijian">
            <p>有单位的名称、住所、组织机构和章程</p>
            <p class="pp1">有确定的互联网文化活动范围</p>
            <p class="pp2">具有合法的互联网文化产品来源渠道或互联网文化产品生产能力</p>
            <p class="pp3">有适应互联网文化活动需要并取得相应从业资格的8名以上业务管理人员和专业技术人员</p>
        </div>
        <div class="tijian">
            <p class="pp4">有100万元以上的注册资金、适应互联网文化活动需要的设备、工作场所以及相应的经营管理技术措施；游戏产品业务，除上述条件外，注册资金须达到1000万元以上</p>
            <p class="pp5">符合文化部关于互联网文化单位总量、结构和布局的规划</p>
            <p class="pp6">不受理外商投资互联网信息服务提供者的申请从事互联网文化活动，允许香港和澳门的服务提供者设立由内地控股的经营性的互联网文化单位</p>
            <p class="pp7">法律、法规规定的其他条件</p>
        </div>
        <p class="z-p">"法律、法规规定的其他条件"具体指什么？每个地区的文化管理部门不一样哦，赶快找我们的客服咨询吧</p>
        <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank" class="zixun">立即咨询</a>
        <h2 class="about-h2 about-h21" >文网文许可证办理前需注意</h2>
    </div>
    <div class="zt">
        <div class="zt1">
            <div class="zt1-left left">
                <h3>官方流程</h3>
                <ul>
                    <li style="margin-top:11px;"><span>1</span>
                        <p>甄别业务类别</p>
                    </li>
                    <li><span>2</span>
                        <p>注册域名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;不注册域名</p>
                    </li>
                    <li><span>3</span>
                        <p>购买空间</p>
                    </li>
                    <li><span>4</span>
                        <p>搭建网站</p>
                    </li>
                    <li><span>5</span>
                        <p>获取网站备案</p>
                    </li>
                    <li><span>6</span>
                        <p>甄别自身条件并申请</p>
                    </li>
                    <li><span>7</span>
                        <p>拟定申请材料</p>
                    </li>
                    <li><span>8</span>
                        <p>出具“网文”自查报告</p>
                    </li>
                    <li><span>9</span>
                        <p>网申或纸质提交</p>
                    </li>
                    <li><span>10</span>
                        <p>领取受理通知书</p>
                    </li>
                    <li><span>11</span>
                        <p>领取证书</p>
                    </li>
                </ul>
            </div>
            <div class="zt1-left right">
                <h3>厦门办理流程</h3>
                <ul>
                    <li style="margin-top:11px;"><span>1</span>
                        <p>咨询业务意向</p>
                    </li>
                    <li class="zt-span1">
                        <p>（确定您的办理类型）</p>
                    </li>
                    <li><span>2</span>
                        <p>商务合作洽谈</p>
                    </li>
                    <li class="zt-span1">
                        <p>（为您制定合适的方案）</p>
                    </li>
                    <li><span>3</span>
                        <p>基础材料准备</p>
                    </li>
                    <li class="zt-span1">
                        <p>（协助您准备所需材料）</p>
                    </li>
                    <li><span>4</span>
                        <p>提交审核</p>
                    </li>
                    <li class="zt-span1">
                        <p>（剩下的事就交给我们了）</p>
                    </li>
                    <li><span>5</span>
                        <p>领取许可证</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <p class="z-p">"厦门办理时间远低于官方流程时间，最快<font class="blue">60工作日</font>办结,如需加急联系客服"</p>
    <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank" class="zixun">立即咨询</a>
    <div class="main1 main2">
        <h2 class="about-h2 about-h21" >如果您准备同我们合作 您需要准备</h2>
        <div class="main2-div">
            <ul class="left dete1-left">
                <li style="margin-top:58px;">法人签署的书面申请</li>
                <li>企业名称预先核准通知书或者营业执照和章程</li>
                <li>工作场所使用权证明文件（租赁办公场所的需提交房屋租赁合同和出租方房屋<br />产权证明复印件,自有场所需提供房产证复印件）</li>
                <li style=" margin-top:11px;">主要经营管理人员、专业技术人员的资格证明和身份证明文件<br />（如学历证书、职业资格证书和身份证复印件）</li>
                <li style=" margin-top:12px;">依法需要提交的其他文件</li>
            </ul>
            <ul class="right dete1-left dete1-right">
                <li style="margin-top:93px;">设立互联网文化单位申请表</li>
                <li>资金来源、数额及其信用证明文件（如验资报告、验资机构企业法人营业执照复印件等）</li>
                <li>法定代表人、主要负责人身份证复印件及简历</li>
                <li>业务发展报告</li>
            </ul>
        </div>
        <p class="z-p">太过繁杂？咨询厦门帮您梳理</p>
        <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank" class="zixun">立即咨询</a>
    </div>
    <h2 class="about-h2">网络经营 您可能还需要</h2>
    <div class="main4">
        <a href="javascript:window.location=%http://chuangha.com%27" target="_blank">
          <img src="/Public/home/images/tu1.jpg"/>
            <p>ICP许可证</p>
        </a>
        <a href="javascript:window.location=%http://chuangha.com%27" target="_blank">
          <img src="/Public/home/images/tu2.jpg" />
            <p>SP许可证</p>
        </a>
        <a href="javascript:window.location=%http://chuangha.com%27" target="_blank">
          <img src="/Public/home/images/tu3.jpg" />
            <p style="font-size:12px;">互联网出版许可证</p>
        </a>
        <a href="javascript:window.location=%http://chuangha.com%27" target="_blank">
          <img src="/Public/home/images/tu4.jpg" />
            <p>游戏运营备案</p>
        </a>
        <a href="javascript:window.location=%http://chuangha.com%27" target="_blank">
          <img src="/Public/home/images/tu5.jpg" />
            <p>IDC许可证</p>
        </a>
    </div>
    <p class="z-p">这些来厦门都能帮您办到</p>
    <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank" class="zixun">立即咨询</a>
    
        
<!-- 尾部 -->
<div class="footer">
    <div class="grWidth footMain">
        <div class="footLeft fl">
            <ul class="footMenu">
                <li>
                    <h3>关于我们</h3>
                </li>
                <li>
                    <a href="/index.php/Home/About/index">公司简介</a></li>
                <!-- <li>
              <a href="/a/guanyu/gsdt/">公司动态</a></li> -->
                <li>
                    <a href="/index.php/Home/About/team">服务团队</a></li>
                <li>
                    <a href="/index.php/Home/Contact/index">联系我们</a></li>
            </ul>
            <ul class="footMenu">
                <li>
                    <h3>服务项目</h3>
                </li>
                <li>
                    <a href="/index.php/Home/Service/index">公司注册</a></li>
                <li>
                    <a href="/index.php/Home/Service/index">行政资质审批</a></li>
                <li>
                    <a href="/index.php/Home/Service/index">资源转化</a></li>
                <li>
                    <a href="/index.php/Home/Service/index">解决方案</a></li>
            </ul>
            <ul class="footMenu">
                <li>
                    <h3>知识课堂</h3>
                </li>
                <li>
                    <a href="/index.php/Home/Classroom/index/status/'行业动态'">知识课堂</a></li>
                <li>
                    <a href="/index.php/Home/Classroom/index/status/行业动态">行业动态</a></li>
                <li>
                    <a href="/index.php/Home/Classroom/index/status/常见问题">常见问题</a></li>
                <li>
                    <a href="/index.php/Home/Classroom/index/status/FAQ">FAQ</a></li>
            </ul>
            <ul class="footMenu">
                <li>
                    <h3>友情链接</h3>
                </li>
                <li>
                    <?php if(is_array($sre)): $i = 0; $__LIST__ = $sre;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$srow): $mod = ($i % 2 );++$i;?><li>
                    <a href='<?php echo ($srow['url']); ?>' target='_blank'><?php echo ($srow['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </li>
            </ul>
        </div>
        <div class="footRight ">
            <div class="foot_wx">
                <?php if(is_array($list4)): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li4): $mod = ($i % 2 );++$i;?><img class="fl" src="/Public/image/<?php echo ($li4['pic']); ?>" alt="扫描二维码关注创哈网络微信">
                    <p>扫描二维码<br />关注创哈网络微信<br />创业一手掌握</p><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="footContact" style="white-space:normal; width:300px;">
                <h4>
                <span>服务热线</span>
                <strong><?php echo ($li4['phone']); ?></strong></h4>厦门公司地址：<?php echo ($li4['address2']); ?><br />
                <br /><?php echo ($li4['gtime']); ?>
            </div>
        </div>
        
    </div>
    <div class="footBottom">
        <div class="grWidth">
            <div class="fl"><?php echo ($li4['address']); ?>
                <?php if(is_array($list4)): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lp): $mod = ($i % 2 );++$i;?><a href="http://www.miibeian.gov.cn" target="_blank"><?php echo ($lp['ICP']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                <br />
            </div>
            <div class="fr" style="margin-top:0px">
                <a href="#">
              <img src="/Public/home/images/f1.jpg" alt="可信网站身份验证" height="47"></a>
                <a href="#">
              <img src="/Public/home/images/f2.jpg" alt="360安全网站检测" height="47"></a>
                <a href="#">
              <img src="/Public/home/images/f3.jpg" alt="ISO认证900" height="47"></a>
            </div>
        </div>
    </div>
    <script>
    jQuery(".navMenu").slide({
        type: "menu",
        titCell: ".m",
        targetCell: ".navMenu_sub",
        effect: "fade",
        delayTime: 300,
        triggerTime: 0,
        returnDefault: true,
        defaultPlay: false
    });
    $(function() {
        $('.topRight .wx').hover(function() {
            $(this).find('span').stop().slideToggle();
        });
        $('.navBox .navIcon').click(function() {
            $('.navMenu').stop().slideToggle();
        });
    });
    </script>
    <script>
    window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": "",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "0",
            "bdSize": "16"
        },
        "slide": {
            "type": "slide",
            "bdImg": "5",
            "bdPos": "left",
            "bdTop": "160.5"
        }
    };
    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
    </script>
    <div class="kefuBox" id="kefu">
        <!-- <div class="kefuRight">
            <div class="kefuTop"></div>
            <div class="kefuCont">
              <ul>
                <a target="_blank" href="tencent://message/?uin=<?php echo ($li4['qq']); ?>" rel="nofollow">
                  <li class="qq"><?php echo ($li4['name']); ?></li></a>
                <a target="_blank" href="tencent://message/?uin=<?php echo ($li4['sqq']); ?>" rel="nofollow">
                  <li class="qq"><?php echo ($li4['sname']); ?></li></a>
                <li class="codeer">
                  <p>扫一扫,关注我们</p>
                  <span>
                    <img src="/Public/image/<?php echo ($li4['pic']); ?>" /></span>
                </li>
              </ul>
            </div>
            <div class="kefuBottom"></div>
          </div> -->
        </volist>
    </div>
    <script>
    $('#kefu .kefuClose').click(function() {
        $('#kefu .kefuLeft').animate({
                width: '30px'
            },
            500);
        $('#kefu .kefuRight').animate({
                width: 0
            },
            100);
    });
    $('.kefuLeft').click(function() {
        $(this).animate({
                width: 0
            },
            100);
        $('.kefuRight').animate({
                width: '154px'
            },
            100);
    });
    </script>
    <script type="text/javascript" src="//js.users.51.la/19398015.js"></script>
    </body>

    </html>