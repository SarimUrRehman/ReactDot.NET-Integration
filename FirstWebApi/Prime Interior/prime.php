<?php 
include 'header.php';
?>
<style>
  .section{
    width: 100%;
   
  }
  h1{
    font-size: clamp(2rem , 7.5vw ,5rem);
  }
  .c-card,.des p{
    font-size: clamp(0.8rem , 5vw ,1.375rem);
    color: #4d5053;
  }
  .page-btn{
    cursor: pointer;
    font-weight: 600;
    font-size: 1.125rem;
    text-transform: capitalize;
    fill: transparent;
    align-items: center;
    gap: 0.25rem;
    max-width: max-content;
    border: 1px solid #292f36;
    padding: 0.4rem 1rem;
    color: #ffffff;
    stroke: #ffffff;
    background: #292f36;
    border-radius: 0 10px 0 10px;
    transition: 0.5s ease-in-out;
    text-decoration: none;
  }
  .page-btn.active{
    
    color: #292f36;
    stroke: #292f36;
    background: transparent;
    padding: 0;
    border: 0;
   
  }
  .page-btn{
    
    color: #292f36;
    stroke: #292f36;
    background: transparent;
    border-radius: 0 10px 0 10px;
   
  }
  .page-btn:hover{
    background: #292f36;
    color: #ffffff;
  }
  .c-card{
    
    justify-content: center;
    padding: 0;
    box-sizing: border-box;
    font-family:'Jost', sans-serif;
    padding: 4rem 0;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(300px,1fr));
    gap: clamp(1rem,5vw,5rem);
    
  }
  .c-card div {
    text-align: center;
    border: 1px solid #f4f0ec;
    border-radius: 25px;
    padding: 2rem;
    -webkit-border-radius:25px;
    -moz-border-radius:25px;
    -ms-border-radius:25px;
    -o-border-radius:25px;


  
    
  }
  .c-card div p{
    margin: 1.5rem auto;
  }
  h1,h2,h3,h4,h5,h6{
    text-transform: capitalize;
    line-height: 125%;
    font-family: 'DM Serif Display';
  }
  .main_img img{
    border-radius: 10%;
  }
  @media (min-width:764px) and (max-width:991px){
     .main_img img{
      height: 800px;
      width: 800px;
     }
  @media (min-width:364px) and (max-width:564px){
     .main_content{
      justify-content: center;
      font-size: small;
      font-weight: 300;
      text-align: center;
     }
     }

        
         
     }  
  /* .contact-img img{
    border-radius: 10%;

  }
  .phone_icon{
    display: flex;
  }
  
  
  .estimate_bt{
    margin-right: 390px;
    margin-top: 30px;
  }
  .call_us{
    margin-right: 470px;
    margin-top: 19px;
    text-decoration: none;
    color: #292f36;
  }
  .call_us:hover{
    color: blue;
  }
 .des label{
  padding: 10px;
  font-size: 30px;
 }
 
  
 
 
  */
  .main_content p h2{
    padding: 20px;
    
  }
  /* .main_img{
    height: auto;
    max-width: 100%;
  } */


  /* Testimonials */
  .hero{
    background-color: #f4f0ec;
    height: 100vh;
    width: 100%;
    position: relative;
  }
  .hero h1{
    text-align: center;
    padding-top: 80px;
    font-size: 40px;
    color: #fff;
  }
  /* .c-card div:hover{
    background-color: #f8f9fa;
  } */

 
  
  
</style>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="All images/wall.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 ">
        <h5 class="mt-5 fs-3 text-uppercase">Feel comfort</h5>
        <p class="art fw-bolder text-captilize">Design can be Art </p>
        <button type="button" class="btn btn-success btn-lg">Click Here</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="All images/box.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 ">
        <h5 class="mt-5 fs-3 text-uppercase">Aesthetics</h5>
        <p class="art fw-bolder text-captilize col-sm-12">Make your design perfect</p>
        <button type="button" class="btn btn-success btn-lg">Click Here</button>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="All images/blinds.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 ">
        <h5 class="mt-5 fs-3 text-uppercase">Interior Styling</h5>
        <p class="art fw-bolder text-captilize">Vision window Blinds</p>
        <button type="button" class="btn btn-success btn-lg">Click Here</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="c-card container mt-6 " >
<div data-aos="zoom-in">
  <h2 >Project plan</h2>
  <p>Creating a project plan for an interior design project is essential for ensuring that the project is completed successfully, on time, and within budget.</p>
  <a href="#" class="page-btn active now">Readmore
  <i class="fa-solid fa-arrow-right"></i>
  </a>
  
</div>
<div data-aos="zoom-in">
  <h2>Interior work</h2>
  <p>Selecting colors, materials, textures, and furnishings to create a cohesive and aesthetically pleasing environment. </p>
  <a href="#" class="page-btn active now">Readmore
  <i class="fa-solid fa-arrow-right"></i>
  </a>
  
</div >
<div data-aos="zoom-in">
  <h2>Satisfication</h2>
  <p>Satisfying customers with your work is essential for building a positive reputation, earning repeat business, and generating referrals. </p>
  <a href="#" class="page-btn active now">Readmore
  <i class="fa-solid fa-arrow-right"></i>
  </a>
  
</div>
<div data-aos="zoom-in">
  <h2>Modern interior</h2>
  <p>Modern interior design is a popular style that emphasizes clean lines, minimalism, and a sleek, uncluttered look.</p>
  <a href="#" class="page-btn active now">Readmore
  <i class="fa-solid fa-arrow-right"></i>
  </a>
  
</div>
<div data-aos="zoom-in">
  <h2>Minimalist Aesthetic</h2>
  <p>Modern interiors often feature a "less is more" approach, with a focus on simplicity and minimal ornamentation.</p>
  <a href="#" class="page-btn active now">Readmore
  <i class="fa-solid fa-arrow-right"></i>
  </a>
  
</div>
<div data-aos="zoom-in">
  <h2>Minimal Decor</h2>
  <p>Decorative elements are kept to a minimum. When used, they are often statement pieces.
Artwork, sculptures, and unique lighting fixtures are common choices for decoration.</p>
  <a href="#" class="page-btn active now">Readmore
  <i class="fa-solid fa-arrow-right"></i>
  </a>
  
</div>

</section>

 <section class="section_two">
  <div class="container">
    <div class="row">
      <div class="main_img col-md-6">
        <img data-aos="zoom-in" src="ALL images/FLATT-50.jfif" alt="" height="600px" class="img-fluid" >
      </div>
      <div class="main_content col-md-6 ">
        <h2 data-aos="zoom-in">We create the art of modern design</h2>
        <p data-aos="zoom-in-up">Interior work, often referred to as interio construction  or interior finishing, encompasses all the tasks and processes involved in transforming the inside of a building or space to meet functional, aesthetic, and safety requirements. Whether it's a residential, commercial, or industrial space, interior work plays a crucial role in creating a comfortable and visually appealing environment.</p>
        <p data-aos="zoom-in-up">Interior designers prioritize the functionality and usability of a space. They consider factors such as the placement of furniture, accessibility, storage solutions, and the practical needs of the occupants.</p>
        <a data-aos="zoom-in-up" href="tel:+123456789" class="share-icon">
    <i class="fas fa-phone"></i>
    </a>
    <label data-aos="zoom-in-up">+032 0294 0505</label><br><br>
    
   
   
   <a data-aos="zoom-in-up" href="#" class="page-btn">Get free estimate
  <i data-aos="zoom-in-up" class="fa-solid fa-arrow-right"></i>
  </a>


      </div>
    </div>
  </div>
 </section>
 <?php 
 include 'comment.php'
 ?>

 


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>




</body>

<!-- footer section -->
<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Prime Interior
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Design
          </h6>
          <p>
            <a href="#!" class="text-reset">Wall covering papers</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Aluminum Windows</a>
          </p>
          <p>
            <a href="#!" class="text-reset">False Ceiling</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Blinds</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Design</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contact</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Karachi, PAK</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 03202940505</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://primeInterior.com/">primeInterior.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</html>