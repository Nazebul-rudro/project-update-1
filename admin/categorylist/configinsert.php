<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=books", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (isset($_SERVER["REQUEST_METHOD"]) == "POST") {
    @$c_name = $_POST['c_name'];
    @$c_details = $_POST['c_details'];
    
    $data = [
        'c_name' => $c_name,
        'c_details' => $c_details,
    ];
    $sql = "INSERT INTO categorylists(c_name, c_details) VALUES(:c_name, :c_details)";
    $stm = $conn->prepare($sql);
    $stm->execute($data);
    
    $_SESSION['category_add_massage'] = "Category Add Successfully";
    

}
header('Location: indexcetegory.php');


?>