<?php
if(isset($_POST['diupdate'])){
  $host="localhost";
  $user="root";
  $pwd="";
  $dbname="dindia";
  $conn=mysqli_connect($host,$user,$pwd,$dbname);
    if ($conn) {
      $query="UPDATE dl set status=status+1 where status=1";
        if(mysqli_query($conn,$query)){
            $_SESSION['successMsg'] = "Like counted";

        }else{
            $_SESSION['errorMsg'] = "Operation failed";
  }
}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RTO</title>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

</style>

  </head>
  <body>

    <?php
    	$host="localhost";
    	$user="root";
    	$pwd="";
    	$dbname="dindia";
    	$conn=mysqli_connect($host,$user,$pwd,$dbname);
    		if ($conn) {
    		$query="SELECT * FROM dl where status=1";
    		$result=mysqli_query($conn,$query);
    		}
    ?>

    <table style="width:90%">
    	<?php
    	while($data = mysqli_fetch_assoc($result)){
    	?>
		<tr>
			<th>Ack No.</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Mobile No.</th>
			<th>Address</th>
			<th>Click To Forward</th>
		</tr>
    	<tr>
    		<td><?php echo $data['AckNo'];?></td>
    		<td><?php echo $data['Fname'];?></td>
    		<td><?php echo $data['Lname'];?></td>
        <td><?php echo $data['MobileNo'];?></td>
        <td><?php echo $data['Address'];?></td>
        <td><form action="" method="post"><input type="submit" name="diupdate" value="Forward"></form></td>
    	</tr>
    	<?php
    	}
    	?>
    </table>


  </body>
</html>
