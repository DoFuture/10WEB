<?php  
   //html 开始通用头部
   require('./application/views/template/html_begin.php');
?>

<link rel="stylesheet" href="/assets/css/app.css">
<link rel="stylesheet" href="/assets/css/animate.css">
<link rel="stylesheet" href="/assets/css/project.css">

<body class="am-with-topbar-fixed-top">

<!-- 通用宽屏头部 -->
<?php 
  require('./application/views/template/header.php');
?>

<div class="project">
    <div class="comWidth">
          <div class="am-divide am-container am-project-header">
            <h1>社 团 开 源 项 目</h1>
          </div>
          </br>
        <ul class="project-item am-avg-sm-2 am-avg-md-4 am-avg-lg-4 am-gut-md" >
            <script type="text/javascript" src="/assets/js/project.js"></script>
        </ul>
    </div>
</div>

<?php  
  //html 结束通用底部
  require('./application/views/template/html_end.php');
?>

