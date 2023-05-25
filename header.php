<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
.header .header-1 {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.5rem 9%;
    background: #fff;
}

.header .header-1 .logo {
    font-size: 2.5rem;
    font-weight: bolder;
    color: var(--black);
}

.header .header-1 .logo i {
    color: var(--blue);
}

.header .header-1 .search-form {
    width: 50rem;
    height: 5rem;
    border: var(--border);
    overflow: hidden;
    background-color: #fff;
    display: flex;
    align-items: center;
    border-radius: 0.5rem;
}

.header .header-1 .search-form input {
    font-size: 1.6rem;
    padding: 0 1.2rem;
    height: 100%;
    width: 100%;
    text-transform: none;
    color: var(--black);
}

.header .header-1 .search-form label {
    font-size: 2.5rem;
    padding-right: 1.5rem;
    color: var(--black);
    cursor: pointer;
}

.header .header-1 .search-form label:hover {
    color: var(--blue);
}

.header .header-1 .icons div,
.header .header-1 .icons a {
    font-size: 2.5rem;
    margin-left: 1.5rem;
    color: var(--black);
    cursor: pointer;
}

.header .header-1 .icons div:hover,
.header .header-1 .icons a:hover {
    color: var(--blue);
}

#search-btn {
    display: none;
}

.header .header-2 {
    background-color: var(--blue);
}

.header .header-2 .navbar {
    text-align: center;
}

.header .header-2 .navbar a {
    color: #fff;
    display: inline-block;
    padding: 1rem;
    font-size: 1.7rem;
}

.header .header-2 .navbar a:hover {
    background: var(--dark-color);
}

.header .header-2.active {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

@media (max-width: 991px) {
    .header .header-1 {
        padding: 2rem;
    }
}

@media (max-width: 768px) {
    html {
        scroll-padding-top: 0;
    }

    body {
        padding-bottom: 6rem;
    }

    .header .header-2 {
        display: none;
    }

    .header .header-1 {
        box-shadow: var(--box-shadow);
        position: relative;
    }

    .header .header-1 .search-form {
        position: absolute;
        top: -115%;
        right: 2rem;
        width: 90%;
        box-shadow: var(--box-shadow);
    }

    .header .header-1 .search-form.active {
        top: 115%;
    }

    #search-btn {
        display: inline-block;
    }
}

@media (max-width: 450px) {
    html {
        font-size: 50%;
    }
}
    </style>



</head>

<body>
    <header class="header">

        <div class="header-1">

            <a href="../index.php" class="logo"><img src="C:\Users\ibora\Desktop\anime\bookwalker.png" alt=""> BookWalker</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="../detailPage/wishlist.php" class="fas fa-heart"></a>
                <a href="../card.php" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
                <?php if (isset($_SESSION['user_username'])) {
                                echo "<h3 style='display:inline; margin-left:5px;  margin-bottom:10px;'>"?> <?php echo $_SESSION['user_username'] ."</h3>";

                }?>


            </div>

        </div>

        <div class="header-2">

            <div class="navbar">
                <a href=""> </a>
                <a href="../index.php" style="color:white; background-color:blue;">home</a>
                <a href=""> </a>
                
            </div>

        </div>

    </header>

    <!--------- header section ends ------------>

    <!--------- bottom navbar  ------------>

    <div class="bottom-navbar">
        <a href="../index.php" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-app-store"></a>
    </div>


    <!-------- bottom navbar start ----------->

    <div class="bottom-navbar">
        <a href="index.php" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-app-store"></a>
    </div>


</body>

</html>