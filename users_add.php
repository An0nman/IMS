<?php
session_start();
if (!isset($_SESSION['user'])) header('Location: login.php');
$user = ($_SESSION['user']);
include 'custom/config.php';
$msg = "";

// Fetch users from database
try {
    include 'database/database.php'; // Include the database connection
    $stmt = $conn->prepare("SELECT first_name, last_name, username, email, created_at, updated_at FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://kit.fontawesome.com/8cd3699074.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="styles/dashboardstyles.css?v=<?= $version ?>" />
  <link rel="stylesheet" type="text/css" href="styles/user_add.css?v=<?= $version ?>" />
</head>

<body>
  <div class="Dashboard-page">
    <?php include("partials/app-Dsidebar.php") ?>
    <div class="content">
      <?php include("partials/app-Dtopbar.php") ?>
      <div class="content-items">
        <form action="database/add.php" method="POST" class="user_add_form">
          <label for="first_name">First name</label>
          <input type="text" id="first_name" name="first_name">
          <label for="last_name">Last name</label>
          <input type="text" id="last_name" name="last_name">
          <label for="username">User name</label>
          <input type="text" id="username" name="username">
          <label for="password">Password</label>
          <input type="password" id="password" name="password">
          <label for="email">Email</label>
          <input type="text" id="email" name="email">
          <input type="hidden" id="table" name="user">
          <button type="submit"><i class="fa fa-plus"></i>Add User</button>
        </form>

        <!-- User List Section -->
        <div class="user_list_table">
          <h2>User List</h2>
          <table>
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user) : ?>
                <tr>
                  <td><?= htmlspecialchars($user['first_name']); ?></td>
                  <td><?= htmlspecialchars($user['last_name']); ?></td>
                  <td><?= htmlspecialchars($user['username']); ?></td>
                  <td><?= htmlspecialchars($user['email']); ?></td>
                  <td><?= htmlspecialchars($user['created_at']); ?></td>
                  <td><?= htmlspecialchars($user['updated_at']); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="js/Dscript.js?v=<?= $version ?>"></script>
</body>

</html>
