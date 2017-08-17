x    <?php
  $host="localhost";
  $user="root";
  $pass="";
  $dname="dindia";
  $conn=mysqli_connect($host,$user,$pass,$dname);
  if($conn)
  {
    $name=$_POST['username'];
    $pwd=$_POST['pwd'];
    $query="SELECT * from admin where username = '$name' ";
    $result=mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($result);
    if($data['pass']==$pwd)
    {
        if($data['department']=="KIOSK"){
        header('location:dasboard.php');}

        if($data['department']=="RTO"){
        header('location:dasboard1.php');}

        if($data['department']=="MW"){
        header('location:dasboard2.php');}
    }
  else {
    header('location:logincopy.html');
  }
}
 ?>
