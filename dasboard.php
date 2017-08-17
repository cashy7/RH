<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DIndia</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
  
  
  
  
  
  
<!-- for nav bar-->
  <style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}



</style>
  </head>
  <body>
 
  <ul>
  <center><li style="padding:16px 8px;">KIOSKS</li>
</ul>

 
  
<!--for nav bar-->  
  <div id="mySidenav" class="sidenav">
 
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


 <a href="driving.php" id="opt31">Driving Licence</a>
  <a href="voter.php" id="opt51">Voter Id</a>
  <a href="Aadhar.php" id="opt21">Aadhar Card</a>
  <a href="pancard.php" id="otp11">Pan Card</a>
  <a href="bills.php" id="otp41">Bills</a>
  
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Click Here</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <div class="header">
<!--
    </div>
    <div class="container">
        <input type="button" id="opt11" value="pan-card">
        <input type="button" id="opt21" value="Aadhar-card">
        <input type="button" id="opt31" value="Driving Licence">
        <input type="button" id="opt41" value="Bills">
        <input type="button" id="opt51" value="Voter ID">
    </div>-->

    <div id="opt1" class="m1">
      <form action="pan.php" method="post">
        <input type="text" name="ackno" placeholder="Enter Ack No">
        <input type="submit" name="pansubmit" id="opt111" value="Search PAN"> <br/><br/><br/><br/>
      </form>
    </div>
<br/><br/><br/><br/>
    <div id="opt2" class="m2">
      <form action="voter.php" method="post">
        <input type="text" name="ackno" placeholder="Enter Ack No">
        <input type="submit" name="pansubmit" id="opt211" value="Search PAN">
      </form>

    </div>

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




    </div>

      <div id="opt4" class="m4">
        <form action="adhar.php" method="post">
          <input type="text" name="ackno" placeholder="Enter Ack No">
          <input type="submit" name="pansubmit" id="opt411" value="Search PAN">
        </form>

    </div>

      <div id="opt5" class="m5">
        <form action="passport.php" method="post">
          <input type="text" name="ackno" placeholder="Enter Ack No">
          <input type="submit" name="pansubmit" id="opt511" value="Search PAN">
        </form>
    </div>

    <div class="footer">

    </div>


    <script>
// Get the modal
var modal1 = document.getElementById('opt1');
var modal2 = document.getElementById('opt2');
var modal3 = document.getElementById('opt3');
var modal4 = document.getElementById('opt4');
var modal5 = document.getElementById('opt5');


// Get the button that opens the modal
var btn1 = document.getElementById("opt11");
var btn2 = document.getElementById("opt21");
var btn3 = document.getElementById("opt31");
var btn4 = document.getElementById("opt41");
var btn5 = document.getElementById("opt51");


var btn11 = document.getElementById("opt111");
var btn21 = document.getElementById("opt211");
var btn31 = document.getElementById("opt311");
var btn41 = document.getElementById("opt411");
var btn51 = document.getElementById("opt511");

// When the user clicks the button, open the modal
btn1.onclick = function() {
    modal1.style.display = "block";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";
    modal5.style.display = "none";
}

btn2.onclick = function() {
    modal1.style.display = "none";
    modal2.style.display = "block";
    modal3.style.display = "none";
    modal4.style.display = "none";
    modal5.style.display = "none";
}

btn3.onclick = function() {
    modal1.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "block";
    modal4.style.display = "none";
    modal5.style.display = "none";
}

btn4.onclick = function() {
    modal1.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "block";
    modal5.style.display = "none";
}

btn5.onclick = function() {
    modal1.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";
    modal5.style.display = "block";
}


btn11.onclick = function() {
    modal1.style.display = "block";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";
    modal5.style.display = "none";
}

btn21.onclick = function() {
    modal1.style.display = "none";
    modal2.style.display = "block";
    modal3.style.display = "none";
    modal4.style.display = "none";
    modal5.style.display = "none";
}

btn31.onclick = function() {
    modal1.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "block";
    modal4.style.display = "none";
    modal5.style.display = "none";
}

btn41.onclick = function() {
    modal1.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "block";
    modal5.style.display = "none";
}

btn51.onclick = function() {
    modal1.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";
    modal5.style.display = "block";
}


</script>

  </body>
</html>
