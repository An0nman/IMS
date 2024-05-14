<div class="sidebar" id="sidebar">
      <h1 id="sidebar-heading">IMS</h1>
      <div class="user-details" id="user-details">
        <img src="img/download.jpeg" alt="user image" />
        <span id="user-details-name"><?= $user['first_name'] .' ' . $user['last_name'] ?></span>
      </div>
      <div class="menu">
        <a href="./dashboard.php" class="menulinks"><i class="fa fa-dashboard menuIcons"></i><span class="menulinksText">Dashboard</span></a>
        <a href="./users_add.php" class="menulinks"><i class="fa fa-user-plus menuIcons"></i><span class="menulinksText">Add Users</span></a>
      </div>
    </div>