<?php 

include 'header.php';


if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $insert = "INSERT INTO `contact_us` (`name`, `email`, `Message`) VALUES ('$name', '$email', '$message')";
    $res = mysqli_query($conn,$insert);

  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<style>
/* Add your CSS styles here */

/* body{
    background: linear-gradient(to right, #ffad00, #b31414);
} */

body h1{
    margin-top: 14px;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.7); /* Add a semi-transparent white background for content */
}

/* Other CSS styles */

/* Responsive Styles */
@media screen and (max-width: 600px) {
    /* Adjust styles for smaller screens */
}








h2 {
    text-align: center;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Responsive Styles */
@media screen and (max-width: 600px) {
    .container {
        padding: 10px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 5px;
        margin-bottom: 5px;
        font-size: 14px;
    }

    input[type="submit"] {
        padding: 5px 10px;
    }

    .container form{
        margin-top: 8px;
    }
}


</style>
<body style="background-image: url('loft-living-room-interior-design.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    
    <h1 class="text-center" >Contact Us </h1>
   <div class="container">
   <form  method="post">
        <label for="">Name</label>
        <input type="text" name="name" id="name" required placeholder="Enter name" ><br><br>
        <label for="">Email</label>
        <input type="email" name="email" id="email" required placeholder="Enter email"><br><br>
        <label for="">Message</label>
       <textarea name="message" id="message"  rows="6"  placeholder="Enter your message"></textarea><br><br>

        <input type="submit" name="submit" value="Submit">

    </form>
   </div>
    
</body>
</html>