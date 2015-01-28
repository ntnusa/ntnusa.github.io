
		<link type="text/css" media="screen" rel="stylesheet" href="css/rwd_nav_bar.css"/>  <!-- rwd_nav_bar 樣式表 --> <!DOCTYPE html>
<html>
	<head>

		<!--META TAGs-->
		<meta name="Description" CONTENT=""> <!-- 描述 -->
		<meta name="KeyWords" content="師大學生會,NTNUSA">  <!-- 關鍵字, 協助SEO -->
		<meta name="Author" CONTENT="學生會資訊部">  <!-- 作者 -->
		<meta name="Generator" CONTENT="Notepad++">	 <!-- 生產的工具 -->
		<meta http-equiv="Pragma" CONTENT="no_cache">  <!-- Cache -->
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />  <!-- 網站文字編碼 -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">   <!-- RWD -->
		<link rev="made" href="https://www.facebook.com/NTNUstudentA"> <!-- 製作團隊 -->
		<!--META TAGs-->

		<title>師大學生會．NTNUSA</title>

		<!-- bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">

		<link href="IMG/favicon.ico" type="image/x-icon" rel="shortcut icon">   <!-- title 前的圖片 -->
		<link href="css/style.css" type="text/css" media="screen" rel="stylesheet"/>
		<link href="css/nav_bar.css" type="text/css" media="screen" rel="stylesheet"/>
		<link type="text/css" media="screen" rel="stylesheet" href="css/rwd_nav_bar.css"/>  <!-- rwd_nav_bar 樣式表 -->

		<!-- nav_bar 的javascript 相關程式碼  -->
		<script src='javascript/jquery.min.js'></script>
		<script type="text/javascript" src="javascript/nav_bar.js"></script>
		<script type="text/javascript" src="javascript/nav_bar_function.js"></script>

	</head>
	<style>
@media only screen and (max-width: 720px) {
	.BBODY{
		height:auto;
	}
	.content{
		height:auto;
	}
	.boxes{
		height:auto;
		margin-bottom:15px;
	}
	.box{
		width:100%;
		background:rgba(255,255,255,0.5);
		display:inline-block;
		border-radius:15%;
		transition-duration: 0.5s;
	}
	.box h3{
		text-align:center;
	}
	.box img{
		height:auto;
		margin:5px;
		border-radius:45px;
	}
	.pic1 img,.pic2 img{width:33%;}
	.pic3 img{width:28%;}
}
@media only screen and (min-width: 720px) {
.BBODY{
	height:800px;
}
.content{
	height:740px;
	padding:30px;
}
.boxes{
	height:680px;
	padding:30px;
}
.boxes a:hover .box{
	background:rgba(255,255,255,0.9);
	box-shadow:0px 0px 15px -5px gray;
}
.box{
	background:rgba(255,255,255,0.5);
	display:inline-block;
	padding:15px;
	margin:15px;
	border-radius:15px;
	transition-duration: 0.5s;
}
.box h3{
	text-align:center;
}
.box img{
	height:90px;
	width:90px;
	margin:5px;
	border-radius:45px;
}

}
	</style>
	<body>
	<center>
		<?php include'html/header.html' ?>
		<div class="BBODY">
			<div class="content">
				<div class="boxes">
					<a href="president.php">
						<div class="box pic3">
							<h3>部長．副部長</h3>
							<img src="IMG/people/pre.jpg" /><img src="IMG/people/vpre1.jpg" /><img src="IMG/people/vpre2.png" />
						</div>
					</a>
					<a href="secretariat.php">
						<div class="box pic1">
							<h3>秘書處</h3>
							<img src="IMG/people/src.jpg">
						</div>
					</a>
					<a href="public.php">
						<div class="box pic2">
							<h3>公關部</h3>
							<img src="IMG/people/pr_pre.jpg" /><img src="IMG/people/pr_vpre.jpg" />
						</div>
					</a>
					<a href="activity.php">
						<div class="box pic2">
							<h3>活動部</h3>
							<img src="IMG/people/act_pre.jpg"><img src="IMG/people/act_vpre.jpg">
						</div>
					</a>
					<a href="right.php">
						<div class="box pic2">
							<h3>權益部</h3>
							<img src="IMG/people/equ_pre.jpg" /><img src="IMG/people/equ_vpre.jpg" />
						</div>
					</a>
					<a href="newsdp.php">
						<div class="box pic2">
							<h3>新聞部</h3>
							<img src="IMG/people/news_pre.jpg" /><img src="IMG/people/news_vpre.jpg" />
						</div>
					</a>
					<a href="academic.php">
						<div class="box pic2">
							<h3>學術部</h3>
							<img src="IMG/people/acdmy_pre.jpg" /><img src="IMG/people/acdmy_vpre.jpg" />
						</div>
					</a>
					<a href="finance.php">
						<div class="box pic1">
							<h3>財務部</h3>
							<img src="IMG/people/fin.jpg" />
						</div>
					</a>
					<a href="publication.php">
						<div class="box pic2">
							<h3>文宣部</h3>
							<img src="IMG/people/art_pre.jpg" /><img src="IMG/people/art_vpre.jpg" />
						</div>
					</a>
					<a href="info.php">
						<div class="box pic2">
							<h3>資訊部</h3>
							<img src="IMG/people/info_pre.jpg" /><img src="IMG/people/info_vpre.jpg" />
						</div>
					</a>
				</div>
			</div>
		</div>
		<?php include 'html/footer.html'; ?>


	</center>
	</body>
</html>
