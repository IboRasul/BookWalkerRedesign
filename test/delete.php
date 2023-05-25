<?php
// Database configuration
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bookstore";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Function to fetch and display all items from the 'book' table
function displayItems()
{
  global $db;

  // TODO: Modify the SQL query based on your 'book' table structure
  $sql = "SELECT * FROM `book`";
  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    $counter = 0;
    while ($book = mysqli_fetch_assoc($result)) {
      if ($counter % 4 === 0) {
        echo "<tr>";
      }
      echo "<td class='alb'>";
      echo "<img src='uploads/".$book['image']."' alt='Book Image'>";
      echo "<div>".$book['bookName']."</div>";
      echo "<button onclick='deleteItem(".$book['id'].")'>Delete</button>";
      ?>
      <button><a href='update.php?<?php echo "id=". $book['id']?>'>update</a></button>

      <?php
      echo "</td>";
      $counter++;
      if ($counter % 4 === 0) {
        echo "</tr>";
      }
    }
    if ($counter % 4 !== 0) {
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "No items found.";
  }
}

// Check if the delete action is triggered
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // TODO: Modify the SQL query based on your 'book' table structure
  $sql = "DELETE FROM book WHERE id = $id";

  if ($db->query($sql) === TRUE) {
    echo "Item deleted successfully.";
  } else {
    echo "Error deleting item: " . $db->error;
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Book List</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style>
    table {
      width: 100%;
      height: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .alb {
      width: 23%;
      margin-bottom: 20px;
      text-align: center;
    }

    .alb img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    @media (max-width: 768px) {
      .alb {
        width: 48%;
      }
    }

    @media (max-width: 480px) {
      .alb {
        width: 100%;
      }
    }
  </style>
  <script>
    function deleteItem(id) {
      var confirmation = confirm("Are you sure you want to delete this item?");
      if (confirmation) {
        window.location.href = "delete.php?id=" + id;
      }
    }
  </script>
</head>

<body>
  <div>
    <?php displayItems(); ?>
  </div>
</body>

</html>
