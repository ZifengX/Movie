<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width = device-width, initial-scale=1" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="shortcut icon" type="image/x-icon" href ="images/logo.ico" media="screen" />
<title>电影卡片</title>
<!--BootStrap-->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />
<!--Google Analytics-->
<script src="js/ganalytics.js"></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container"> 
  <!-- Static navbar -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        </button>
        <a id="webName" class="navbar-brand" href="index.php">电影卡片</a> </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a id="navFont" href="index.php">电影</a></li>
          <li><a id="navFont" href="uss.php">美剧</a></li>
          <!--<li><a id="navFont" href="article.html">影卡周报</a></li>-->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!--<li ><a id="navFont" href="">求片/反馈</a></li>-->
          <!--<li onClick="alert('页面稍后添加..')"><a id="navFont" href="">登录/注册</a></li>-->
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!--/.container-fluid --> 
  </nav>
</div>

<?php
	
	$movieid = $_GET['movie'];
	$connect= new PDO('mysql:host=localhost; dbname=movie','','');
	$connect->query("set names utf8");
	$sql = "SELECT name,xglink,jjlink,thunderlink FROM movie WHERE movieid = $movieid";
	$result = $connect -> query($sql);
	foreach ($result as $row) {
		$name = $row['name'];
		$xglink =$row['xglink'];
		$jjlink = $row['jjlink'];
		$thunderlink = $row['thunderlink'];	
				};
	$connect = null;
?>

<div class = "container">
  <div class="notification">
    <p id="webName" class="text-center">看个电影，放松一下心情吧...</p>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">电影信息</h3>
    </div>
    <div class="panel-body"> 你管我... </div>
  </div>
</div>
<div class="container">
  <div class="col-lg-4">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">西瓜影音</h3>
      </div>
      <div class="panel-body">
        <?php
                   echo '<a href="xgmovie.php?movie='.$movieid.'" class="btn btn-success '; 
				   if($xglink==""){echo 'disabled';};
				   echo '" role="button" target="_blank">'.$name.'</a>';
				?>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">吉吉影音</h3>
      </div>
      <div class="panel-body">
        <?php
                   echo '<a href="jjmovie.php?movie='.$movieid.'" class="btn btn-primary '; 
				   if($jjlink==""){echo 'disabled';};
				   echo '" role="button" target="_blank">'.$name.'</a>';
				?>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">迅雷下载</h3>
      </div>
      <div class="panel-body"> <a href="<?php echo $thunderlink ?>" class="btn btn-info <?php if($thunderlink==""){echo 'disabled';}; ?>" role="button"><?php echo $name; ?></a> </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">电影剧情</h3>
    </div>
    <div class="panel-body"> <a href="#" class="btn btn-default disabled" role="button" target="_blank">占个位置</a> </div>
  </div>
</div>

    <div class="container">
       <div class="panel-footer" style="border-radius:6px">
         <p class="text-center text-danger"><strong>免责声明</strong></p>
         <p class="text-center">本站只提供免费在线观看电影，不参与任何影片的制作或发布，所有资源收集于网络，并不在本站服务器上，仅做宽带测试。</p>
         <p class="text-center">相关版权归原著作版权人所有！</p>
         <p class="text-center">如有关视频侵犯了你的权益，请联系告之 369060437@qq.com，将于第一时间删除。</p>
       </div>
    </div>
    
    <!--JavaScript file-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    </body>
</html>
