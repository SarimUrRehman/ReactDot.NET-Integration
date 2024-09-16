<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>
<style>


  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
body{
  font-family: 'Poppins', sans-serif;
  background-color: #f4fae3;
}
  
   .navbar{
    
   
  background-color: #f4fae3;
  color: white;
  padding: 10 4vw; 
  
  
  }
  .navbar-brand{
    color: #De1919;
    font-size: 27px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   
  }
 
  .nav-item{
    margin-left: 30px;
    font-size: 17px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin-left: 40px;
    

  }
 
  .section{
    display: flex;
    width: 100%;
    position: relative;
    padding-top: 40px;
    height: calc(100% - 100px);
    

  }
 .left {
  /* margin: 25px 1px; */
  padding: 5vw 4vw;
  width: 50%;
  height: 100%;
 }
 .right{
  width: 50%;
 }
 .left h1{
  font-size: 60px;
  font-weight: 700;
 
 }
 .left h1 span{
  color: #De1919;
 }
 .left h5{
  font-weight: 600;
 }
 .left P{
  font-weight: 500;
  width: 100%;
 }
 .right img{
  position: relative;
    display: flex;
    height: 500px;
   padding: 20px 20px;
   margin-right: 9vw;
   border-radius: 20px;

 }
 .left_icon{
  display: flex;
  padding: 3vw;
  gap: 1.29vw;
  font-size: 2vw;
  
 }
 .left_icon i{
  border: 2px solid #58636b;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  text-decoration: none;
  align-content: center;
  font-size: 30px;
  padding: 0.24vw;
  width: 40px;
  height: 40px;
  background: transparent;

 }
 #element{
  color: #De1919;
  font-weight: 400;
 }
 .left_icon i:hover{
  background-color:#58636b ;
  color: #ededed;
 }
 
 
 
 @media (max-width : 765px) {
   .navbar{
    width: 100%;
   
   }
   .right img{
    
    padding: 40px;
    height: 80vw;
    width: 45vh;
   }
 }
 @media (min-width : 664px) and (max-width : 980px ){
    .navbar{
      width: 100%;
      
    }
    .right img{
       width: 38vw;
    }
 }
@media (max-width : 664px) {
  .section{
    display: flex;
    flex-direction: column;
    width: 100%;
  }
  .left{
    width: 100%;
    
    
  }
  .right{
    width: 100%;
  }
  .right img{
    width: 70vw;
    margin-bottom: 20px;
  }
  .left p{
    width: 60vw;
  }
}

</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="prime.php">Prime Interior</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="prime.php">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Design
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.php">Portfolio</a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
<section class="section container">
     <div class="left ">
      <h1>I'm <span>Sarim</span></h1>
      <h5>I'm passionate</h5>
      <span id="element"></span>
      <p>Welcome to Prime Interior, where every space is transformed into a masterpiece.I'm Sarim, the founder and creative mind behind this venture, and I'm delighted to share my journey in the world of interior design with you.</p>

      <div class="left_icon">
      <i class='bx bxl-facebook'></i>
      <i class='bx bxl-instagram'></i>
      <i class='bx bxl-whatsapp'></i>
      </div>
     </div>

     <div class="right col-md-3 container">
      <img data-aos="fade-up" src="All images/sarim3.jpg" alt="">
     </div>
</section>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    var typed = new Typed('#element', {
      strings: ['Owner', 'Frontend Developer','Backend Developer','ASP.NET'],
      typeSpeed: 50,
    });
  </script>
</body>
</html>