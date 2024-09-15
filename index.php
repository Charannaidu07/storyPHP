<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include "partials/connect.php"; ?>
<div class="container-fluid slider">
    <?php include "partials/header.php"; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img7.jpg" class="d-block w-100" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="images/img5.jpg" class="d-block w-100" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="images/img8.jpg" class="d-block w-100" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

    <!--Container-->
    <div class="container">
        <h1 class="text-center featureTitle mb-5">Features Stories</h1>
        <div class="row">
          <?php
          $sql="Select * from `topics`";
          $result=mysqli_query($con,$sql);
          if($result){
            while($row=mysqli_fetch_assoc($result)){
              $id=$row['topic_id'];
              $topic_image=$row['topic_image'];
              $topic_name=$row['topic_name'];
              $topic_desc=$row['topic_desc'];
              echo '<div class="col-md-4 col-sm-6 mb-5">
          <div class="card" style="width: 18rem;">
            <img src='.$topic_image.'  class="card-img-top" alt="..." style="height:100px; width:100%; object-fit:cover;">
            <div class="card-body">
              <h5 class="card-title">'.$topic_name.'</h5>
              <p class="card-text">'.substr($topic_desc,0,50).'........</p>
              <a href="stories.php?story_id='.$id.'" class="btn btn-primary">Continue Reading</a>
            </div>
          </div>
          </div>';
            }
          }
          ?>
        </div>
    </div>
    <?php include "partials/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QmVLa0pwfWI3x1D5eAaW3FV7KXnFQKEKZb0LQ4JS+EHtOgR5M9PMnlgxXIkABTrV" crossorigin="anonymous"></script>
  </body>
</html>
