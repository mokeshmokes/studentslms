<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // ✅ Safe session start
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Student Platform</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    .glass {
  background: rgba(69, 7, 240, 0.82);
  box-shadow: 0 8px 28px rgba(54, 144, 255, 0.13);
  border-radius: 24px;
  backdrop-filter: blur(14px);
}

.dashboard-header {
  background: linear-gradient(95deg, #006ceb 80%, #7fbcff 100%);
  color: white;
  border-radius: 24px;
  margin-top: 2.5rem;
  margin-bottom: 2.2rem;
  padding: 2.1rem 2.8rem 1.5rem 2.8rem;
  box-shadow: 0 8px 28px rgba(50, 50, 180, 0.18);
  position: relative;
}

.dashboard-title {
  font-size: 2.25rem;
  font-weight: 900;
  letter-spacing: 0.4px;
  margin-bottom: 0.6rem;
}

.welcome {
  font-size: 1.2rem;
  font-weight: 600;
  opacity: 0.95;
  margin-bottom: 1.1rem;
  color: #eaf2fb;
}

.profile-summary {
  background: rgba(255, 255, 255, 0.20);
  border-radius: 20px;
  padding: 1rem 1.7rem;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.13);
  display: flex;
  align-items: center;
  gap: 1rem;
  font-weight: 500;
}

  </style>
</head>

<body>
  <!-- Dashboard Header -->
<div class="dashboard-header glass">
  <div class="dashboard-title">Student_Friendly Portal</div>
  <div class="welcome">
    Welcome back, <span style="color:#ffe66d">
      <?php echo isset($_SESSION['username0']) ? $_SESSION['username0'] : 'Guest0'; ?>
      <?php echo isset($_SESSION['username1']) ? $_SESSION['username1'] : 'Guest1'; ?>
    </span>! 👋
  </div>
  <div class="profile-summary">
    <i class="fa-solid fa-circle-user fa-2x"></i>
    <div>
      <div>Username: <span style="font-weight:700;">
        <?php echo isset($_SESSION['username0']) ? $_SESSION['username0'] : 'Guest0'; ?>
        <?php echo isset($_SESSION['username1']) ? $_SESSION['username1'] : 'Guest1'; ?>
      </span></div>
      <div>Email: <span style="font-weight:700;">
        <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Available'; ?>
      </span></div>
    </div>
  </div>
</div>

</body>