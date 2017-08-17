<html>
<head>
</head>

<body>
<div id="opt3" class="m3">
      <form action="" method="post">
        <input type="text" name="ackno" placeholder="Enter Ack No">
        <input type="submit" name="dlsubmit" id="opt311" value="Search DL">
      </form>
<br/><br/><br/><br/>
      <?php
      if(isset($_POST['dlsubmit'])){
        $host="localhost";
        $user="root";
        $pwd="";
        $dbname="dindia";
        $conn=mysqli_connect($host,$user,$pwd,$dbname);
        if ($conn) {
    		$query="SELECT * FROM dl";
    		$result=mysqli_query($conn,$query);
    		}
    ?>

    <table border="2px">
    	<?php
    	while($data = mysqli_fetch_assoc($result)){
    	?>
    	<tr><th><?php echo "Acknowledge Number :";?></th><td><?php echo $data['AckNo'];?></td> </tr>
    		<tr><th><?php echo "First Name :";?></th><td><?php echo $data['Fname'];?></td> </tr>
    		<tr><th><?php echo "Last Name :";?></th><td><?php echo $data['Lname'];?></td> </tr>
      <tr>  <th><?php echo "Mobile Number :";?></th><td><?php echo $data['MobileNo'];?></td> </tr>
      <tr>  <th><?php echo "Address :";?></th><td><?php echo $data['Address'];?></td> </tr>
    	</tr>
    </table>
<br/><br/><br/><br/>
    <?php
    if ($data['status'] == 0) {
      echo "Arrived at RTO";
    }
    elseif ($data['status'] == 1) {

      echo "Processing in between";
    }
    else {
      echo "Ready to download";
      ?>
      <button onclick="myFunction()">Print</button>

<script>
function myFunction() {
    window.print();
}
</script>
      <?php
    }
}
}
    ?>
	</body>
</html>
