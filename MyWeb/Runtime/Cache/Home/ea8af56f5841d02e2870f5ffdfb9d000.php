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
    <link href="/Public/home/css/icp.css" type="text/css" rel="stylesheet" />
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
    <div class="ngb-wrap">
        <div class="ngb-section ngb-icp m-t-30">
            <div class="ngb-content">
                <h4>谁需要办理ICP？</h4>
                <ul class="ngb-h-icp">
                    <li class="o">
                        <div>
                            <div class="icon"><i class="ngb-sprite ngb-icon-wsite"></i></div>
                            <h5>哪些网站需要办理</h5>
                            <p>你的网站是否有在线交易或购买？</p>
                            <p>你的网站是经营性质的么？</p>
                            <p>你的网站收费么了么？</p>
                        </div>
                    </li>
                    <li class="t">
                       <div>
                            <div class="icon"><i class="ngb-sprite ngb-icon-wcop"></i></div>
                            <h5>哪些企业需要办理</h5>
                            <p>你的企业打算建线上交易网站？</p>
                            <p>你的企业打算往线上发展么？</p>
                       </div>
                    </li>
                    <li class="r">
                        <div>
                            <div class="icon"><i class="ngb-sprite ngb-icon-wper"></i></div>
                            <h5>哪些个人需要办理</h5>
                            <p>创业者，经营性网站站长。</p>
                            <p>打算经营收费性网站的人。</p>
                        </div>
                    </li>
                </ul>
                <div style="width:100%;text-align:center;margin:15px 0;">
                    <a href="javascript:window.location=%27https://tsm.miit.gov.cn/pages/home.aspx%27" target="_blank" class="ydy-oy" style="background: #1495d7;padding:5px 2%;font-size:15px;color: white;border: none;border-radius: 4px;">增值电信业务经营许可证查询</a>
                </div>
            </div>
        </div>
        <div class="ngb-section ngb-zsy ">
            <div class="ngb-content zsy-content">
                <!-- <h3 class="pat">关于ICP 您需要了解</h3> -->
                <h4>什么是ICP?</h4>
                <ul class="ngb-w-icp">
                    <li>
                        <div>
                            <div class="icon"><i class="ngb-sprite ngb-icon-bzhy"></i></div>
                            <h5>标准含义</h5>
                            <p>中华人民共和国电信与信息服务业务经营许可证（简称：ICP许可证）是指一般性经营性网站的主办者向当地区县申请的证书证明，即《中华人民共和国电信与信息服务业务经营许可证》。</p> 
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="icon"><i class="ngb-sprite ngb-icon-spjg"></i></div>
                            <h5>审批机构</h5>
                            <p>企业注册地所在省、自治区、直辖市的通信管理局进行审批</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="icon"><i class="ngb-sprite ngb-icon-njyq"></i></div>
                            <h5>年检要求</h5>
                            <p>ICP证年检是每年的1月4号——3月31号</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="icon"><i class="ngb-sprite ngb-icon-yxqx"></i></div>
                            <h5>有效期限</h5>
                            <p>ICP经营许可证使用年限为5年、5年后需要办理续期</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ngb-section ngb-banli">
            <div class="ngb-content banli-content">
                <h3>ICP许可证办理前需注意</h3>
                <ul class="ngb-tab">
                    <li data-target="#zyhy" class="active">注意所从事行业</li>
                    <li data-target="#zydy">注意ICP申请地域</li>
                    <li data-target="#zyms">注意业务的盈利模式</li>
                </ul>
                <ul class="ngb-tab-panel">
                    <li id="zyhy" class="active" style="text-align: center;">
                        <div class="ngb-h5"> </div>
                        <div class="ngb-h6">如网站中含有前置审批(特殊行业)内容，则需要首先通过行业前置审批后才可以申请ICP许可证</div>
                        <div class="ngb-ul n-1">
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">论坛类</div> BBS论坛(电子公告服务)
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">药品信息类</div> 互联网药品信息服务许可证
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">药品交易类</div> 互联网药品交易资格证
                            </div>
                            <div class="ngb-li ngb-item-last">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">医疗服务类</div> 医疗保健信息前置审批
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">广播类</div> 广播电视节目制作经营许可证
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">出版类</div> 互联网出版许可证
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">新闻类</div> 互联网新闻信息服务许可证
                            </div>
                            <div class="ngb-li ngb-item-last">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">视频类</div> 信息网络传播视听节目许可证
                            </div>
                        </div>
                        <div class="ngb-ft">
                            <h6>“来厦门这些证也能帮你办理”</h6><a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank">立即咨询</a>
                        </div>
                    </li>
                    <li id="zydy">
                        <div class="ngb-h5"> </div>
                        <div class="ngb-h6">ICP许可证由企业注册所在地的通信管理局审批，各地区政策有区别</div>
                        <div class="ngb-ul n-1">
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">北京</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">上海</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">广州</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">深圳</div>
                            </div>
                            <div class="ngb-li ngb-item-last">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">杭州</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">天津</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">西安</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">南京</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">武汉</div>
                            </div>
                            <div class="ngb-li ngb-item-last">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">更多城市</div>
                            </div>
                        </div>
                        <div class="ngb-ft">
                            <h6>厦门在全国各地开设分支机构，可为全国客户服务”</h6><a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank">立即咨询</a>
                        </div>
                    </li>
                    <li id="zyms">
                        <div class="ngb-h5">在线盈利模式包括</div>
                        <div class="ngb-h6">互联网有偿信息服务，包括在线销售、在线支付、广告招商、会员收费、企业合作、项目投标等</div>
                        <div class="ngb-ul n-1">
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">电商网站ICP许可证</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">互联网广告类ICP许可证</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">游戏网站ICP许可证</div>
                            </div>
                            <div class="ngb-li ngb-item-last">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">充值类网站ICP许可证</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">导购类网站ICP许可证</div>
                            </div>
                            <div class="ngb-li">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">一般行业ICP许可证</div>
                            </div>
                            <div class="ngb-li ngb-item-last">
                                <div href="javascript:window.location=%27http://www.chuangha.com/%27" target="_blank" class="ngb-li-blk">更多行业</div>
                            </div>
                        </div>
                        <div class="ngb-ft">
                            <h6>“厦门拥有丰富的各类行业ICP办理经验”</h6><a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank">立即咨询</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ngb-section ngb-icp-xk">
            <div class="ngb-content icp-xk-content">
                <h3>ICP许可证办理条件</h3>
                <ul>
                    <li class="ixk-o">
                        <div>
                            <div class="icp-item-o">
                                <div class="icp-item-btn">基本条件</div>
                            </div>
                            <div class="icp-item-t">
                                <div>公司注册资金100万以上</div>
                                <div>公司属于内资企业</div>
                                <div>（外资占股比例不得超过49%以上）</div>
                            </div>
                            <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank">立即咨询</a>
                        </div>
                    </li>
                    <li class="ixk-t">
                        <div>
                            <div class="icp-item-o">
                                <div class="icp-item-btn">客观条件</div>
                            </div>
                            <div class="icp-item-t">
                                <div>社保要求：人数</div>
                                <div>技术人员要求：学历</div>
                                <div>服务器空间托管要求：托管地/托管商</div>
                            </div>
                            <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank">立即咨询</a>
                        </div>
                    </li>
                    <li class="ixk-s">
                        <div>
                            <div class="icp-item-o">
                                <div class="icp-item-btn">其他条件</div>
                            </div>
                            <div class="icp-item-t">
                                <div>申请企业性质要求</div>
                                <div>专业资料撰写要点及格式要求</div>
                            </div>
                            <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank">立即咨询</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ngb-section ngb-szht">
            <h3>选择厦门 办理ICP再无繁杂的流程</h3>
            <div class="ngb-line-o"></div>
            <h6>“厦门办理时间远低于官方流程时间，最快<span class="jq">60工作日</span>办结,如需加急联系客服”</h6><a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank">立即咨询</a>
        </div>
        <div class="ngb-section ngb-zbgm">
            <h3>如果您准备同我们合作 您需要准备</h3>
            <div class="ngb-line-t"></div>
            <h6>太过繁杂？咨询厦门帮您梳理</h6><a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank">立即咨询</a>
        </div>
        <div class="ngb-section ngb-gyhts">
            <div class="ngb-content gyhts-content">
                <h3 >关于ICP 您可能还需要</h3>
                <ul>
                    <li>
                        <div><i class="ngb-sprite ngb-icon-onj"></i><p>ICP年检</p></div>
                    </li>
                    <li>
                        <div><i class="ngb-sprite ngb-icon-ibg"></i><p>ICP变更</p></div>
                    </li>
                    <li>
                        <div><i class="ngb-sprite ngb-icon-izx"></i><p>ICP增项</p></div>
                    </li>
                    <li >
                        <div><i class="ngb-sprite ngb-icon-ixq"></i><p>ICP续期</p></div>
                    </li>
                    <li >
                        <div><i class="ngb-sprite ngb-icon-izxx"></i><p>ICP注销</p></div>
                    </li>
                </ul>
                <h6>这些来厦门都能帮您办到</h6>
                <a href="javascript:window.location=%27http://www.chuangha.com/Home/Contact%27" target="_blank">立即咨询</a>
            </div>
        </div>
    </div>
    
        
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