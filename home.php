<?php
	include("setting.php");
	session_start();
	if(!isset($_SESSION['sid']))
	{
		header("location:index.php");
	}
	$sid=$_SESSION['sid'];
	$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
	$b=mysqli_fetch_array($a);
	$name=$b['name'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Library Management System</title>
		<link href="stylesheet.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div class="head">
			<a ><img src="images/Logo2.png" width="125px" ></a>
			<div class="header">
			    <a class="cta" href="logout.php"><button>Logout</button></a>
            </div>
		</div>
		<br />

		<div align="center">
			<div id="wrapper">
				<br />
				<br />

				<span class="SubHead">Welcome <?php echo $name;?></span>
				<br />
				<br />
				<table border="0" class="table" cellpadding="10" cellspacing="10">
					<tr><td><a href="issueBook.php" class="Command">Borrow Book</a></td><td><a href="request.php" class="Command">Request New Books</a></td></tr>
					<tr><td><a href="availablebooks.php" class="Command">Available Books</a></td></td></tr>
				</table>
				<br />
				<br />

				<br />
				<br />

			</div>
		</div>
	</body>
</html>