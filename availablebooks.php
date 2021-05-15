<?php
	include("setting.php");
	session_start();
	if(!isset($_SESSION['sid']))
	{
		header("location:index.php");
	}

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

				<span class="SubHead">Available Books</span>
				<br />
				<br />

				<table border="0" class="table" cellpadding="10" cellspacing="10">
					<tr class="labels" style="text-decoration:underline;"><th>Book Name</th><th>Author</th><th>
					<?php
						$x=mysqli_query($set,"SELECT * FROM books");
						while($y=mysqli_fetch_array($x))
						{
								?>
							<tr class="labels" style="font-size:14px;"><td><?php echo $y['name'];?></td><td><?php echo $y['author'];?>
					<?php
					}
						?>
				</table><br />
				<br />
				<a href="home.php" class="link">&#11164;Go Back</a>
				<br />
				<br />

			</div>
		</div>
	</body>
</html>

