<!DOCTYPE html>

<?php include 'connect.php' ; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    
</head>
<body>

<header>
    <div class="nav-top  container-fluid">
        <div class="head-social d-flex ">
            
            <ul class="d-flex">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""> <i class="fa-brands fa-youtube"></i></a></li>
                <li><a href=""> <i class="fa-brands fa-instagram"></i></a></li>
            </ul>
            
            <ul class="p-1 pt-2" >
                <li class="">
                    <input type="text" placeholder="searching" class="p-1">
                   <button > <i class="fa-solid fa-magnifying-glass"></i></button>
                   
                </li>
            </ul>

        </div>
    </div>

    <div class="main-logo text-center m-3">
      <h1 class=" fw-bold">Wordify</h1>
    </div>

    <nav class="navbar navbar-expand  navbar-light bg-light m-4">
  <div class="container-fluid">
    
   
    <div class="m-auto" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Business</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Travel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
           
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
    
</header>

<section class="slider">

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="media/banner1.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/banner2.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/banner3.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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

</section>

<section class="post d-flex" >
  <div class="post-content w-75 row ">

 

<div class="card col-md-6 col-sm-12" >
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card col-md-6 col-sm-12" >
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card col-md-6 col-sm-12" >
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card col-md-6 col-sm-12" >
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


  </div>
  <div class="sidecontent w-25">
    <div class="recent-post p-4">
      <h2>Recent Post </h2>
      <ul>
        <li><a href="#">recent1</a></li>
        <li><a href="#">Recent2</a></li>
        <li><a href="#">recent3</a></li>
        <li><a href="#">recent4</a></li>
      </ul>
    </div>
  </div>
</section>

  <footer class="">
    <div class="container-fluid footer">
    <div class="recent1 p-4">
      <h2>Recent Post </h2>
      <ul>
        <li><a href="#">recent1</a></li>
        <li><a href="#">Recent2</a></li>
        <li><a href="#">recent3</a></li>
        <li><a href="#">recent4</a></li>
      </ul>
    </div>

    <div class="recent2 p-4">
      <h2>Recent Post </h2>
      <ul>
        <li><a href="#">recent1</a></li>
        <li><a href="#">Recent2</a></li>
        <li><a href="#">recent3</a></li>
        <li><a href="#">recent4</a></li>
      </ul>
    </div>
    </div>
  </footer>

<script src="js/bootstrap.bundle.js"></script>
</body>
</html>