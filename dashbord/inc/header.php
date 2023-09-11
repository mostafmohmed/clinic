<?php
session_start();
 $a= $_SESSION['role'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar<?php var_dump($a);?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <?php if($a=="admin"){        ?>
        <li class="nav-item">
          <a class="nav-link" href="Doctors.php">Doctors</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="majors.php">major</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="users.php">users</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="massage.php">massage</a>
        </li>
        <?php if($a=="doctor"){ ?>
        <li class="nav-item">
          <a class="nav-link" href="booking.php">Booking</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>