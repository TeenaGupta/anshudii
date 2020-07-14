<!DOCTYPE html>
<html>
	<head>
		<title> Birthday Wishses </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		<!-- /////////   Font Awsome link ////////  -->
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- /////////////      FONT FAMILY  /////////////// -->
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">
				<img src="images/logo1.png" alt="" style="width: 5%;">
			</a>
			<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<form class="form-inline my-2 my-lg-0 ml-auto">
					<label class="lbl"> Search Birthday Wishes:   </label>
					<input class="form-control mr-sm-2" type="search" placeholder="Enter Name" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i> </button>
				</form>
			</div>
		</nav>
		<!-- ///////////////////  birthday /////////////// -->
		<section>
			<h2> here is your birthday wishes collection </h2>
			<div class="w-50 m-auto">
				<label> Give your lovely wish </label>
				<i class="fa fa-hand-o-down" aria-hidden="true"></i>
				<a href="#fillbw"><input class="form-control" type="text" placeholder="Click Here"></a>
			</div>
		</section>
		<!-- ///////////////////   birthday collection ////////////////// -->
		<div class="w-100 m-auto">
		<table>
			<tr>
				<th> ID </th>
				<th> NAME </th>
				<th> WISHES </th>
				<th> RELATION </th>
			</tr>
			<?php
			$conn = mysqli_connect('127.0.0.1','root','','wishes','3308');
			$sql = "SELECT id, name, wish, relation from birthdaywish";
			$result = $conn-> query($sql);
			if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["wish"] ."</td><td>". $row["relation"] ."</td></tr>";
			}
		echo "</table>";
		}
		else {
		echo "0 result";
		}
		$conn-> close();
		?>
	</table>
</div>
	<!-- /////////////   FILL WISHES  //////////////////// -->
	<br> <br>
	<section id="fillbw" class="fillwish">
		<div class="w-50 m-auto">
			<form action="userwishes.php" method="POST">
				<div class="form-group">
					<h1> Give her your lovely wish and blessings </h1>
					<label> Enter Your Name </label>
					<input autocomplete="off" class="form-control" type="text" name="name"> <br>
					<label> Enter Your Relation with Anshu dii </label>
					<input autocomplete="off" class="form-control" type="text" name="relation"> <br>
					<label> Give here Your Wish </label>
					<textarea name="wish" class="form-control"></textarea> <br> <br>
					<button class="btn btn-dark my-2 my-sm-0" type="submit">SUBMIT</button>
				</div>
			</form>
		</div>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>