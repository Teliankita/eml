<?php
$con=mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,'eml');

$username=$_POST['uname'];
$orgname=$_POST['Oname'];
$Email=$_POST['email'];
$Paper=$_POST['paper'];
$address=$_POST['Address']; 
$Pnumber=$_POST['pnumber'];
//echo $username;
//echo $orgname;

$sql="INSERT INTO name VALUES ('$username','$orgname','$Email','$Paper','$address','$Pnumber')";

$result=mysqli_query($con,$sql);
if($result){
    echo "inserted";
}   
else{
    echo"failed";
}
?>  

