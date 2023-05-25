<!DOCTYPE html>
<html>

<head>
	<title>Image Upload Using PHP</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>

<body>
	<?php if (isset($_GET['error'])): ?>
	<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<style>
  body {
    background-color: #f0f0f0;
  }
  pre {
    background-color: #e0e0e0;
    color: #333;
    padding: 10px;
    border-radius: 5px;
    overflow-x: scroll;
  }
  input[type="text"], textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 16px;
  }
  input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }
  input[type="submit"]:hover {
    background-color: #0062cc;
  }
 
  
</style>

<body>
  <form method="POST" enctype="multipart/form-data">
	<h1>Add a New Book</h1>

    <input type="text" name="bookN" placeholder="Book Name">
    <textarea name="bookAbout" placeholder="Book Description"></textarea>
    <input type="text" name="oldPrice" placeholder="Old Price">
    <input type="text" name="currentPrice" placeholder="Current Price">
    <input type="text" name="author" placeholder="Author">
    <input type="file" name="my_image">
    <input type="submit" name="submit" value="Submit">
  </form>
  <a href="../index.php">Back to Bookwalker MainPage</a>
  <a href="update.php">update</a>
  <a href="delete.php">delete</a>

</body>
	</form>
</body>

</html>