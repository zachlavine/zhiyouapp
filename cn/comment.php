<?php
    header("Content-Type:text/html;charset=utf-8");
    $conn = mysql_connect("localhost","root","");
    mysql_query('SET NAMES "utf8"');
    mysql_select_db("zhiyou");
    $comment = $_GET["result1"];
    $query = mysql_query("INSERT INTO news
    SET  `comments` ='$comment'");
     if($query) {
        echo "news.html";
    } else {
        echo "error";
    }
?>