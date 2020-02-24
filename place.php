<?php include('connection.php')?>
<?php include('header.php')?>

<!DOCTYPE html>
<html>
<body BGCOLOR=BEIGE>
	<?php
	if(!empty($_GET['id'])){
		$x=$_GET['id'];
		echo '<h1 align="center" style="color: blue;">'.$x.'</h1>';
		$sql1='select * from image where Name="'.$x.'"';
		$result=mysqli_query($conn,$sql1);
		while($row=mysqli_fetch_array($result)) 
		{
			echo '
			<img src="data:image/jpeg;base64,'.base64_encode($row['image1']).' "/	>
			';
		}	
		$sql='select * from placediscription where Name="'.$x.'"';
		$result1=mysqli_query($conn,$sql);
		while($row1=mysqli_fetch_array($result1)) 
		{
			echo "<br><br><FONT SIZE=5 COLOR=green>$row1[2]";
		}
	}
	else
	{
	echo "id not found";
	}
?>
</body>
</html>
<?php include('footer.php')?>
