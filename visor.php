<!DOCTYPE html>
<html>
<head>
	<title>visor</title>
	<style>
		.cuadro{
			position: absolute;
			background: red;
			width: 40px;
			height: 30px;
			left: 100px;
			top:100px;
		}
		.esco{
			display: none;
		}
	</style>
</head>
<body>
	<h1>estoy en visor</h1>
	<?php
		$x=$_POST['cox'];
		$y=$_POST['coy'];
	?>
	<form class="esco">
		<input type='text' name='x' value="<?php echo $x ?>" id="jx">
		<input type='text' name='y' value="<?php echo $y ?>" id="jy">
	</form>
	<div class="cuadro" id="cuadro1"></div>

	<script>
		xx=document.getElementById("jx").value;
		console.log(xx);
		yy=document.getElementById("jy").value;
		console.log(yy);
		cuadro1.style.left=xx+"px";
        cuadro1.style.top=yy+"px";
	</script>

</body>
</html>