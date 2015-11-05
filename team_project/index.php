<?php
	include 'sql/dbFunctions.php';
	$conn = getConnection();
	
function displayGenre(){
	global $conn;
    $sql = "SELECT genreid, name from tp_genre";
	
    $records = getDataBySQL($sql);
    foreach ($records as $record){
        echo "<option value = '" . $record['genreid'] . 
        "'>" . $record['name'] . "</option>";
    }
	
}//EndFunction 


function getMovie(){
	global $conn;
    $sql = "SELECT movied, title from tp_movie";
	
    $records = getDataBySQL($sql);
    foreach ($records as $record){
        echo "<option value = '" . $record['movied'] . 
        "'>" . $record['title'] . "</option>";
    }
	
}//EndFunction 
	

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
       	
       	<!--<link rel="stylesheet" href="http://hosting.otterlabs.org/zielinskiaustinr/cst336/includes/master_styles2.css">-->
		<link rel="stylesheet" href="css/styles.css">       
	</head>
<div id = "backgrounds">	
	<div id="wrapper">
		<header>
			<br/><br/>
			<h1> Movie Search</h1>
			
			<form method ="get">
			
				Select Genre:
				<select name = "genreId">
				<?=displayGenre()?>
				</select>
				
				
				Select Movie(s):
				<select name = "movie">
				<?=getMovie()?>	
				</select>
				
				
				sort by:
				<select name = "sort">
				<option value ="title">Title</option>	
				<option vlaue = "year">Year</option>
				</select>  	
			
				Year:
				 <input type="number" name = "year" value="<?=$_GET['year']?>"> 
				 
				 <br/><br/>
				 <br/><br/>
				  <div id= "button">
				  	<input type="submit" value="Search movie" name="searchForm" />
				  </div>
			</form>
			
			
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
</div>
</html>