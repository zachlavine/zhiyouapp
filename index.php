<!DOCTYPE html>
<html lang="zh">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<title>知友首页</title>
		<script type="text/javascript" src="js/zepto.min.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
		<script type="text/javascript" src="js/touch-0.2.14.min.js"></script>
		<script type="text/javascript" src="js/event.js"></script>
		<script type="text/javascript" src="js/fx.js"></script>
		<script type="text/javascript" src="js/fx_methods.js"></script>
		<script type="text/javascript" src="js/iscroll.js"></script>
		<style type="text/css">
			@media screen and (min-height: 480px) and (max-height: 568px) {
				.show .show-left {
					width: 10.47%;
				}
			}
		</style>
	</head>
	<body>
	
		<div id="headerinfo">
			<header class="home-header">
				<a href="index.php" class="header-select">知读</a>
				<a href="cn/yue1.html" class="subscribe">订阅</a>
				<em></em>
				<a href="cn/search.html" class="search"></a>
			</header>
			<!-- 导航 -->
			<nav class="home-nav ">
				<!-- 导航列表 -->
				<div class="list clearfix">
					<span  class="list-select">栏目</span>
					<span >推荐</span>
					<span >本地.</span>
					<span >订阅</span>
					<span >最新</span>
				</div>
				<!-- 内容项 -->
					<?php
		$conn = mysql_connect("localhost", "root", "");
		mysql_query("set names 'utf8'");
		mysql_select_db("zhiyou",$conn);
		$query = mysql_query("SELECT  `url` ,  `tit` ,  `order` FROM  `indexnews`  ");
		 while($result = mysql_fetch_array($query)) {
		?>
				<a class="bigpic">
					<!--tab切换，点击内容切换。只需要一个div-->
					<img src=<?php echo $result['url'] ?> alt="" />
					<span><?php echo $result['tit'] ?> </span>
				</a>
		<?php 
			};
		?>		
				
				
			</nav>
		</div>
		<main id="wrapper" class="home-main ">
			<div id="scroller">
				<div id="pullDown">
					<!-- 刷新提示，或者顯示有幾條更新-->
					<span class="pullDownLabel "></span>
				</div>
				<!-- 正文 -->
				<ul id="thelist">
					<li class="show clearfix">
						<div class="show-left">
							<span class="heart">
								<img src="images/Heart.png" alt="点赞"/>
							</span>
							<strong>2591</strong>
							<a href="###" class="comment">
								<img src="images/comment.png" alt="评论" />
							</a>
							<em>1.5万</em>
						</div>
						<!-- 图文详情 -->
						<a class="show-right">
							<h2>广艺校花林间狂秀一字马 展现柔美身段</h2>
							<img src="images/xiaohua.png"  alt="" />
							<img src="images/xiaohua.png" alt="" />
							<img src="images/xiaohua.png" alt="" />
						</a>
					</li>
				</ul>
			</div>
		</main>
		
		<nav class="bottom-nav">
			<a class="read" href="index.php">
				<img src="images/function.png" alt="" />
				<span>知读</span>
			</a>
			<a href="./cn/original.php" class="original">
				<img src="images/original.png" alt="" />
				<span>原创</span>
			</a>
			<a href="" class="write">
				<img src="images/sends.png" alt="" />
			</a>
			<a href="./cn/news.html" class="find">
				<img src="images/find.png" alt="" />
				<span>发现</span>
			</a>
			<a href="./cn/circle.html" class="user">
				<img src=" images/user.png" alt="" />
				<span>我的</span>
			</a>
		</nav>
		
	<script type="text/javascript">
			var myScroll,
				pullDownEl, pullDownOffset,
				generatedCount = 0;

			/**
			 * 下拉刷新 （自定义实现此方法）
			 * myScroll.refresh();		// 数据加载完成后，调用界面更新方法
			 */
			function pullDownAction() {
				setTimeout(function() { // <-- Simulate network congestion, remove setTimeout from production!
					var el, li, i;
					el = document.getElementById('thelist');
					for(i = 0; i < 3; i++) {
						li = document.createElement('li');
						li.setAttribute("class","show clearfix");
						li.innerHTML = '<div class="show-left"><span class="heart"><img src=images/Heart.png alt="点赞"></span><strong>2591</strong><a href="###" class=comment><img src=images/comment.png alt="评论"></a><em>1.5万</em></div><a class=show-right><h2>广艺校花林间狂秀一字马 展现柔美身段</h2><img src=images/xiaohua.png><img src=images/xiaohua.png><img src=images/xiaohua.png></a>' ;
//						li.innerHTML = '<img src = '+ $url +'>'
						el.insertBefore(li, el.childNodes[0]);
					}

					myScroll.refresh(); //数据加载完成后，调用界面更新方法   Remember to refresh when contents are loaded (ie: on ajax completion)
				}, 1000); // <-- Simulate network congestion, remove setTimeout from production!
			}

			/**
			 * 初始化iScroll控件
			 */
			function loaded() {
				pullDownEl = document.getElementById('pullDown');
				// pullDownOffset = pullDownEl.offsetHeight;

				myScroll = new iScroll('wrapper', {
					scrollbarClass: 'myScrollbar',
					/* 重要样式 */
					useTransition: false,
					/* 此属性不知用意，本人从true改为false */
					topOffset: pullDownOffset,
					onRefresh: function() {
						if(pullDownEl.className.match('loading')) {
							pullDownEl.className = '';
							pullDownEl.querySelector('.pullDownLabel').innerHTML = '本栏目有3条数据更新';
							setTimeout(function() {
								pullDownEl.querySelector('.pullDownLabel').style.visibility = "hidden"
							},2000);
						}
					},
					onScrollMove: function() {
						if(this.y > 5 && !pullDownEl.className.match('flip')) {
							pullDownEl.className = 'flip';
							pullDownEl.querySelector('.pullDownLabel').innerHTML = '松手开始更新...';
							
							this.minScrollY = 0;
							console.log(1);
						} else if(this.y < 5 && pullDownEl.className.match('flip')) {
							pullDownEl.className = '';
							pullDownEl.querySelector('.pullDownLabel').innerHTML = '下拉刷新...';
							this.minScrollY = -pullDownOffset;
							console.log(2);
						}
						pullDownEl.querySelector('.pullDownLabel').style.visibility = "visible"
					},
					onScrollEnd: function() {
						if(pullDownEl.className.match('flip')) {
							pullDownEl.className = 'loading';
							pullDownEl.querySelector('.pullDownLabel').innerHTML = '加载中...';
							pullDownAction(); // Execute custom function (ajax call?)
						}
					}
				});

				setTimeout(function() {
					document.getElementById('wrapper').style.left = '0';
				}, 800);
			}

			//初始化绑定iScroll控件 
			document.addEventListener('touchmove', function(e) {
				e.preventDefault();
			}, false);
			document.addEventListener('DOMContentLoaded', loaded, false);
		</script>
		
		<script type="text/javascript">
			
		//头部新闻栏，点击切换新闻项
			$(".bigpic").eq(0).css({
				display: "block"
			})
			$(".list span").on("tap", function() {
				$(this).addClass("list-select").siblings("span").removeClass("list-select");
				$(".bigpic").eq($(this).index()).css({
					"display": "block"
				}).siblings(".bigpic").css({
					"display": "none"
				})
			})	
			// 点赞，红心
		$("#thelist").on("tap","span", function() {
			if($(this).children("img").attr("src") == "images/Heart-select.png") {
				return;
			}
			$(this).children("img").attr("src","images/Heart-select.png");
			$(this).siblings("strong").html(parseInt($(this).siblings("strong").html()) + 1);
		})
		
		 
		</script>
	</body>

</html>