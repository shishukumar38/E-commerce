<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#9d4edd">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d66568a4c8.js" crossorigin="anonymous"></script>
    <title>online market</title>
  </head>
  <body>
<nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-light fixed m-0">
  <div class="container">
    <form class="d-flex m-auto navbar-brand col-sm-12 col-lg-6" action="searchitem.php" method="post">
      <input class="form-control me-2" name="si" type="search" placeholder="Search"  autofocus>
      <button class="btn btn-outline-warning" name="submit1" type="submit">Search</button><i class="far fa-search"></i>
    </form>
    <a class="navbar-brand text-white" href="index.php"><i class="fas fa-home fa-1x"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-primary"></span>
    </button>
    <div class="collapse navbar-collapse container justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link active text-white hov" aria-current="page" href="index.php"><i class="fas fa-home fa-1x"></i>Home</a>
        </li>
        <div class="dropdown">
            <a class="nav-link text-white hov dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              more
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#mansection">Man</a></li>
              <li><a class="dropdown-item" href="#womensection">Women</a></li>
              <li><a class="dropdown-item" href="#babysection">baby</a></li>
            </ul>
          </div>
        <li class="nav-item ">
          <a class="nav-link text-white hov" href="loginpage.php"><i class="fas fa-user fa-1x"></i>login</a>
        </li>


      </ul>
    </div>
  </div>
</nav>
<!-- second navbar -->
<nav class="navbar bg-dark navbar-light">
   <p class="text-white m-auto d-flex text-capitalize branname">online market</p>
</nav>
<!-- second navbar -->
<div class="container-flude">
  <nav class="navbar navbar-expand bg-dark navbar-light">
        <ul class="navbar-nav m-auto">
          <li class="nav-item nib">
            <a class="nav-link active text-white" aria-current="page" href="#furnituresection"><i class="fab fa-hotjar fa-lg"></i>Furniture</a>
          </li>
          <li class="nav-item nib">
            <a class="nav-link text-white " href="#mansection"><i class="fas fa-male fa-lg"></i> Man</a>
          </li>
          <li class="nav-item nib">
            <a class="nav-link text-white " href="#womensection"><i class="fas fa-female fa-lg"></i> Women</a>
          </li>
          <li class="nav-item nib">
            <a class="nav-link text-white " href="#babysection"><i class="fas fa-baby fa-lg"></i> Kids</a>
          </li>
          <li class="nav-item nib">
            <a class="nav-link text-white " href="#kitchensection"><i class="fas fa-plug fa-lg"></i> Kitchen</a>
          </li>
        </ul>
      </div>
  </nav>
