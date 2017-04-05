<!DOCTYPE html>
<html>
<head>
	<meta name="theme-color" content="#c4142b">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet/less" type="text/css" href="css/variables.less" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/overide.css">
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!--[if lte IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<script type="text/javascript" src="js/jquery1.9.1.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	#template{
    		position: absolute;
    		top: 0;
    		z-index: 1000000;
    		display: none;
    	}
    </style>
    <script type="text/javascript">
    	var show = true;
    	jQuery(document).ready(function($) {
    		$(window).keyup(function(event) {
    			var code = (event.keyCode ? event.keyCode : event.which);
    			if(code == 80){
    				$("#template").css('display', show ? "block":"none");
    				show = !show;
    			}
    		});
    	});
    </script>
</head>
<body>
	<img id="template" src="image/home.jpg" width="100%">
	<nav class="navbar navbar-default fshare-navbar navbar-fixed-top">
	  	<div class="container-fluid">
		    <div class="navbar-header">
				<a class="navbar-brand" href="#"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#fshare-nav-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
		    </div>
		    <div class="collapse navbar-collapse" id="fshare-nav-menu">
		    	<ul class="nav navbar-nav navbar-right">
					<li><a href="#">GIỚI THIỆU</a></li>
		            <li><a href="#">ƯU ĐÃI</a></li>
		            <li><a href="#">NÂNG CẤP</a></li>
		            <li><a href="#">TIN TỨC</a></li>
		            <li><a href="#">CÔNG CỤ</a></li>
		            <li><a href="#">ĐĂNG NHẬP</a></li>
	           		<button class="btn btn-default navbar-btn">ĐĂNG KÝ NGAY</button>
			    </ul>
		    </div>
	  	</div>
	</nav>
	<div class="section container d-table" id="introduction">
		<div class="intro-bg">
		</div>
		<div class="mask"></div>
		<div class="intro-slogan align-bottom">
			<h1>Lưu trữ mọi lúc, chia sẻ mọi nơi</h1>
			<h3>Trao cho bạn cơ hội được lưu trữ, download, upload và chia sẻ dữ liệu trực tuyến đến bất cứ đâu, bất cứ khi nào.</h3>
			<button class="btn btn-primary">Tải lên &amp; Chia sẻ</button>
			<div class="clearfix"></div>
			<img class="hidden-xs" src="image/Devices.png" height="50%">
			<img class="hidden-md hidden-lg hidden-sm" src="image/Devices.png" width="100%">
		</div>
	</div>
	<label for="radio-one">
	<input type="radio" value="radio-one" name="quality" id="radio-one"> <span>Cuối cùng</span>
	</label>

	<label for="radio-two">
	<input type="radio" value="radio-two" name="quality" id="radio-two"> <span>cũng</span>
	</label>

	<label for="radio-three">
	<input type="radio" value="radio-two"  name="quality" id="radio-three" checked> <span>được</span>
	</label>
	<div style="height: 1000px; width: 100%"></div>
</body>
</html>