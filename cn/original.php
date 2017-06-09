<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>原创</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="../css/original.css"/>
	<link rel="stylesheet" type="text/css" href="../css/common.css"/>
	<script type="text/javascript" src="../js/zepto.min.js"></script>
	<script type="text/javascript" src="../js/event.js"></script>
	<script type="text/javascript" src="../js/fx.js"></script>
	<script type="text/javascript" src="../js/fx_methods.js"></script>
	<script type="text/javascript" src="../js/selector.js"></script>
	<script type="text/javascript" src="../js/touch-0.2.14.min.js"></script>
	<script type="text/javascript" src="../js/common.js"></script>
	<script type="text/javascript" src="../js/iscroll.js"></script>
	<style type="text/css">

	</style>
</head>
<body>
	<div class="wrap" id="wrapper">
		<div id="scroller">
			<div id="thelist">
			 	<a href="news-detail.html">
			 		<img src="../images/original-main.png"/>
			 		<em>NEW</em>
			 		<div class="heart">
			 			<strong></strong>
						<span>1258</span>
			 		</div>
			 		<h2>中秋节礼单</h2>
			 		<span>月圆人团圆 有礼更有信心</span>
			 	</a>
			</div>
		 	<div id="pullUp">
				<span class="pullUpIcon"></span><span class="pullUpLabel"></span>
			</div>
		</div>
		<nav class="bottom-nav">
			<a class="read" href="../index.php">
				<img src="../images/function.png" alt="" />
				<span>知读</span>
			</a>
			<a href="original.php" class="original">
				<img src="../images/original.png" alt="" />
				<span>原创</span>
			</a>
			<a href="" class="write">
				<img src="../images/sends.png" alt="" />
			</a>
			<a href="news.html" class="find">
				<img src="../images/find.png" alt="" />
				<span>发现</span>
			</a>
			<a href="circle.html" class="user">
				<img src=" ../images/user.png" alt="" />
				<span>我的</span>
			</a>
		</nav>
	</div>
	<script type="text/javascript">

var myScroll, pullUpEl, pullUpOffset,generatedCount = 0;
/**
 * 滚动翻页 （自定义实现此方法）
 * myScroll.refresh();		// 数据加载完成后，调用界面更新方法
 */
function pullUpAction () {
	setTimeout(function () {	// <-- Simulate network congestion, remove setTimeout from production!
		var el, a, i;
		el = document.getElementById('thelist');

		for (i=0; i < 3; i++) {
			a = document.createElement('a');
			a.innerHTML = '<img src=../images/original-main.png><em>NEW</em><div class=heart><strong></strong><span>1258</span></div><h2>中秋节礼单</h2><span>月圆人团圆 有礼更有信心</span>';
			a.setAttribute("href","news-detail.html")
			el.appendChild(a, el.childNodes[0]);
		}
		myScroll.refresh();		// 数据加载完成后，调用界面更新方法 Remember to refresh when contents are loaded (ie: on ajax completion)
	}, 1000);	// <-- Simulate network congestion, remove setTimeout from production!
}

/**
 * 初始化iScroll控件
 */
function loaded() {
	pullUpEl = document.getElementById('pullUp');	
	myScroll = new iScroll('wrapper', {
		scrollbarClass: 'myScrollbar', /* 重要样式 */
		useTransition: false, /* 此属性不知用意，本人从true改为false */
		
		onRefresh: function () {
			 if (pullUpEl.className.match('loading')) {
				pullUpEl.className = '';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = '上拉加载更多...';
			}
		},
		onScrollMove: function () {
			
		if (this.y < (0) && !pullUpEl.className.match('flip')) {
				pullUpEl.className = 'flip';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = '松手开始更新...';
				this.maxScrollY = this.maxScrollY;
				console.log(this.maxScrollY);
			} else if (this.y > (this.maxScrollY + 5) && pullUpEl.className.match('flip')) {
				pullUpEl.className = '';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = '上拉加载更多...';
				this.maxScrollY = pullUpOffset;
				console.log(4);
			}
		},
		onScrollEnd: function () {
			if (pullUpEl.className.match('flip')) {
				pullUpEl.className = 'loading';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = '加载中...';				
				pullUpAction();	// Execute custom function (ajax call?)
			}
		}
	});
	
	setTimeout(function () { document.getElementById('wrapper').style.left = '0'; }, 800);
}
//初始化绑定iScroll控件 
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
document.addEventListener('DOMContentLoaded', loaded, false); 

</script>
</body>
</html>