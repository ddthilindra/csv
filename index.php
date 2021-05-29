<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include 'config.php';
		include 'function.php';
		$f1=new xcel();

		if(isset($_POST['btnUpload'])){
			$f1->import($_FILES['myFile']['tmp_name']);

		}
		
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<h3>
			Upload your file
		</h3><hr/>
		
		
				<input type="file" name="myFile">
				<input type="submit" name="btnUpload" value="Import">
			
	</form>



</body>
</html>
