<?php
    session_start();
include('custom/config.php');
include('database/database.php');
$error_message = '';
if ($_POST) {
    // var_dump($_POST);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = 'SELECT * FROM users WHERE username=? AND password=?';
    $stmt = $conn->prepare($query);
    $stmt->execute([$username, $password]);


    if ($stmt->rowCount()>0) {
        // Login successful
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user=$stmt->fetchAll()[0];
        $_SESSION['user']=$user;
        header('Location: dashboard.php');
    } else {
        $error_message = 'Please make sure that username and password are correct';
    }
    // var_dump($stmt->rowCount());
    // die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS Login - Inventory Management System</title>
    <link rel="stylesheet" type="text/css" href="styles/loginstyles.css?v=<?= $version ?>">
</head>

<body>
    <div class="container">
        <?php if (!empty($error_message)) { ?>
            <div id="error">
                <p>Error:<?= $error_message ?></p>
            </div>
        <?php } ?>
        <div class="loginHeader">
            <h1>IMS</h1>
            <h3>Inventory Management System</h3>
        </div>
        <div class="loginBody">
            <form action="login.php" method="POST">
                <!-- <?php echo $connecting_state; ?> -->
                <label for="">Username</label>
                <input type="text" name="username" placeholder="anon@man">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="passward@12">
                <button>Login</button>
            </form>
        </div>
    </div>
</body>

</html>