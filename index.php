<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-------- title ----------->
    <title>Online Book Shop || Web Designer Max</title>

    <!-------- customer style link ----------->
    <link rel="stylesheet" href="./css/style.css">


    <!-------- font awesome cdn link --------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />


    <!------- swipper cdn link ------------>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <?php require_once "test/db_conn.php"; ?>


</head>

<body>

    <!--------- header section start ------------>

    <header class="header">

        <div class="header-1">

            <a href="" class="logo"><img src="C:\Users\ibora\Desktop\anime\bookwalker.png" alt=""> BookWalker</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="detailPage/wishlist.php" class="fas fa-heart"></a>
                <a href="card.php" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
                <?php if (isset($_SESSION["user_username"])) {
                 echo "<h2 style='display:inline; margin-left:5px;  margin-bottom:10px;'>" ?> <?php echo $_SESSION['user_username'] ?> <?="</h2>";
                 echo "<h2 style='display:inline; margin-left:5px;  margin-bottom:10px;'>" ?> <?php echo "<a class='nav-link' href = 'logout.inc.php'> Log out</a>" ?> <?="</h2>";
                 
                }?>
               
               


                <!-- Item here become links -->
            </div>

        </div>

        <div class="header-2">

            <div class="navbar">
                <a href="#home">home</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">reviews</a>
            </div>

        </div>

    </header>

    <!--------- header section ends ------------>

    <!--------- bottom navbar  ------------>

    <div class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>

    </div>


    <!-------- bottom navbar start ----------->

    <div class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-app-store"></a>
    </div>


    <!-------- bottom navbar ends ----------->

    <!-------- login form start ----------->

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="login.php" method="post">

            <h3>Log In</h3>
            <span>email</span>
            <input type="email" name="email" class="box" placeholder="enter your email">
            <span>password</span>
            <input type="password" name="pass" class="box" placeholder="enter your password">

            <div class="check-box">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">remember me</label> <!-- has something todo with cookies or seesions  -->
            </div>

            <input type="submit" value="sign in" class="btn" name="submit">
            <p>forgot password? <a href="">click here</a></p>
            <!-- if click return password... / send email message   -->
            <p>don't have an account ? <a href="signupForm.php">create one</a></p> 
            <p>admin? <a href="test/upload.php">add a book</a></p>  <!-- go to sign up page   -->
            <p><a href="logout.inc.php">LogOut?</a></p>

        </form>

    </div>

    <!-------- login form ends ----------->


    <!-------- home section start ----------->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>upto 55% offers</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sapiente eos quisquam voluptatibus,
                    cum quod.</p>
                <a href="#featured" class="btn">shop now</a>
            </div>

            <!-- Book Swiper -->

            <div class="swiper books-list">
                <!-- Something todo here   -->

                <div class="swiper-wrapper">
                    <a href="" class="swiper-slide"><img src="./image/book-1.png" alt=""></a>

                    <a href="" class="swiper-slide"><img src="./image/book-2.png" alt=""></a>

                    <a href="" class="swiper-slide"><img src="./image/book-3.png" alt=""></a>

                    <a href="" class="swiper-slide"><img src="./image/book-4.png" alt=""></a>

                    <a href="" class="swiper-slide"><img src="./image/book-5.png" alt=""></a>

                    <a href="" class="swiper-slide"><img src="./image/book-6.png" alt=""></a>
                </div>

                <img src="./image/stand.png" class="stand" alt="">

            </div>

            <!-- Book Swiper -->


        </div>

    </section>

    <!-------- home section ends  ----------->

    <!-------- icons section start  ----------->
    <!-- ADDED BORDER REMOVE LATER -->
    <section class="icons-container " >

        <div class="icons">
            <i class="fas fa-plane"></i>
            <div class="content">
                <h3>over payment</h3>
                <p>over payment $100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>secure payment $100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anything</p>
            </div>
        </div>

    </section>

    <!-------- icons section ends  ----------->

    <!-------- featured section start  ----------->

    <section class="featured" id="featured">

        <div class="heading"><span>featured books</span></div>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">

                <?php 
                    
                    $sql = "SELECT * FROM book ORDER BY id DESC";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res) > 0) {
                        while ($book = mysqli_fetch_assoc($res)) {                    
                ?>
                
                <div class="swiper-slide box">
                    <div class="icons">

                    <a href="wishlist.func.php?id=<?php echo $book['id'] ?>" class="heart  fas fa-heart" onclick="alert('Added to Favorites')"></a>
                        <a href="detailPage/index.php?id=<?php echo $book['id'] ?>" class="fas fa-eye"></a>
                    </div>

                    <div class="image">
                        <img src="test/uploads/<?php echo $book['image'] ?>" alt="">
                    </div>

                    <div class="content">
                        <h3><?php echo $book['bookName'] ?></h3>
                        <div class="price"><?php echo $book['oldPrice']."$" ?> <span><?php echo $book['currentPrice']."$"  ?>
                            </span></div>
                            <a href="#" id="add-to-cart" class="btn" onclick="alert('Added to cart')">add to cart</a>
                    </div>
                </div>
                <?php }
} ?>


            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>



    <!-------- featured section ends  ----------->


    <!-------- news letter section start  ----------->

    <section class="newsletter">

        <form action="">

        <form action="phpFiles\contactus.php">
            <h3>Contact Us</h3>
        <button style="background-color: blue; color: white; width: 100px; height: 50px; border-radius: 20px;"><a href="phpFiles/contactus.php" style="color: white; font-size: larger">Contact</a></button>

        </form>
    </section>



    <!-------- news letter section ends  ----------->


    <!-------- arrivals section start  ----------->

    <section class="arrivals" id="arrivals">

        <div class="heading"><span>new arrivals</span></div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <?php 
    
    $sql = "SELECT * FROM book ORDER BY id DESC";
    $res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($book = mysqli_fetch_assoc($res)) {
        ?>
                <a href="detailPage/index.php?id=<?php echo $book['id'] ?>" class="swiper-slide box">
                    <div class="image">
                        <img src="test/uploads/<?php echo $book['image'] ?>" alt="">
                    </div>
                    <div class="content">
                        <h3><?php echo $book['bookName'] ?></h3>
                        <div class="price"> $<?php echo $book['currentPrice']?>.00<span>
                                <?php echo $book['oldPrice']?>.00</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
                <?php }
} ?>


            </div>
        </div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">


                <?php 
    
    $sql = "SELECT * FROM book ORDER BY id DESC";
    $res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($book = mysqli_fetch_assoc($res)) {
        ?>
                <a href="detailPage/index.php?id=<?php echo $book['id'] ?>" class="swiper-slide box">
                    <div class="image">
                        <img src="test/uploads/<?php echo $book['image'] ?>" alt="">
                    </div>
                    <div class="content">
                        <h3><?php echo $book['bookName'] ?></h3>
                        <div class="price"> $<?php echo $book['currentPrice']?>.00<span>
                                <?php echo $book['oldPrice']?>.00</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
                <?php }
} ?>

            </div>
        </div>
    </section>


    <!-------- arrivals section ends  ----------->

    <!-------- Show all Books start  ----------->




    <!-------- Show all Books ends  ----------->


    <!-------- review section start  ----------->

    <section class="reviews" id="reviews">

        <h1 class="heading"><span>client's reviews</span></h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="./image/pic-1.png" alt="">
                    <h3>john deo</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae
                        perferendis cumque nesciunt.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./image/pic-2.png" alt="">
                    <h3>john deo</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae
                        perferendis cumque nesciunt.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./image/pic-3.png" alt="">
                    <h3>john deo</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae
                        perferendis cumque nesciunt.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./image/pic-4.png" alt="">
                    <h3>john deo</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae
                        perferendis cumque nesciunt.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./image/pic-5.png" alt="">
                    <h3>john deo</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae
                        perferendis cumque nesciunt.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="./image/pic-6.png" alt="">
                    <h3>john deo</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eligendi amet recusandae
                        perferendis cumque nesciunt.
                    </p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------- review section ends  ----------->


    <!-------- blog section start  ----------->


    <!-------- blog section ends  ----------->

    <!-------- footer section start  ----------->

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
                <a href=""><i class="fas fa-envelope"></i>IboHamaYousf@gmail.com</a>
                <img src="./image/worldmap.png" alt="" class="map">
            </div>
        </div>


        <div class="credit">create by <span>Ibo , Hama , Yousf</span> | all rights reserved</div>

    </section>





    <!-------- footer section ends  ----------->



    <!---- swiper cdn link ---------->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


    <!------- customer script link --------->

    <script src="./js/script.js"></script>

</body>

</html>