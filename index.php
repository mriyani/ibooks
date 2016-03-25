<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>
<!-- Bootstrap -->
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<title>IUD Using PHP and MySQL</title>
<style>
	body {
		margin: 15px auto;
	}
</style>
</head>
<body>
<form method="post">
<table>

	<tr>
		<td>Title:</td>
		<td><input type="text" name="title" class="form-control"/></td>
	</tr>
	<tr>
		<td>Author</td>
		<td><input type="text" name="author" class="form-control"/></td>
	</tr>
	<tr>
		<td>Publisher Name</td>
		<td><input type="text" name="name" class="form-control"/></td>
	</tr>
	<tr>
		<td>Copyright Year</td>
		<td><input type="text" name="copy" class="form-control"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" class="btn btn-success btn-lg"/></td>
	</tr>
</table>
<?php
if (isset($_POST['submit'])) {
	require_once ('db.php');
			$title = $_POST['title'] ;
			$author = $_POST['author'] ;
			$name = $_POST['name'] ;
			$copy = $_POST['copy'] ;

	$sql = "INSERT INTO `example`(Title,Author,PublisherName,CopyrightYear)
	VALUES ('$title','$author','$name','$copy')";
	$query = mysqli_query($conn, $sql);
}
?>
</form>
<table border="0">
			<?php
			require_once("db.php");
			$sql ="SELECT * FROM example";
			$query = mysqli_query($conn, $sql);

			while ($test = mysqli_fetch_array($query)) {

				$id = $test['BookID'];
				echo "<tr align='center'>";
				echo"<td><font color='black'>" .$test['BookID']."</font></td>";
				echo"<td><font color='black'>" .$test['Title']."</font></td>";
				echo"<td><font color='black'>". $test['Author']. "</font></td>";
				echo"<td><font color='black'>". $test['PublisherName']. "</font></td>";
				echo"<td><font color='black'>". $test['CopyrightYear']. "</font></td>";
				echo"<td> <a href ='view.php?BookID=$id'>Edit</a>";
				echo"<td> <a href ='del.php?BookID=$id'><center>Delete</center></a>";
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
