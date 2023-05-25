<!DOCTYPE html>
<html lang="en">
<!-- FILE NOT IN USE  -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gradient-to-br from-blue-600 to-pink-500">

    <form method="get" class="flex justify-center items-center h-screen">

        <div class="container p-4 rounded-lg shadow-lg bg-white">
            <h1 class="text-4xl font-bold mb-4">Name</h1>
            <input type="text" name="Name" class="w-full px-4 py-2 rounded-lg mb-4 border border-violet-500">

            <h1 class="text-4xl font-bold mb-4">Email</h1>
            <input type="text" name="Email" class="w-full px-4 py-2 rounded-lg mb-4 border border-violet-500">

            <h1 class="text-4xl font-bold mb-4">Address</h1>
            <input type="text" name="Address" class="w-full px-4 py-2 rounded-lg mb-4 border border-violet-500">

            <button type="submit" value="Submit"name="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
              Submit 
            </button>
        </div>


    </form>

    <?php 
$hostName = "localhost";
$userName = "root";
$password = ""; 
$dbName = "assignment4";
$conn = mysqli_connect($hostName , $userName , $password , $dbName);


if(isset($_GET['submit'])){
$name = $_GET['Name'];
$email = $_GET['Email'];
$address = $_GET['Address'];
echo $name;

$sql = "INSERT INTO `students` (`id`, `name`, `email`, `address`) VALUES (NULL, '$name', '$email', '$address')";
$result = mysqli_query($conn ,$sql);
header("location:index.php");
}
?>


</body>

</html>