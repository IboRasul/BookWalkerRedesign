<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Product Card/Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once "../test/db_conn.php"; ?>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />

</head>

<body>
<?php include_once "../header.php"; ?>

  <?php 
$id = $_GET['id'];
$sql = "SELECT * FROM book WHERE id = $id ORDER BY id DESC";
$res = mysqli_query($conn, $sql);
mysqli_num_rows($res);
$book = mysqli_fetch_assoc($res)
?>


  <div class="">
    <div class="card">
      <!-- card left -->
      <div class="product-imgs">
        <div class="img-display">
          <div class="img-showcase">
            <img src="../test/uploads/<?php echo $book['image'] ?>" alt="">
          </div>

        </div>
      </div>
      <!-- card right -->
      <div class="product-content" style="font-size: large">
        <h2 class="product-title"><?php echo $book['bookName'] ?>"</h2>
        <a href="../index.php" class="product-link">visit Bookwalker Site</a>
        <div class="product-rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>4.7(21)</span>
        </div>

        <div class="product-price">
          <p class="last-price" style="font-size:large">Old Price: <span>$<?php echo $book['oldPrice'] ?></span></p>
          <p class="new-price" style="font-size:large">New Price: <span>$<?php echo $book['currentPrice'] ?></span></p>
        </div>

        <div class="product-detail">
          <h2>about this item: </h2>
          <p style="font-size:large">
            about 
          <?php echo $book['about'] ?>
          </p>

          <p style="font-size:medium"> NOTE: All book are for sale please make a purchase it will be highly appericated :D thank you very much.</p>
          <!-- <ul>
            <li>Color: <span>Black</span></li>
            <li>Available: <span>in stock</span></li>
            <li>Category: <span>Shoes</span></li>
            <li>Shipping Area: <span>All over the world</span></li>
            <li>Shipping Fee: <span>Free</span></li>
          </ul> -->
        </div>

        <div class="purchase-info">
          <input type="number" min="0" value="1" style="background-color:darkgray">
          <button type="button" class="btn">
          <a href="#" onclick="alert('Added to Favorites')" style="color:white;">
            Add to Cart <i class="fas fa-shopping-cart" onclick="alert('Added to Favorites') " style="color:white;"></i>
            </a>

          </button>

        </div>

        <div class="social-links">
          <p>Share At: </p>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a href="#">
            <i class="fab fa-pinterest"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <section class="footer">

<div class="box-container">

    <div class="box">
        <h3>our locations</h3>
        <a href=""><i class="fas fa-map-marker-alt"></i>india</a>
        <a href=""><i class="fas fa-map-marker-alt"></i>USA</a>
        <a href=""><i class="fas fa-map-marker-alt"></i>russia</a>
        <a href=""><i class="fas fa-map-marker-alt"></i>france</a>
        <a href=""><i class="fas fa-map-marker-alt"></i>japan</a>
        <a href=""><i class="fas fa-map-marker-alt"></i>africa</a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href=""><i class="fas fa-arrow-right"></i>home</a>
        <a href=""><i class="fas fa-arrow-right"></i>freatured</a>
        <a href=""><i class="fas fa-arrow-right"></i>arrivals</a>
        <a href=""><i class="fas fa-arrow-right"></i>blogs</a>

    </div>

    <div class="box">
        <h3>extra links</h3>
        <a href=""><i class="fas fa-arrow-right"></i>account info</a>
        <a href=""><i class="fas fa-arrow-right"></i>ordered items</a>
        <a href=""><i class="fas fa-arrow-right"></i>privacy policy</a>
        <a href=""><i class="fas fa-arrow-right"></i>payment method</a>
        <a href=""><i class="fas fa-arrow-right"></i>our services</a>
    </div>


    <div class="box">
        <h3>contact info</h3>
        <a href=""><i class="fas fa-phone"></i>+123-356-546</a>
        <a href=""><i class="fas fa-phone"></i>+123-134-879</a>
        <a href=""><i class="fas fa-envelope"></i>kashum@gmail.com</a>
        <img src="./image/worldmap.png" alt="" class="map">
    </div>
</div>

<div class="share">
    <a href=""><i class="fas fa-facebook"></i></a>
    <a href=""><i class="fas fa-twitter"></i></a>
    <a href=""><i class="fas fa-instagram"></i></a>
    <a href=""><i class="fas fa-linkedin"></i></a>
    <a href=""><i class="fas fa-square-pinterest"></i></a>
</div>

<div class="credit">create by <span>Ibo , Hama , Yousf</span> | all rights reserved</div>

</section>



  <script src="script.js"></script>
</body>

</html>