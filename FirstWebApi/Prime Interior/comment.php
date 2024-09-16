<?php 
include 'config.php';

?>

<?php 

if(isset($_POST['submit'])){
    $comments = $_POST['comments'];



    $insert = "INSERT INTO `comments` (`comments`) VALUES ('$comments')";
    $res = mysqli_query($conn,$insert);
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.comments-container {
    max-width: 800px;
    margin: 70px;
    padding: 20px;
    /* background-color: #ecf0f1; */
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.comment-form {
    display: flex;
    flex-direction: column; /* Change to column layout on smaller screens */
    margin-bottom: 20px;
}

textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    resize: none;
}

#comment_btn{
    width: 100%;/* Button takes full width on smaller screens */
    padding: 10px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}

.comment {
    background-color: white;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.comment-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}

.comment-date {
    font-size: 12px;
    color: #888;
}

/* Media Query for smaller screens */
@media only screen and (max-width: 600px) {
    .comment-form {
        margin-bottom: 10px;
    }

    button {
        width: auto; /* Button takes auto width on smaller screens */
    }
}

</style>
<body>
<div class="comments-container">
        <h2>Comments</h2>
        <div class="comment-form">
          <form action="" method="post">
          <textarea id="comment-input" name="comments" placeholder="Add your comments"></textarea>
            <button id="comment_btn" class="btn btn-primary" name="submit" type="submit">Submit</button>
          </form>
        </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Comments</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
    $fetch = "SELECT * FROM `comments`";
    $fetch_data = mysqli_query($conn,$fetch);

    while($row = mysqli_fetch_array($fetch_data)){
?>
    <tr>
      
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['comments']?></td>
      
    </tr>
    <?php 
    }
    ?>
   
  </tbody>
</table>
       
          
    </div>
   
    <script src="comments.js"></script>
</body>
</html>