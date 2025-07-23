<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Header</title>
  <link rel="stylesheet" href="bootstrap.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
    .header {
      width: 100%;
      background-color: ghostwhite;
      padding: 10px 0;
    }
    .profile-box {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      gap: 15px;
    }
    .user-info {
      font-size: 16px;
      text-align: right;
    }
    .user-icon {
      color: gray;
    }

    @media (max-width: 768px) {
      .profile-box {
        flex-direction: column-reverse;
        align-items: center;
        text-align: center;
      }
      .user-info {
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <div class="header">
    <div class="container-fluid">
      <div class="row align-items-center text-center text-md-start">
        <!-- Logo -->
        <div class="col-12 col-md-2 mb-2 mb-md-0 text-center">
          <img src="image/graduated-removebg-preview.png" alt="logo" height="100" width="100">
        </div>

        <!-- Title -->
        <div class="col-12 col-md-6">
          <h1 class="text-center mt-3" style="color: rgba(121, 69, 65, 0.7);">Student_Friendly</h1>
        </div>

        <!-- Profile Info with Icon -->
        <div class="col-12 col-md-4">
          <div class="profile-box">
            <div class="user-info">
              <p>Name: <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></p>
              <p>Email: <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Available'; ?></p>
            </div>
            <i class="fas fa-user-tie user-icon fa-4x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
