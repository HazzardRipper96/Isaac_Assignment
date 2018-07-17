<?php
	include("header.php");
?>

<html>
	<head></head>
	<body>
	<?php
		if (isset ($_POST['upload'])){

			//get sybmited data from form
			$image=$_FILES['image']['name'];
			$text=$_POST['text'];

			$db = mysqli_connect('localhost', 'root','','safety_equip');

			//path to store image
			$target='img/'.basename($_FILES['image']['name']);

			$query = "INSERT INTO images(image, text) VALUES ('$image', '$text')";
			mysqli_query($db, $query);

			if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
				echo "<script>alert(\"Image uploaded successfully!\");</script>";
			}else{
				echo "<script>alert(\"Fail to upload image.\");</script>";
			}

			mysqli_close($db);
		}
	?>
	<div class="w3-row custom-padding">
	<form method="post" enctype="multipart/form-data">
		<p>SELECT IMAGE: <input type="file" name="image"/></p>
		<p>ENTER DESCRIPTION: <textarea name="text" cols="40" rows="4" placeholder="Say something"></textarea>
		<input type="submit" name="upload" value="SUBMIT"/>
		<input type="hidden" name="submitted" value="true" />
	</form>
	<p>&nbsp;</p>
	<a href="index.php">BACK</a>
	</div>
	</body>
</html>
