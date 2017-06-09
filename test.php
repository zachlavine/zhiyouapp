
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
</head>
<body>
	<?php
		$conn = mysql_connect("localhost", "root", "");
		mysql_query("set names 'utf8'");
		mysql_select_db("zhiyou",$conn);
		$query = mysql_query("SELECT * FROM  `indexnews` ");
		 while($result = mysql_fetch_array($query)) {
		?>
				
    			<?php echo $result['url'] ?>
				<?php 
					};
				 ?>
</body>
</html>