<?php require_once "test/db_conn.php";

if (isset($_POST['submit'])) {
        
    if( empty(!$_POST['email']) && empty(!$_POST['pass'])){
        $email = $_POST['email'];
        $pass  = $_POST['pass'];
        // $email = mysqli_real_escape_string($conn, $_POST['email']);
        // $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
        $result = mysqli_query($conn , $sql);

        if (mysqli_num_rows($result) > 0) 

            $row = mysqli_fetch_assoc($result);
            if($row['typeOfUser'] == 'admin'){

                $_SESSION['admin_username'] = $row['username'];
                $_SESSION['admin_email'] = $row['email'];
                $_SESSION['admin_id'] = $row['id'];
                header('location:admin_page.php');
    
            }elseif($row['typeOfUser'] == 'user'){
    
                $_SESSION['user_username'] = $row['username'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_id'] = $row['id'];
                header('location:index.php');
    
            }
            }
            else {
                echo "Failed";
            }
        }else{
            echo "No Values entered<br>";
            echo "return back to home page<br>";
            echo "<a href='index.php'>Home Page</a>";
        }
    // get email and pass from input