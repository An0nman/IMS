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
    <div class="sidebar" id="sidebar">
      <h1 id="sidebar-heading">IMS</h1>
      <div class="user-details" id="user-details">
        <img src="img/download.jpeg" alt="user image" />
        <span id="user-details-name"><?= $user['first_name'] .' ' . $user['last_name'] ?></span>
      </div>
      <div class="menu">
        <a href="" class="menulinks"><i class="fa fa-dashboard menuIcons"></i><span class="menulinksText">Dashboard</span></a>
        <a href="" class="menulinks"><i class="fa fa-bullhorn menuIcons"></i><span class="menulinksText">Campaigns</span></a>
        <a href="" class="menulinks"><i class="fa fa-dollar-sign menuIcons"></i><span class="menulinksText">Revenue Management</span></a>
        <a href="" class="menulinks"><i class="fa fa-book menuIcons"></i><span class="menulinksText">Accounts Receivable</span></a>
        <a href="" class="menulinks"><i class="fa fa-gears menuIcons"></i><span class="menulinksText">Configurations</span></a>
        <a href="" class="menulinks"><i class="fa fa-chart-line menuIcons"></i><span class="menulinksText">Stats</span></a>
      </div>
    </div>
    <div class="content">
      <div class="top-bar">
        <a href="" id="togglebtn"><i class="fa fa-navicon"></i></a>
        <a href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
      </div>
      <div class="content-items"></div>
    </div>
  </div>
  <script src="Dscript.js?v=<?= $version ?>"></script>
</body>

</html>