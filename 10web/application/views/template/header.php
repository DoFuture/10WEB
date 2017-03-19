<style type="text/css">
 .am-topbar-height{
  height:100px !important;
  margin-left: 0 !important;
  float:left;
}
.am-topbar-white{
  background-color: #ffffff !important;
  height:110px;
  z-index:2000 !important;
}

.am-topbar-wrapper{
  width:1460px !important;
  float:right;

}
.am-right-wrapper{
  width:31.505%;
}
.am-font{
  color:#ffffff !important;
}

.am-hover{
  color:#999999 !important;
}

#am-wrapper{
  margin-top: 60px;
}

.am-banner{
  width:100%;
}

.am-header-border{
  height:10px;
  background-color:#000000;
  width:100%;
}

.am-navbarr{
  float: right;
  display: inline;
}



.dis{
  font-size: 16px;
  display: inline-block;
  padding:0 2%;
  height:95px;
  text-align: center;
}
.am-topbar-white .am-span{
  font-weight: bold;
  height:99px;
  float:left;
  width:10%;
  text-align:center;
  font-size: 20px;
}
.am-span:hover{
  background-color: #f8f8f8;
}
.am-navvv{
  width:100% !important;
  text-align: center;
}

.am-content{
    opacity: 0.8 !important;
    background-color: #f8f8f8 !important;
    margin:-10px 0 0 !important;
}
.am-brand{
    height:100px !important;
    width:100%;
    line-height: 110px !important;
    float: left;
}
.am-topright{
  line-height: 110px !important;
  height:100px !important;
  font-size:16px;
  padding: 0 20px 0 20px;
  margin:0 !important;
}

.am-topright:hover{
  background-color: #f8f8f8 !important;
} 


/*右边的用户头像和登陆注册按钮*/

/*重写amaze ui 样式*/
#header-right .am-dropdown-content{
    width: 110px;
    min-width: 0;
    text-align: center;
}

.header-user-icon{
  line-height: 100px;
  cursor: pointer;
  position: relative;
}

.header-user-icon img{
  height: 45px;
  padding-right: 10px;
}

.red-point{
  height: 10px;
  width: 10px;
  background: #ea6f5a;
  position: absolute;
  left: 45px;
  top: calc(50% + 10px);
  border-radius: 100%;
}

</style>

<header class="am-topbar am-topbar-fixed-top am-topbar-white">
 <div class="am-header-border ">                
 </div>
 <div class="am-topbar-wrapper">
  <div class="am-container am-topbar-height">
    <div class="am-topbar-brand am-brand">    
        <div style="float:left;">
          <a href="/">
            <img src="/assets/i/10_mian_logo.png" style="height:60px; margin:0 1%;" />
          </a>
        </div>

        <div class="am-span">
          <a class="am-dropdown-toggle"  href="/">
            <span class="dis">首页</span>
          </a>
        </div>

        <div class="am-span">
          <a class="am-dropdown-toggle"  href="/application/views/project/project.php">
            <span class="dis">项目</span>
          </a>
        </div>

        <div class="am-span ">
          <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
            <li class="am-dropdown am-navvv" data-am-dropdown="">
              <span class="dis ">导航</span></a>
              <ul class="am-dropdown-content am-content">
                <li><a href="/index.php/team">社团简介</a></li>
                <li><a href="/index.php/archive">技术文章</a></li>
                <li><a href="/index.php/activity">社团活动</a></li>
                <li><a href="/index.php/webtools">web工具s</a></li>
              </ul>
            </li>
          </a>
        </div>

      </div>          
   </div>

   <div class="am-right-wrapper am-topbar-height" id="header-right">
      
      <?php
        if(!isset($_SESSION['info']['0'])){
      ?>
        <div class="am-topright am-topbar-right " style="float:left;text-align:center;">
         <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="/index.php/signup">
          <span class="am-icon-user "></span> 登录</button>
        </a>
        </div>
        <div class="am-topright am-topbar-right am-topright" style="float:left;text-align:center;">
         <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="/index.php/signup">
          <span class="am-icon-pencil "></span> 注册</button>
         </a> 
        </div>
      <?php
        }else{
          $user = $_SESSION['info']['0'];
          $head_icon = $user['HeadIcon'];
          if(!$head_icon)
            $head_icon = '/assets/i/default_head_icon.gif';
          
      ?>
        <div class="am-dropdown" data-am-dropdown>
            <div class="am-dropdown-toggle header-user-icon" data-am-dropdown-toggle>
              <div id="red-point" class=""></div>
              <img src=" <?php echo $head_icon; ?>">
              <span class="am-icon-caret-down"></span>
            </div>
            <ul class="am-dropdown-content">
              <li><a href="#">我的主页</a></li>
              <li><a href="#">我的文章</a></li>
              <li><a href="/index.php/message">我的私信<span class="am-badge am-badge-danger am-round" id="unread-msg-count"></span></a></li>
              <li><a href="#">我的活动</a></li>
              <li><a href="#">我的关注</a></li>
              <li class="am-divider"></li>
              <li><a href="/index.php/user/logout">登出</a></li>
            </ul>
        </div>
      <?php } ?>

   </div>
 </div>
</header>

<script type="text/javascript">
  $(document).ready(function(){
    //读取未读消息的数目
    $.get('/index.php/api/message/GetUnreadMsgCount',function(data){
      data = JSON.parse(data);
      if(data.Flag > 0){
        //已经登陆执行程序
        var UnreadCount = data.Content.UnreadCount;
        if(UnreadCount > 0){
          $('#unread-msg-count').text(UnreadCount);
          $('#red-point').addClass('red-point');
        }
      }
    });
  });
</script>

