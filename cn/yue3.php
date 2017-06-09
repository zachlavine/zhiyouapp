<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>订阅</title>
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
	/*	.home-header em {
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
		section h1 {
			float: left;
			width: 28rem;
			font-size: 1.5rem;
			margin: 0 0 0 1.5rem;
			color: #515151;
			border-bottom: 1px solid #8f8f8f;
		}
		.back {
			padding-top: 0.39rem;
		}
		.back a:nth-child(2) {
			position: absolute;
			display: block;
			width: 3.5rem;
			height: 2.5rem;
			left: 84%;
			top: 7%;
			font-size: 1.3rem;
			line-height: 2.5rem;
			text-align: center;
			border-radius: 15%;
			color: white;
			background-color: #75c2fd;
		}
		.cook {
			padding: 1rem 0 0 0;
		}
		.cook a {
		    float: right;
		    display: block;
		    width: 3.5rem;
		    height: 2.5rem;
		    margin: 0.7rem 1rem 0 0;
		    font-size: 1.3rem;
		    line-height: 2.5rem;
		    text-align: center;
		    border-radius: 15%;
		    color: #5b5b5b;
		    background-color: #75c2fd;
		}
		.cook input {
			display: block;
			width: 7.54rem;
			height: 2.5rem;
			margin: 0 auto;
            outline: none;
			font-size: 1.3rem;
			margin-top: 0.82rem;
			margin-bottom: 1.5rem;
			line-height: 2.5rem;
			text-align: center;
			background: white;
			border-radius: 11%;
			border: 1px solid #a9a9a9;
		}
		.cook img {
			width: 20rem;
			height: 11rem;
			margin: 1.57rem 0 0 7rem;
			-webkit-box-shadow: 0 1px 1px 1.5px #898888;
			-moz-box-shadow: 0 1px 1px 1.5px #898888;
			-ms-box-shadow: 0 1px 1px 1.5px #898888
			box-shadow: 0 1px 1px 1.5px #898888;
		}
		.cook h2 {
			font-size: 1.5rem;
			margin-top: 1.61rem;
			text-align: center;
			color: #6c6b6b;
		}
		@media screen and (max-height: 627px) {
			section h1 {
			    float: left;
			    width: 25rem;
			    font-size: 1.5rem;
			    margin: 0 0 0 1.5rem;
			    color: #515151;
			    border-bottom: 1px solid #8f8f8f;
			}

		}
		@media screen and (max-height: 568px) {
			section h1 {
				float: left;
				width: 21rem;
				font-size: 1.5rem;
				color: #515151;
				border-bottom: 1px solid #8f8f8f;
			}
			.cook a {
			    display: block;
			    width: 3rem;
			    height: 2rem;
			    font-size: 1.3rem;
			    line-height: 2rem;
			    text-align: center;
			    border-radius: 15%;
			    color: #515151;
			    background-color: #75c2fd;
			}
			.cook img {
				width: 19rem;
				height: 10rem;
				margin: 1.57rem 0 0 4rem;
				-webkit-box-shadow: 0 1px 1px 1.5px #898888;
				-moz-box-shadow: 0 1px 1px 1.5px #898888;
				-ms-box-shadow: 0 1px 1px 1.5px #898888
				box-shadow: 0 1px 1px 1.5px #898888;
			}
		}
		@media screen and (max-height: 480px) {
			.cook a {
			    display: block;
			    width: 3rem;
			    height: 2rem;
			    font-size: 1.3rem;
			    line-height: 2rem;
			    text-align: center;
			    border-radius: 15%;
			    color: #515151;
			    background-color: #75c2fd;
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
			mysql_select_db("student", $conn);

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
		<!-- 订阅部分 -->
			<div class="cook">
				<?php
				// 执行SQL语句
					$query = mysql_query("SELECT * FROM teacher");
					while ($result = mysql_fetch_array($query)) {
				?>
				<h1><?php echo $result['name'] ?></h1>
				<a href="yue1.html"><?php echo $result['username'] ?></a>
				<img src="<?php echo $result['pic'] ?>" title="">
				<h2><?php echo $result['con'] ?></h2>
				<input type="button" value="订阅" />
				<?php 
					}
				?>
			</div>
		</section>
	</div>
	
</body>
</html>