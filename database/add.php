<?php
$msg="";
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'database.php';

    // Debugging: Display the POST data
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    // Sanitize and validate inputs
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Validate inputs
    if (empty($first_name) || empty($last_name) || empty($username) || empty($password)) {
        echo 'All fields are required!';
        exit();
    }

    try {
        // Prepare the SQL statement
        $sql = "INSERT INTO users (first_name, last_name, username, password, email, created_at, updated_at) VALUES (:first_name, :last_name, :username, :password, :email, now(), now())";
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        
        // Execute statement
        if ($stmt->execute()) {
            // echo 'User added successfully!';
            $msg="successfully added";
            header('Location: ../users_add.php');
            // Redirect or further actions
        } else {
            $msg="unsuccessfull";
            $errorInfo = $stmt->errorInfo();
            echo 'SQL Error: ' . $errorInfo[2];
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
