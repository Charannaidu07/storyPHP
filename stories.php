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
<?php include "partials/header.php"; ?>
<!--php code-->
<?php
$id=$_GET['story_id'];
$sql="select * from `topics` where topic_id=$id";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $topic_image=$row['topic_image'];
    $topic_name=$row['topic_name'];
    $topic_desc=$row['topic_desc'];
    $topic_story=$row['topic_story'];
}
?>
<!--jumbutron-->
<div class="container-fluid">
<div class="jumbotron bg-warning rounded">
<div class="container">
<h1 class="display-4"><?php echo $topic_name;?></h1>
<p class="lead" ><?php echo $topic_desc;?></p>
<button class="btn btn-dark mb-2"><a class="text-light" href="#reading" role="button">Continue Reading</a></button>
</div></div></div>
<div class="container-fluid slider">
        <div id="carouselExampleIndicators" class="carousel slide">
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
<!--Reading-->
<div class="container" id="reading">
<div class="jumbotron jumbotron-fluid bg-warning rounded p-0">
<div class="container">
<h1 class="display-4 text-center">Enjoy Reading!</h1>
<img src="<?php echo $topic_image;?>" class="img-fluid" alt="" style="height:500px; width:1000px; display:block; margin:auto;">
<p class="lead pb-3" ><?php echo $topic_story;?></p>
</div></div>
</div>

<div class="container-fluid mb-4">
    <h2 class="text-center display-4">Thank you for your time😉</h2>
</div>
<br>

<?php include "partials/footer.php"; ?>
</body>
</html>