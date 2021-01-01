<!DOCTYPE html>
<html>
<head>
	<title>Error 404 : <?php echo $_GET['page']; ?></title>
</head>
<body>
<style>
	body{
		background: gray;
	}
	.error{
		border: 1px solid red;
		color: white;
		margin:3%;
	}
	.error h5{
		margin: 1%;
	}
</style>
<div class="error">
	<h5>Error file of <?=$_GET['page']?> <?php $_GET = null ; ?> Not Found</h5>
</div>
</body>
</html>
