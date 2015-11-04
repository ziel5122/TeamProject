<?php
	include 'sql/dbFunctions.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       	Remove this if you use the .htaccess -->
       	<meta http-equiv="X-UA-Compatible" content="IE-Edge,chrome=1">
		<meta charset="UTF-8"> 
		<meta name="author" content="ziel5122">
       	
       	<title>Title Placeholder</title>
       	
       	<link rel="stylesheet" href="http://hosting.otterlabs.org/zielinskiaustinr/cst336/includes/master_styles2.css">
		<link rel="stylesheet" href="css/styles.css">       
	</head>
	
	<div class="wrapper">
		<header>
			<h1>Database Tests</h1>
			
			<table>
				<tr>
					<td>Movies</td>
					<td>Actors</td>
					<td>Directors</td>
					<td>Genres</td>
				</tr>
			</table>
		</header>
		
		<body>
			<?php
				$conn = getConnection();
				
				$sql = "select * from tp_movie";
				
				$data = getData($sql, $conn);
				
				for ($i = 0; $i < count($data); $i++)
					echo $data[$i]['title'] . "<br>";
				
				echo "<br><hr><br>";
				
				$sql = "select * from tp_movie m
						right join tp_director d 
						on m.directorid = d.directorid
						where d.lastName = 'Speilberg'";
				
				$data = getData($sql, $conn);
				
				for ($i = 0; $i < count($data); $i++)
					echo $data[$i]['title'] . "<br>";
			?>
			
			<table>
				<tr>
					<td>1</td>
					<td>1233958290345</td>
					<td>2</td>
				</tr>
			</table>
		</body>
		
		<footer>
			<?php include '/home/CLASSES/zielinskiaustinr/cst336/includes/footer.php'; ?>
		</footer>
	</div>
</html>