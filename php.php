<?php

$fn = "content.txt";
if (isset($_POST['content'])){
	$content = stripslashes($_POST['content']." "."\n");
	$fp = fopen($fn, "a+") or die ("Error opening file in write model!");
	fputs($fp, $content);
	fclose($fp) or die ("Error closing file!");
}
?>
<html>
<meta charset: "UTF-8">
<head>
<title>MedHelper</title>
<style>
		body{ 
		background: url("mh.jpg") no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		}	
		#menu {
            height: 700px;
            font-size: 18px;
            font-family: Tahoma, Geneva, sans-serif;
            font-weight: bold;
            text-align: center;
            border-radius: 75px;
			padding-top: 20px;

        }
		 .container {
		 	width: 100%;
			height: 90px;
			margin: 0;
			background-color: rgba(255,255,255,0.5);
		}

</style>
</head>
<body>
<div id="menu" class="container">
<h1 style="text-align : center"> MedHelper </h1>
<hr>
<h3><b>Pleas insert date and time using the format below:
<br>dd/mm(column1)hh:mm(12h format)(column2)
</b></h3>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
	<textarea rows="10" cols="25" name="content" style="text-align : center" ></textarea>
	<textarea rows="10" cols="25" name="content" style="text-align : center" ></textarea>
	<input type="submit" value="submit">
</form>
</div>

</body>
</html>