<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #btn{
            background:blue;
            width:163px;
            height:40px;
            color:white;
            border-radius:10px 10px;
            margin-left:500px;

        }
        #btn:hover{
            background:black;  
        }
        #tb{
        
        width:1150px;
        height:200px;
        border-radius:15px 15px;
        margin-left:50px;

    }
    td{
       text-align:center;
        background: #000000;
        border-radius:15px 15px;        color:white;

}
    th{
        border-radius:15px 15px;
color:white;
        background: #eb2323;
    }
    a{
        text-decoration:none;
        color:white;
        background:blue;
        border:8px blue solid;
        border-radius:5px 5px;
    }
    </style>
</head>
<body>
    <form action="index.html" method="post">
    <input type="Submit" value="Go To Main Page " name="Submit" id="btn">

    </form>
  
    <?php
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="blooddb";


$conn= new mysqli($servername,$dBUsername,$dBPassword,$dBName);

$sql="SELECT `name`, `email`,  `bgroup`, `City`,`ph`, `gender`, `age` FROM donor";

$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){

$query= mysqli_query($conn,$sql);
echo"<table id='tb'>";
echo"<tr><th> Name </th><th>Email</th><th>Blood Group </th> <th>City</th><th>Phone Number</th><th>Time</th><th>Source</th></tr>";
while($row=mysqli_fetch_array($query)){
    echo"<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['bgroup']."</td><td>".$row['City'].
    "</td><td>".$row['ph']."</td><td>".$row['gender']."</td><td>".$row['age']."</td>";

}
echo"</table>";
$conn->close();

}
//  }
    else{
        echo"<hr>No Record Found !<hr>";
            }


    ?>
</body>
</html>