<?php
// $servername="Localhost";
// $dbusser="id17982247_user";
// $dbpass="A2Ah1VO0ZjJJG{qB";
// $dbname="id17982247_umer";
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="blooddb";
$conn= new mysqli($servername,$dBUsername,$dBPassword,$dBName);

// $conn=new mysqli($servername,$dbusser,$dbpass,$dbname);
// $conn =new mysqli("Localhost","id17982247_user","A2Ah1VO0ZjJJG{qB","id17982247_umer");

$name=$_POST['nam'];
$mail=$_POST['mail'];
$id=$_POST['id'];
// $gender=$_POST['gender'].get();
$group=$_POST['group'];
$city=$_POST['city'];
$ph=$_POST['ph'];

$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$age=$_POST['age'];


if($_SERVER['REQUEST_METHOD']=='POST'){
    if(strlen($name)<3){
       echo"<script>alert('Your  Name is Not Correct');
       </script>";
   }
  if(strlen($id)<13){
           echo"<script>alert('Your id is Not Correct');
           </script>";
       
       }
      if($age<18){
           echo"<script>alert('Sorry Your Age Is Less than 18');
           </script>";
           // include"insert.php";
       }
    if($ph==""){
       echo"<script>alert('Please Enter Phone Number');
           </script>";
     }
  else     if($gender==""){
           echo"<script>alert('Please Select the Gender');
           </script>";
       }
  
       else{
        
 $sql="  INSERT INTO `donor`(`name`, `email`, `id`, `bgroup`, `City`,`ph`, `gender`, `age`)
  VALUES ('$name','$mail','$id','$group','$city','$ph','$gender','$age')";
 if($conn->query($sql)===true){
   
   Echo"<script>alert('Registerd Sucessfully')</script>";

   include"index.html";
 
//   include"insert.php";
return false;
}
else{
    Echo"<script>alert('Existing User')</script>";}
$conn->close();
}
include"index.html";
}


?>