
<?php 
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Interior</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/swiper@10.3.1/modules/effect-fade.min.css" rel="stylesheet">

</head>
<style>



  @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Jost:wght@400;600;700&family=Nunito:wght@200;300;400;600;700&family=Poppins:wght@100;200;300;400;500;600&display=swap');


  .container-fluid{
    
    font-family: 'Poppins', sans-serif;
  }
  .navbar{
    
    /* background: linear-gradient(to right, #ffA500, #ff0000);  */
    background: #E14A3B;
 
  color: white;
  padding: 10px; 
  }
  .navbar-brand{
    color: #ECE6DB;
    font-size: 27px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   
  }
 
  .nav-item{
    margin-left: 30px;
    font-size: 17px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #ECE6DB;
    display: flex;
    justify-content: center;
   

  }
  .nav-item.nav-link{
    color: #f0f0f0;
  }
  .c-img{
     height: 100%;
     /* object-fit: cover; */
     filter: brightness(0.6);
  }
  .c-item{
    height: 500px;

  }
  /* .design-1{
    font-size: 25px;
  } */
  .art{
    font-size: 60px;
  }
  .name-h{
    text-align: center;
    margin-top: 20px;
    font-weight: bolder;
  }
 
  .row h2{
    margin-top: 50px;
    /* margin-right: 50px; */
    
  }
  .row p{
    margin-top: 30px;
    color: gray;
    margin-right: 40px;
    /* margin-right: 100px; */
    

  }
  .image-f{
    margin-top:10px;
    border: #b31414 2px solid;
     
  }

  @media (min-width:335px) and (max-width:360px){
     .image-f{
         width: 200px;

        
         
     }  
     .main_content{
      width: 200px;
     }
    }
    @media (min-width:988px) and (max-width:2392px) {
      /* .image-f{

      } */
      .row h2{
       
        margin-right: 17px;
      }
      .row-p{
       
        margin-right: 17px;
      }

      .row p{
        margin-right: 17px;
      } 
      
    }
     
    
  
  .section-info{
    background-color: #f5f5f5;
    margin-top: 0px;
    
  }
  /* .row{
    padding-top: 5px;
    padding-bottom: 5px;
  } */
  /* Define the styles for the container and icons */
.share-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%; 
    background-color: #f0f0f0;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.share-icon {
    display: inline-block;
    margin: 0 5px;
}

/* Style the Facebook icon */
.facebook-icon img {
    width: 40px;
    height: 40px;
}

/* Style the phone icon */
.phone-icon img {
    width: 32px;
    height: 32px;
}
.box2{
  display: flex;
  justify-content: space-between;

}
/* .fab.fa-facebook-f,.fa-instagram,.fa-twitter,.fa-youtube{
  color: grey;
  margin-left: 10px;
  font-size: 18px;
 
      
} */
.sub{
  margin-right: 13px;
}
@media screen and (max-width: 468px) {
    .box1,.box2 {
         /* New background color */
        font-size: 13px; /* New font size */
    }
  }
@media screen and (max-width: 396px) {
    .box1,.box2 {
         /* New background color */
        font-size: 9px; /* New font size */
    }
  }
  
  
 
</style>
<body>
<div class="share-container">
        <!-- Use Font Awesome classes for icons -->
  
       <div class="box1">
       <a href="#" class="share-icon">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="share-icon">
        <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="#" class="share-icon">
        <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="#" class="share-icon">
        <i class="fa-brands fa-youtube"></i>
        </a>
       </div>

       <div class="box2">
       <a href="#" class="share-icon">
        <i class="fa-solid fa-envelope"></i>
        </a>
       <div class="sub">
       <label class="label1"> youremail@gmail.com</label>

       </div>
       
<a href="tel:+123456789" class="share-icon">
    <i class="fas fa-phone"></i>
</a>
       
        <label >+123 456 789</label>
       </div>
       </div>
    
   <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="prime.php">Mart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="prime.php">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="sub_navbar.php">
            Design
          </a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.php">Portfolio</a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>