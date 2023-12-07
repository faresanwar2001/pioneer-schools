<?php 

$studentName = $_POST["Name"];
$gender = $_POST["gender"];
$date =$_POST["date"];
$grade = $_POST["grade"];
$number = $_POST["number"];
$email = $_POST["mail"];
$comment = $_POST["comment"];
//connection with database
$serve_name="localhost";
$user_name ="root";
$password ="";
$db_name ="school";

$connection = new mysqli($serve_name,$user_name,$password,$db_name);
$query1 = "insert into studentinformation () values ('$studentName','$gender','$date','$grade','$number','$email','$comment')";

mysqli_query($connection,$query1);
$query2 = "select * from studentinformation";
$recorded = mysqli_query($connection,$query2);

echo"<table border='1'>";
echo"<tr><td>studentName</td><td>Gender</td><td>Date</td><td>Grade</td><td>Number</td><td>Email</td><td>Comment</td></tr>";

while($row = mysqli_fetch_array($recorded)){
    echo"<tr><td>".$row['StudentName']."</td><td>".$row['Gender']."</td><td>".$row['Date']."</td><td>".$row['Grade']."</td><td>".$row['Number']."</td><td>".$row['Email']."</td><td>".$row['Comment']."</td></tr>";

}

$connection -> close();

?>