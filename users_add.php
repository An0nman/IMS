<?php
session_start();
if(!isset($_SESSION['user'])) header('Location: login.php');
$user = ($_SESSION['user']);
?>
<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://kit.fontawesome.com/8cd3699074.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="dashboardstyles.css?v=<?= $version ?>" />
</head>

<body>
  <div class="Dashboard-page">
    <?php include("partials/app-Dsidebar.php") ?>
    <div class="content">
    <?php include("partials/app-Dtopbar.php") ?>
      <div class="content-items"></div>
    </div>
  </div>
  <script src="Dscript.js?v=<?= $version ?>"></script>
</body>

</html>