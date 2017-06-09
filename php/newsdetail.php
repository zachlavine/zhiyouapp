<?php
    header('Content-Type:text/html;charset=utf-8');
    $conn = mysql_connect('localhost', 'root', '');
    mysql_query('SET NAMES "utf8"');
    mysql_select_db('zhiyou',$conn);
    // 获取前端传入的数值，此处的username与pass是页面的input标签中的name属性的属性值
    $num = $_GET["num"];
    // 数据库查询操作
    $query = mysql_query("SELECT * FROM  `indexnews` WHERE  order = '$num'");
    $result = mysql_fetch_array($query);
    if($result) {
      echo 22;
    } else {
      echo "error";
    }
?>
