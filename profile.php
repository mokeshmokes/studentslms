<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // ✅ Safe session start
}
?>
<?php include('headericon.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profile</title>
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    .profile-card {
      max-width: 400px;
      margin: 50px auto;
      background-color: #f1f1f1;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .profile-icon {
      font-size: 80px;
      color: gray;
    }

    .profile-field {
      font-size: 18px;
      margin: 10px 0;
      text-align: left;
    }

    @media (max-width: 576px) {
      .profile-card {
        margin: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="profile-card text-center">
      <i class="fas fa-user-tie profile-icon"></i>
      <div class="profile-field"><strong>Name:</strong> <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></div>
      <div class="profile-field"><strong>Email:</strong> <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Available'; ?></div>
      <div class="profile-field"><strong>Mobile:</strong> <?php echo isset($_SESSION['mobileno']) ? $_SESSION['mobileno'] : 'Not available'; ?></div>
      <div class="profile-field"><strong>Password:</strong> <?php echo isset($_SESSION['password']) ? $_SESSION['password'] : 'Not available'; ?></div>
    </div>
  </div>
</body>
</html>
<br><br>
<?php include('footer.php'); ?>
