<?php
include("connection.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>         <!-- for animation -->
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h4 class="text-white me-auto ms-auto">Web<span class="text-warning">Application</span></h4></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../homePage.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Weather.html">Weather</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="../news.html" >News </a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Welcome</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="contact-form">
        <h1>DATABASE FORM</h1>
    </div>
    <div class="contact-us">
       <form  action="#" method="POST">
           <input type="text" name="firstname"   class="form-control1" placeholder="Enter First Name" align="center"> <br>
           <input type="text" name="lastname"  class="form-control1" placeholder="Enter last Name"> <br>
           <input type="email" name="email"  class="form-control1" placeholder="Enter Email"> <br>
           <p> <h3 style="color:red">Comments :</h3></p> <br>
           <TEXTAREA rows="10" cols="60" name="commentfield" align="center"></TEXTAREA><br>
           <input type="submit" class="form-control1 submit" value="submit" name="submit1">
       </form>
    </div>
</body>
</html>
<?php

if(isset($_POST['submit1']))
{
 $fname = $_POST['firstname'];
 $lname = $_POST['secondname'];
 $email = $_POST['mail'];
 $sugg = $_POST['commentfield'];
 
 $query = "INSERT INTO feedback (first_name,last_name,email,suggestion) VALUES ('$fname','$lname','$email','$sugg')";
 $data = mysqli_query($conn,$query);


 if($data)
 {
   echo "<script> alert('Data Inserted Successfully') </script>";
  }
  else{
    echo "<script> alert('Failed to Insert Data') </script>";
  }
  
}
?>