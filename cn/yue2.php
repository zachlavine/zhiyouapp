<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<link rel="stylesheet" href="../css/reset.css">
	<script type="text/javascript" src="../js/zepto.min.js"></script>
	<script type="text/javascript" src="../js/common1.js"></script>
	<style>
		.wrap {
			width: 100%;
		}
		.home-header {
				position: relative;
				width: 100%;
				height: 2.91rem;
				text-align: center;
				box-shadow: 0 1px 0 0 #dbdbdb;
			}
			
			.home-header a:nth-child(1) {
				display: block;
				float: left;
				margin-left: 13.88%;
				width: 36.11%;
				height: 100%;
				font-size: 1.75rem;
				color: #3a3a3a;
				line-height: 2.91rem;
				box-shadow: 1px 0 #858383;
			}
			
			.home-header a:nth-child(2) {
				display: block;
				float: right;
				line-height: 2.91rem;
				margin-right: 13.88%;
				width: 36.11%;
				height: 100%;
				font-size: 1.75rem;
				color: #138bf0;
			}
		.home-header em {
				position: absolute;
				bottom: 0;
				left: 58.22%;
				height: 0.14rem;
				width: 19.58%;
				background: #5fb5fd;
			}
		.body.home-header .header-select {
			color: #138bf0;
		}
		/*.home-header em {
			position: absolute;
			bottom: 0;
			left: 22.22%;
			height: 0.14rem;
			width: 19.58%;
			background: #5fb5fd;
		}*/

		.home-header .search {
			display: block;
			position: absolute;
			right: 4.02%;
			top: 0.53rem;
			width: 5.55%;
			height: 1.39rem;
			background: url(../images/search.png) center no-repeat;
			background-size: 100% 100%;
		}
		section {
			width: 100%;
			height: 65rem;
			background: #f4f2f2;
		}
		.back {
			float: left;
			height: 3rem;
			padding-top: 1rem;
		}
		.back h1 {
			float: left;
			width: 28rem;
			font-size: 1.5rem;
			margin: 0 0 0 1.2rem;
			color: #515151;
			border-bottom: 1px solid #8f8f8f;
		}
		.back a:nth-child(2) {
			float: right;
			display: block;
			width: 3.5rem;
			height: 2.5rem;
			margin: 0.5rem 1.5rem 0 0;
			font-size: 1.3rem;
			line-height: 2.5rem;
			text-align: center;
			border-radius: 15%;
			color: white;
			background-color: #75c2fd;
		}
		.come {
			float: left;
			width: 34.64rem;
			height: 11.5rem;
			margin-top: 0.5rem;
		}
		.come a {
			position: relative;
			display: block;
			float: left;
			left: 8%;
			width: 9rem;
			height: 11rem;
			margin-right: 0.5rem;
		}
		/*.come a:nth-child(11) {
			position: relative;
			display: block;
			float: left;
			width: 9rem;
			left: 8%;
			height: 11rem;
			margin-right: 0.5rem;
		}*/
		.come img {
			width: 9rem;
			height: 11rem;
		}
		.come h2 {
		    position: absolute;
		    width: 1.4rem;
		    left: 9%;
		    font-size: 1.4rem;
		    margin: 1.4rem 0 0 3.18rem;
		    z-index: 2;
		    color: white;
		}
		.come h3 {
			position: absolute;
			width: 1.4rem;
			font-size: 1.4rem;
			left: 48%;
			top: 14.5%;
			z-index: 2;
			color: white;
		}
		.come h4 {
			position: absolute;
			width: 1.4rem;
			font-size: 1.4rem;
			left: 45%;
			top: 14.5%;
			z-index: 2;
			color: white;
		}
		.come span:nth-child(3) {
			position: absolute;
			font-size: 1.5rem;
			font-weight: bold;
			display: block;
			left: 80%;
			top: 1%;
			color: white;
			z-index: 999;
		}
		@media screen and (max-height: 627px) {
			.back h1 {
				float: left;
				width: 25rem;
				font-size: 1.5rem;
				margin: 0 0 0 1.2rem;
				color: #515151;
				border-bottom: 1px solid #8f8f8f;
			}
			.back a:nth-child(2) {
			    float: right;
			    display: block;
			    width: 3rem;
			    height: 2rem;
			    margin: 0.5rem 0 0 0;
			    font-size: 1.2rem;
			    line-height: 2rem;
			    text-align: center;
			    border-radius: 15%;
			    color: white;
			    background-color: #75c2fd;
			}
			.come {
				float: left;
				width: 34.64rem;
				height: 11rem;
				margin-top: 0.5rem;
			}
			.come a {
				position: relative;
				display: block;
				float: left;
				width: 9rem;
				left: 4%;
				height: 11rem;
				margin-right: 0.5rem;
			}
			.come img {
				width: 9rem;
				height: 11rem;
			}
			.come h2 {
				position: absolute; 
				width: 1.6rem;
				left: 11%;
				top: 8%;
				font-size: 1.5rem;
				margin: 1.4rem 0 0 3.18rem; 
				z-index: 2;
				color: white;
			}
			.come h3 {
				position: absolute;
				width: 1.6rem;
				font-size: 1.5rem;
				left: 48%;
				top: 19%;
				z-index: 2;
				color: white;
			}
			.come h4 {
				position: absolute;
				width: 1.6rem;
				font-size: 1.5rem;
				left: 46%;
				top: 18%;
				z-index: 2;
				color: white;
			}
			.come span:nth-child(3) {
				position: absolute;
				font-size: 1.5rem;
				font-weight: bold;
				left: 84%;
				top: 1%;
				color: white;
			}
		}
		@media screen and (max-height: 568px) {
			.back h1 {
				float: left;
				width: 22rem;
				font-size: 1.5rem;
				margin: 0 0 0 1.2rem;
				color: #515151;
				border-bottom: 1px solid #8f8f8f;
			}
			.back a:nth-child(2) {
			    float: right;
			    display: block;
			    width: 3rem;
			    height: 2rem;
			    margin: 0.5rem 0 0 0;
			    font-size: 1.3rem;
			    line-height: 2rem;
			    text-align: center;
			    border-radius: 15%;
			    color: white;
			    background-color: #75c2fd;
			}
			.come {
				float: left;
				width: 34.64rem;
				height: 10rem;
				margin-top: 0.5rem;
			}
			.come a {
				position: relative;
				display: block;
				float: left;
				width: 8rem;
				left: 3%;
				height: 10rem;
				margin-right: 0.5rem;
			}
			.come img {
				width: 8rem;
				height: 10rem;
			}
			.come h2 {
				position: absolute;
				width: 1.6rem;
				left: 6%;	
				top: 6%;
				font-size: 1.5rem;
				margin: 1.4rem 0 0 3.18rem; 
				z-index: 2;
				color: white;
			}
			.come h3 {
				position: absolute;
				width: 1.6rem;
				font-size: 1.5rem;
				left: 48%;
				top: 19%;
				z-index: 2;
				color: white;
			}
			.come h4 {
				position: absolute;
				width: 1.6rem;
				font-size: 1.5rem;
				left: 46%;
				top: 18%;
				z-index: 2;
				color: white;
			}
			.come span:nth-child(3) {
				position: absolute;
				font-size: 1.5rem;
				font-weight: bold;
				left: 84%;
				top: 1%;
				color: white;
			}
		}
		@media screen and (max-height: 480px) {
			.back h1 {
				float: left;
				width: 22rem;
				font-size: 1.5rem;
				margin: 0 0 0 1.2rem;
				color: #515151;
				border-bottom: 1px solid #8f8f8f;
			}
			.back a:nth-child(2) {
			    float: right;
			    display: block;
			    width: 3rem;
			    height: 2rem;
			    margin: 0.5rem 0 0 0;
			    font-size: 1.3rem;
			    line-height: 2rem;
			    text-align: center;
			    border-radius: 15%;
			    color: white;
			    background-color: #75c2fd;
			}
			.come {
				float: left;
				width: 34.64rem;
				height: 10rem;
				margin-top: 0.5rem;
			}
			.come a {
				position: relative;
				display: block;
				float: left;
				width: 8rem;
				left: 3%;
				height: 10rem;
				margin-right: 0.5rem;
			}
			.come img {
				width: 8rem;
				height: 10rem;
			}
			.come h2 {
				position: absolute;
				width: 1.6rem;
				left: 6%;	
				top: 6%;
				font-size: 1.5rem;
				margin: 1.4rem 0 0 3.18rem; 
				z-index: 2;
				color: white;
			}
			.come h3 {
				position: absolute;
				width: 1.6rem;
				font-size: 1.5rem;
				left: 48%;
				top: 19%;
				z-index: 2;
				color: white;
			}
			.come h4 {
				position: absolute;
				width: 1.6rem;
				font-size: 1.5rem;
				left: 46%;
				top: 18%;
				z-index: 2;
				color: white;
			}
			.come span:nth-child(3) {
				position: absolute;
				font-size: 1.5rem;
				font-weight: bold;
				left: 84%;
				top: 1%;
				color: white;
				z-index: 999;
			}
		}
	</style>
</head>
<body>
	<?php
		// 定义数据库的基本信息
		define("PATH", $_SERVER["DOCUMENT_ROOT"]); //定义文件路径
		define("MYSQL_HOST", "localhost"); //主机 
		define("MYSQL_USER", "root"); //用户名
		define("MYSQL_PASSWORD", ""); //密码
		// 连接数据库
		$conn = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
		// $conn = mysql_connect("localhost", "root", "");
		// 选择数据库
		// 设定基本的编码
			mysql_query("set names 'utf8'");
			// 选择数据库
			mysql_select_db("zhiyou", $conn);

	?>
	<div class="wrap">
		<!-- 头部 -->
		<header class="home-header">
			<a href="../index.php" class="header-select">知读</a>
			<a href="yue1.html" class="subscribe">订阅</a>
			 <em></em> 
			<a href="search.html" class="search"></a>
		</header>
		<!-- 中间内容区 -->
		<section>
		<!-- 频道部分 -->
			<?php
				// 执行SQL语句
				$query = mysql_query("SELECT * FROM water");
				while ($result = mysql_fetch_array($query)) {
			?>
			<div class="back">
				<h1><?php echo $result['hoe'] ?></h1>
				<a href="yue1.html"><?php echo $result['abiao'] ?></a>
			</div>
				<div class="come">
					<a href="javascript:void(0)" id="con">
						<h2><?php echo $result['name'] ?></h2>
						<img src="<?php echo $result['pic'] ?>" alt="" id="abc">
						<span id="btn"><?php echo $result['cuo'] ?></span>
					</a>
					<a href="javascript:void(0)">
						<h3><?php echo $result['namea'] ?></h3>
						<img src="<?php echo $result['pictwo'] ?>" alt="">
						<span ><?php echo $result['cuo'] ?></span>
					</a>
					<a href="javascript:void(0)">
						<h4><?php echo $result['namet'] ?></h4>
						<img src="<?php echo $result['pictree'] ?>" alt="">
						<span><?php echo $result['cuo'] ?></span>
					</a>
				</div>
			<?php 
				}
			?>
		</section>
	</div>
	<script type="text/javascript">
		// $(".come span").click(function () {
		// 	$(this).parent("a").css({
		// 		"display" : "none"
		// 	})	
		// })

		$(".come span").click(function () {
			$(this).parent("a").remove("a");
		})
	</script>
</body>
</html>