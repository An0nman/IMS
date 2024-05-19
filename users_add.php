<?php
session_start();
if(!isset($_SESSION['user'])) header('Location: login.php');
$user = ($_SESSION['user']);
?>
<?php include 'custom/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://kit.fontawesome.com/8cd3699074.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="styles/dashboardstyles.css?v=<?= $version ?>" />
</head>

<body>
  <div class="Dashboard-page">
    <?php include("partials/app-Dsidebar.php") ?>
    <div class="content">
    <?php include("partials/app-Dtopbar.php") ?>
      <div class="content-items">
        <form action="">
          <div>
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name">
          </div>
          <div>
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name">
          </div>
          <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
          </div>
          <button type="submit"><i class="fa fa-plus"></i>Add User</button>
        </form>
      </div>
    </div>
  </div>
  <script src="js/Dscript.js?v=<?= $version ?>"></script>
</body>

</html>