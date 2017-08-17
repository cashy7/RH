<?php

session_start();
//Your authentication key
$authKey = "170114AMVeZE03K59941647";
//Multiple mobiles numbers separated by comma
$mobileNumber = $_POST["phone"];
//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "ABCDEF";
//Your message to send, Add URL encoding here.
$rndno=rand(1000, 9999);
$message = urlencode("Your Otp:".$rndno);
//Define route 
$route = "route=4";
//Prepare you post parameters
$postData = array(
'authkey' => $authKey,
'mobiles' => $mobileNumber,
'message' => $message,
'sender' => $senderId,
'route' => $route
);
//API URL
$url="https://control.msg91.com/api/sendhttp.php";
// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $postData
//,CURLOPT_FOLLOWLOCATION => true
));
//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//get response
$output = curl_exec($ch);
//Print error if any
if(curl_errno($ch))
{
echo 'error:' . curl_error($ch);
}
curl_close($ch);
if(isset($_POST['btn-save']))
{
$_SESSION['phone']=$_POST['phone'];
$_SESSION['otp']=$rndno;
  } 
 ?>

 
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}
</style>
</head>



<body >
<div class="w3-container w3-blue" style="width:45%; margin-left:20px;">
  <h2>Input Form</h2>
</div>


<div id="opt3" class=""m3>
  
<form class="w3-container" action="" method="post">
  <p style="width:45%; margin-left:20px;">
  <label >Enter Ack. no.</label>
  <input class="w3-input" type="text" name"ackno" maxlength="9" minlength="9" name="ackno" ></p>

  <p style="width:45%; margin-left:20px;">
  <label>Mobile no.</label>
  <input class="w3-input" type="text" name="phone"></p>
  <p style="width:45%; margin-left:20px;">
	<Button type="submit" name="btn-save"  class="w3-btn w3-blue">Send OTP</Button>
  
  <p style="width:45%; margin-left:20px;">
  
  
 <form action="sucess.php" method="post"><p style="width:45%; margin-left:20px;">
 <label>Enter OTP</label>
<input class="w3-input" type="text" name="otpvalue"/><p style="width:45%; margin-left:20px;">
<input class="w3-btn w3-blue" type="submit" value="submit" name="dlsubmit" id="opt311"/>
</form>
</form>




</script>
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

      echo "error";
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
