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
	<link rel="stylesheet" type="text/css" href="css/ScrollToShow.css">
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/ScrollToShow.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<!--[if lte IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
		<div class="intro-slogan valign-bottom">
			<h1 class="uppercase" anim="anim-0.0" animFunc="fadeInUp20">Lưu trữ mọi lúc, chia sẻ mọi nơi</h1>
			<h3 anim="anim-0.3" animFunc="fadeInUp20">Trao cho bạn cơ hội được lưu trữ, download, upload và chia sẻ dữ liệu trực tuyến đến bất cứ đâu, bất cứ khi nào.</h3>
			<button class="btn btn-primary"  anim="anim-0.4" animFunc="fadeInUp20">Tải lên &amp; Chia sẻ</button>
			<div class="clearfix"></div>
			<img class="hidden-xs hidden-sm" anim="anim-0.5" animFunc="fadeInUp20" src="image/Devices.png" height="50%">
			<img class="hidden-md hidden-lg" anim="anim-0.6" animFunc="fadeInUp20" src="image/Devices.png" width="100%">
		</div>
	</div>
	<div class="section container" id="slideshow">
		<div class="row">
			<div anim="anim-0.0" animFunc="fadeInUp20" class="col-xs-10 col-xs-offset-1 col-centered text-center"><h2 class="uppercase">Cả thế giới trực tuyến nằm trong một ứng dụng</h2></div>
			<div anim="anim-0.2" animFunc="fadeInUp20" class="col-xs-8 col-xs-offset-2 slider">
				<img src="image/slide1.jpg" width="100%" height="100%" id="slide1" class="left"/>
				<img src="image/slide2.jpg" width="100%" height="100%" id="slide1" class="centered"/>
				<img src="image/slide3.jpg" width="100%" height="100%" id="slide1" class="right"/>
			</div>
			<div anim="anim-0.2" animFunc="fadeInUp20" class="col-xs-8 col-xs-offset-2 text-center slider-button">
				<label for="radio-one">
					<input type="radio" value="radio-one" name="quality" id="radio-one"> <span></span>
				</label>
				<label for="radio-two">
					<input type="radio" value="radio-two" name="quality" id="radio-two" checked> <span></span>
				</label>
				<label for="radio-three">
					<input type="radio" value="radio-three" name="quality" id="radio-three"> <span></span>
				</label>
			</div>
			<div class="col-md-10 col-xs-8 col-md-offset-1 col-xs-offset-2 slider-content">
				<div class="row">
					<div class="hidden-xs hidden-sm col-xs-12 col-md-4 text-center" anim="anim-0.4" animFunc="fadeInUp20">
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-10 slc-title">
										<img src="image/storage_icon.png">
										<h3>Download và chia sẻ dữ liệu</h3>
									</div>
								</div>
							</div>
							<div class="col-xs-12">
								<h5>Download và chia sẻ dữ liệu trực tuyến nhanh chóng và dễ dàng.</h5>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 text-center" anim="anim-0.6" animFunc="fadeInUp20">
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-10 slc-title">
										<img src="image/speech_icon.png">
										<h3>Xem trực tuyến</h3>
									</div>
								</div>
							</div>
							<div class="col-xs-12">
								<h5>Bạn có thể xem những bộ phim bom tấn, file nhạc chất lượng cao ngay tại Fshare.vn.</h5>
							</div>
						</div>
					</div>
					<div class="hidden-xs hidden-sm col-xs-12 col-md-4 text-center" anim="anim-0.8" animFunc="fadeInUp20">
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-10 slc-title">
										<img src="image/safe_icon.png">
										<h3>Theo dõi thư mục</h3>
									</div>
								</div>
							</div>
							<div class="col-xs-12">
								<h5>Chưa bao giờ việc quản lý, theo dõi những nội dung hay trên internet trở nên đơn giản hơn thế.</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section d-table" id="slogan">
		<div class="parallax-img"></div>
	 	<div class="mask"></div>
	 	<h2 class="valign-center text-center hidden-xs hidden-sm" anim="anim-0.0" animFunc="fadeInUp20">Mạng xã hội Lưu trữ và Chia sẻ dữ liệu trực tuyến hàng đầu VIỆT NAM </h2>
	 	<h3 class="valign-center text-center hidden-md hidden-lg" anim="anim-0.0" animFunc="fadeInUp20">Mạng xã hội Lưu trữ và Chia sẻ dữ liệu trực tuyến hàng đầu VIỆT NAM </h3>
	</div>
	<div class="section container" id="policy">
		<div class="row text-center">
			<div class="col-xs-10 col-xs-offset-1" anim="anim-0.0" animFunc="fadeInUp20">
				<h2 class="red text-center uppercase">Đặc quyền VIP Fshare</h3>
			</div>
			<div anim="anim-0.3" animFunc="fadeInUp20" class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 policy-box">
				<div class="row">
					<div class="col-xs-12">
						<div class="policy-img-box">
							<img class="policy-img" src="image/storage_icon.png"/>
						</div>
					</div>
					<div class="col-xs-12">
						<h3 class="red text-center uppercase">Lưu trữ khủng</h3>
					</div>
					<div class="col-xs-12">

						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<p>
									300GB lưu trữ sẽ được chuyển ngay vào tài khoản Fshare khi bạn nâng cấp VIP thành công.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div anim="anim-0.8" animFunc="fadeInUp20" class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 policy-box">
				<div class="row">
					<div class="col-xs-12">
						<div class="policy-img-box">
							<img class="policy-img" src="image/safe_icon.png"/>
						</div>
					</div>
					<div class="col-xs-12">
						<h3 class="red text-center uppercase">Bảo mật cao</h3>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<p>
									Dữ liệu lưu trữ của bạn tại Fshare.vn luôn được bảo mật và an toàn tuyệt đối.
								</p>
							</div>
						</div>				
					</div>
				</div>
			</div>
			<div anim="anim-1.2" animFunc="fadeInUp20" class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 policy-box">
				<div class="row">
					<div class="col-xs-12">
						<div class="policy-img-box">
							<img class="policy-img" src="image/storage_icon.png"/>
						</div>
					</div>
					<div class="col-xs-12">
						<h3 class="red text-center uppercase">Thanh toán linh hoạt</h3>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<p>
									Đa dạng các hình thức thanh toán từ ví điện tử đến các loại thẻ Visa, thẻ cào điện thoại, tin nhắn SMS…
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div anim="anim-1.7" animFunc="fadeInUp20" class="col-xs-10 col-xs-offset-1 text-center">
				<button class="btn btn-default policy-more">TÌM HIỂU THÊM</button>
			</div>
		</div>
	</div>
	<div class="section container" id="advise">
		<div class="row">
			<div class="hidden-xs hidden-sm col-md-4 adv-left">
				<div class="row">
					<div anim="anim-0.0" animFunc="fadeInRight20" class="col-xs-12 adv-left-info d-table">
						<div class="adv-name valign-center text-right">
							<span class="semi-bold trans adv-name-text">Lee Jun Hoong</span>
						</div>
						<div class="adv-avt valign-center">
							<div class="adv-img">
								<img class="trans" src="image/avt.JPG" height="100%">
							</div>
							<div class="adv-dot trans">
								
							</div>
						</div>
					</div>
					<div anim="anim-0.4" animFunc="fadeInRight20" class="col-xs-12 adv-left-info d-table">
						<div class="adv-name valign-center text-right">
							<span class="semi-bold trans adv-name-text">Lee Jun Hoong</span>
						</div>
						<div class="adv-avt valign-center">
							<div class="adv-img">
								<img class="trans" src="image/avt.JPG" height="100%">
							</div>
							<div class="adv-dot trans">
								
							</div>
						</div>
					</div>
					<div anim="anim-0.8" animFunc="fadeInRight20" class="col-xs-12 adv-left-info d-table">
						<div class="adv-name valign-center text-right">
							<span class="semi-bold trans adv-name-text">Lee Jun Hoong</span>
						</div>
						<div class="adv-avt valign-center">
							<div class="adv-img">
								<img class="trans my-a" src="image/avt.JPG" height="100%">
							</div>
							<div class="adv-dot trans">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div anim="anim-0.0" animFunc="fadeInDown20" class="col-xs-10 col-xs-offset-1 col-md-offset-0 col-md-8 adv-right">
				<div class="row">
					<div class="text-center col-xs-12">
						<h3 class="black uppercase text-center">Tại sao chọn Fshare.vn?</h3>
					</div>
					<div class="text-center col-xs-6 col-xs-offset-3 avr-slide-container">
						<div class="avr-slide trans5">
							<div class="avr-box col-xs-4">
								<div class="avr-img">
									<img src="image/avt.JPG" height="100%">
								</div>
								<h3>Lee Jun Hoong<br>Chủ tịch tập đoàn Giao Diện Fshare
								</h3>
								<p>Đôi lúc, tôi hay quên USB chứa dữ liệu quan trọng ở nhà. Nhờ có Fshare giúp tôi dễ dàng lưu trữ dữ liệu và có thể chia sẻ với đồng nghiệp ở bất kỳ đâu với bất kỳ thiết bị nào có internet</p>
							</div>
							<div class="avr-box col-xs-4">
								<div class="avr-img">
									<img src="image/avt.JPG" height="100%">
								</div>
								<h3>Lee Jun Hoong<br>Chủ tịch tập đoàn Giao Diện Fshare</h3>
								<p>Đôi lúc, tôi hay quên USB chứa dữ liệu quan trọng ở nhà. Nhờ có Fshare giúp tôi dễ dàng lưu trữ dữ liệu và có thể chia sẻ với đồng nghiệp ở bất kỳ đâu với bất kỳ thiết bị nào có internet</p>
							</div>
							<div class="avr-box col-xs-4">
								<div class="avr-img">
									<img src="image/avt.JPG" height="100%">
								</div>
								<h3>Lee Jun Hoong<br>Chủ tịch tập đoàn Giao Diện Fshare</h3>
								<p>Đôi lúc, tôi hay quên USB chứa dữ liệu quan trọng ở nhà. Nhờ có Fshare giúp tôi dễ dàng lưu trữ dữ liệu và có thể chia sẻ với đồng nghiệp ở bất kỳ đâu với bất kỳ thiết bị nào có internet</p>
							</div>
						</div>
					</div>
					<div class="col-xs-8 col-xs-offset-2 text-center avr-button">
						<label for="avr-1" class="avr-btn-label">
							<input type="radio" value="radio-one" name="avr" id="avr-1"> <span></span>
						</label>
						<label for="avr-2" class="avr-btn-label">
							<input type="radio" value="radio-two" name="avr" id="avr-2" checked> <span></span>
						</label>
						<label for="avr-3" class="avr-btn-label">
							<input type="radio" value="radio-three" name="avr" id="avr-3"> <span></span>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="height: 1000px; width: 100%"></div>
</body>
</html>