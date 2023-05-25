<?php
    require_once("test/db_conn.php");

  if (isset($_GET['id'])) {
    $book_id = $_GET['id'];
    $uid = $_SESSION['user_username'];
    echo "BookId = ".$book_id;
    echo "UserId = ".$uid;
    
//    "INSERT INTO `wishlist` (`id`, `user_id`, `book_id`, `created_at`) VALUES (NULL, $uid, $book_id, current_timestamp())";




  }
    

?>