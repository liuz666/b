<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
<style type="text/css">
.navMenu {
  display:none;

}
</style>
  <div class="breadCrumb"> 
   <div class="grWidth"> 
    <span>您现在的位置：</span>
    <a href="/">首页</a>
    <em> &gt; </em>
    <a class="" href="/guanyu/">关于我们</a> &gt; 
    <a class="bc" href="/plus/list.php?tid=15">服务团队</a> 
   </div> 
  </div> 
  <div class="listWrapper grWidth clearfix"> 
   <!-- 左侧栏目 --> 
   <div class="sidebar"> 
    <ul class="sidebarMenu"> 
      <li>
      <a class="" href="/index.php/Home/About/index" title="公司简介">公司简介</a></li>
            <!-- <li>
              <a class="" href="/a/guanyu/gsdt/" title="公司动态">公司动态</a> -->
              <li>
                <a class="" href="/index.php/Home/About/team" title="服务团队">服务团队</a>
                <li>
                  <a class="" href="/index.php/Home/Contact/index" title="联系我们">联系我们</a></li>
    </ul> 
   </div> 
   <div class="listRight"> 
    <div class="teamList"> 
     <ul> 
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><!----> 
      <li> <a class="tImg" href="/index.php/Home/About/fuwu/id/<?php echo ($row['id']); ?>"><img src="/Public/image/<?php echo ($row['pic']); ?>" alt="林小桃" /></a> <h4><a href="/index.php/Home/About/fuwu/id/<?php echo ($row['id']); ?>"><?php echo ($row['name']); ?><span><?php echo ($row['position']); ?></span></a></h4> <p class="font"><?php echo ($row['content']); ?></p> <p class="btn"><a href="tencent://message/?uin=<?php echo ($row['qq']); ?>">立即咨询</a><a href="/index.php/Home/About/fuwu/id/<?php echo ($row['id']); ?>">了解更多</a></p> </li><?php endforeach; endif; else: echo "" ;endif; ?>
      <!----> 
     </ul> 
    </div> 
    <div class="pagination"></div> 
   </div> 
  </div> 
   <!--优势-->
    <ul class="advantage grWidth">
      <li class="a1">
        <i>
        </i>
        <h4>超高性价比</h4>
        <p>不用东奔西走，找创哈网络一站式搞定，为客户节约大量成本。</p>
      </li>
      <li class="a2">
        <i>
        </i>
        <h4>高效的服务</h4>
        <p>创哈网络拥有标准服务框架,服务简洁有效。</p>
      </li>
      <li class="a3">
        <i>
        </i>
        <h4>服务流程透明</h4>
        <p>随时查询服务进度，进度有变化资讯会第一时间告知。</p>
      </li>
      <li class="a4">
        <i>
        </i>
        <h4>信息保密</h4>
        <p>严格遵守商业诚信，保守商业秘密，杜绝信息泄露</p>
      </li>
      <li class="a5">
        <i>
        </i>
        <h4>退款保障</h4>
        <p>如对咨询人员的服务不满意，可以向创哈网络管理层投诉，核实后可退款。</p>
      </li>
    </ul>
    <!-- 尾部 -->
    <div class="footer">
      <div class="grWidth footMain">
        <div class="footLeft fl">
          <ul class="footMenu">
            <li>
              <h3>关于我们</h3></li>
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
              <h3>服务项目</h3></li>
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
              <h3>知识课堂</h3></li>
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
              <h3>友情链接</h3></li>
            <li>
              <?php if(is_array($sre)): $i = 0; $__LIST__ = $sre;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$srow): $mod = ($i % 2 );++$i;?><li>
                <a href='<?php echo ($srow['url']); ?>' target='_blank'><?php echo ($srow['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </li>
          </ul>
        </div>
        <div class="foot_wx fl">
          <?php if(is_array($list4)): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li4): $mod = ($i % 2 );++$i;?><img class="fl" src="/Public/image/<?php echo ($li4['pic']); ?>" alt="扫描二维码关注创哈网络微信">
          <p>扫描二维码
            <br/>关注创哈网络微信
            <br/>创业一手掌握</p></div>
        <div class="footContact fr" style="white-space:normal; width:300px;">
          <h4>
            <span>服务热线</span>
            <strong><?php echo ($li4['phone']); ?></strong></h4>厦门公司地址：<?php echo ($li4['address2']); ?><br/>
          <br/><?php echo ($li4['gtime']); ?></div></div>
      <div class="footBottom">
        <div class="grWidth">
          <div class="fl"><?php echo ($li4['address']); ?>
            <?php if(is_array($list4)): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lp): $mod = ($i % 2 );++$i;?><a href="http://www.miibeian.gov.cn" target="_blank"><?php echo ($lp['ICP']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            <br/>
            <a href="/index.php/Home/Contact/index">联系我们</a></div>
          <div class="fr">
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
        });</script>
      <script>window._bd_share_config = {
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
        with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
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
          </div> --><?php endforeach; endif; else: echo "" ;endif; ?>
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