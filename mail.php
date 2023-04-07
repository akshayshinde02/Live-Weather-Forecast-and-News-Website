 

<?php
// variables
// $servername="localhost";
// $username="root";
// $password="";
// $dbname="feedback_form";

// $conn = mysqli_connect($servername,$username,$password,$dbname);

// if($conn){
//     echo"Connection OK";
// }
// else{
//     echo"Connection Failed ".mysqli_connect_error();
// }

    
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$suggestion = $_POST['suggetion'];


$conn = new mysqli('localhost','root','','feedback_form');

if($conn->connect_error){
   die('Connection Failed  ' .$conn->connect_error);
}
else{
    $stat = $conn->prepare("Insert into feedback('First_Name', 'Last_Name', 'Email', 'Suggestions')values(?,?,?,?)");
    $stat->bind_param("ssss",$firstname,$lastname,$email,$suggestion);
    $stat->execute();
    echo "resistered";
    $stat->close();
    $conn->close();
   
}

?>