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

    <?php require_once "test/db_conn.php"?>

    <!-------- font awesome cdn link --------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />


    <!------- swipper cdn link ------------>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="css/signup.css">


</head>

<body class="">
    
    <div class="">

       <?php include_once "header.php"?>

        <center>

            <div style="position: relative; top: 100xp;">
                
            <div class="wrapper">
                <h2>Registration</h2>
                <!-- action upload to db ::: method post -->
                <form action="signup.php" method="post" >
                    <div class="input-box">
                        <input type="text" placeholder="Enter your username" required name="username">
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Enter your email" required name="email"> 
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Create password" required name="password">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Confirm password" required name="confirmPassword">  
                    </div>

                    <select required name="userType" style="margin-bottom:30px;">
                        <option value="user">
                            regular User
                        </option>
                        <option value="admin">
                            Admin
                        </option>
                    </select>  

                    <div class="policy">
                        <input type="checkbox" required>
                        <h3>I accept all terms & condition</h3>
                    </div>

                    <div class="input-box button">
                        <input type="Submit" value="Register Now">
                    </div>
                    <div class="text">
                        <h3>Already have an account? <a href="#">Login now</a></h3>
                    </div>
                </form>
            </div>
    
            </div>

        </center>

    </div>
</body>

</html>