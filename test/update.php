<?php require_once "db_conn.php";
            $id = $_GET['id'];
            ?>
<!DOCTYPE html>
<html>
<head>
<!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>Update Book</title>
</head>
<!-- // issue can't update the image but everything else works....  -->
<body>
    <h2>Update Book</h2>
    <form method="GET" action="update.php" enctype="multipart/form-data">


        <label for="bookName" >Book Name:</label>
        <input type="text" name="bookName" id="bookName" ><br><br>

        <label for="bookDescription">Book Description:</label>
        <textarea name="bookDescription" id="bookDescription" ></textarea><br><br>

        <label for="oldPrice">Old Price:</label>
        <input type="number" name="oldPrice" id="oldPrice" ><br><br>

        <label for="currentPrice">Current Price:</label>
        <input type="number" name="currentPrice" id="currentPrice" ><br><br>

        <label for="author">Author:</label>
        <input type="text" name="author" id="author" ><br><br>

        <label for="imageFile">Book Image:</label>
        <input type="file" name="imageFile" id="imageFile" accept="image/*"><br><br>
        
        <input type="hidden" id="custId" name="id" value="<?php echo $_GET['id'] ?>">


        <input type="submit" value="Update" name="update">
    </form>
</body>

</html>
<?php
    if (isset($_GET['update'])) {
        
                // Retrieve the form data
                $bookName = $_GET["bookName"];
                $bookDescription = $_GET["bookDescription"];
                $oldPrice = $_GET["oldPrice"];
                $currentPrice = $_GET["currentPrice"];
                $author = $_GET["author"];
                
                // Retrieve the image file information
                if (isset($_FILES["imageFile"]) || isset($imageFile["name"]) && isset($imageFile["type"]) && isset($imageFile["tmp_name"])) {
                    $imageFile = $_FILES["imageFile"];
                    $imageFileName = $imageFile["name"];
                    $imageFileType = $imageFile["type"];
                    $imageFileTmpName = $imageFile["tmp_name"];
                } 
                
                // Check if a new image is uploaded
                if (!empty($imageFileName)) {
                    // Move the uploaded image to a desired location

                    // The issue is connecting the NEW image with the OLD's location
                    // the upadting of the image isn't deleting and changing
                    // it's adding a new image to the folder
                    // but the old record isn't able to pull from that folder...
                    $targetDirectory = "uploads/";
                    $targetFilePath = $targetDirectory . $imageFileName;
                    move_uploaded_file($imageFileTmpName, $targetFilePath);
                    
                    // Perform the necessary logic to update the book record with the new image file path
            // For example, you can update the database record with the new image file path
                }
            echo "id is " .  $id;
            
            echo "<h2>Book record updated successfully!</h2>";
            echo "id is " .  $id;
            echo "<p>Book Name: " . $bookName . "</p>";
            echo "<p>Book Description: " . $bookDescription . "</p>";
            echo "<p>Old Price: " . $oldPrice . "</p>";
            echo "<p>Current Price: " . $currentPrice . "</p>";
            echo "<p>Author: " . $author . "</p>";
            echo "id is " .  $id;
            $sql2 = "UPDATE `book` SET `bookName` = '$bookName', `about` = '$bookDescription',`oldPrice` = '$oldPrice', `currentPrice` = '$currentPrice', `author` = '$author' WHERE `book`.`id` = '$id'";
            if (
                mysqli_query($conn ,$sql2)) {
                echo "help me this isn't work....";
            }
                if (!empty($imageFileName)) {
                    echo "<p>Image Updated. New Image File: <img src='" . $targetFilePath . "' alt='Book Image'></p>";
                }
        
    }
?>
<a href="index.php">insert Page</a>