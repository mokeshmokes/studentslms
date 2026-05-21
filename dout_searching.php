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

    body {
      overflow-x: hidden; /* ✅ Prevent horizontal scroll */
      background: #f8f9fa; 
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    .search-box {
      background: #ffffff;
      border-radius: 12px;
      padding: 30px;
      width: 50%;
      margin: 40px auto;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      position: relative;
    }
    
    .search-title {
      text-align: center;
      font-size: 30px;
      font-weight: 600;
      color: #0dcaf0;
      margin-bottom: 25px;
    }
    @media (max-width: 768px) {
      .search-box {
        width: 95% !important;
        padding: 20px;
      }
      .search-title {
        font-size: 24px;
      }
    }

    .glass {
  background: rgba(255, 255, 255, 0.82);
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
/* Footer styles */
    footer {
      background: #f0f4ff;
      color: #006ceb;
      padding: 40px 20px 30px;
      margin-top: 3rem;
      border-radius: 24px;
      box-shadow: 0 8px 28px rgba(0, 110, 255, 0.15);
      user-select: none;
    }

    footer h4 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 20px;
      border-bottom: 3px solid #006ceb;
      display: inline-block;
      padding-bottom: 6px;
      letter-spacing: 1px;
      color: #004aad;
    }

    footer p,
    footer a {
      font-size: 16px;
      color: #006ceb;
      opacity: 0.9;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    footer a:hover {
      text-decoration: underline;
    }

    .social-icons a {
      color: #006ceb;
      margin: 0 10px;
      transition: transform 0.3s ease, color 0.3s ease;
      display: inline-block;
      user-select: none;
    }

    .social-icons a:hover {
      transform: scale(1.3);
    }

    iframe {
      max-width: 100%;
      border-radius: 12px;
      margin-top: 15px;
      box-shadow: 0 4px 15px rgba(0, 110, 255, 0.15);
      border: none;
      user-select: none;
    }

    .footer-bottom {
      text-align: center;
      margin-top: 35px;
      font-size: 14px;
      opacity: 0.8;
      border-top: 1px solid #cce0ff;
      padding-top: 15px;
      letter-spacing: 0.5px;
      color: #006ceb;
      user-select: none;
    }

    /* Responsive */
    @media (max-width: 991px) {
      .dashboard-header {
        padding: 1.1rem 1rem;
      }

      .dashboard-title {
        font-size: 1.16rem;
      }

      footer h4 {
        font-size: 24px;
      }
    }

    @media (max-width: 575px) {
      .dashboard-header {
        padding: 0.7rem 0.2rem;
      }

      .dashboard-cards h5 {
        font-size: 0.97rem;
      }

      .action-buttons .btn {
        font-size: 0.95rem;
      }

      footer {
        padding: 30px 15px 20px;
      }

      footer h4 {
        font-size: 20px;
      }

      footer p,
      footer a {
        font-size: 14px;
      }

      .social-icons a {
        margin: 0 8px;
      }
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
<br><br><br>
 <div class="container search-box">
    <p class="search-title">Doubt Searching</p>
    <script async src="https://cse.google.com/cse.js?cx=137e9384838bb46cb"></script>
    <div class="gcse-search"></div>
    
  </div>
  <a href="allicon.php"><button class="btn btn-danger" style="margin-left: 47%; padding:10px auto">Back</button></a>
  <br><br><br>
  
  <footer>
      <div class="container">
        <div class="row text-center text-md-start">
          <!-- About Section -->
          <div class="col-12 col-md-4 mb-5 mb-md-0 px-3 px-md-4">
            <h4>About</h4>
            <p>
              Student_Friendly is a smart web portal made for students to easily access study materials.
              It provides notes, practice questions, previous year papers, and learning videos.
              The platform helps students prepare better and stay organized.
              Its responsive design works well on both mobile and desktop.
            </p>
          </div>

          <!-- Contact Section -->
          <div class="col-12 col-md-4 mb-5 mb-md-0 px-3 px-md-4">
            <h4>Contact Us</h4>
            <a href="tel:+919786379774" class="d-block mt-3">
              <i class="fa-solid fa-phone me-2"></i> +91 9786379774
            </a>
            <a href="mailto:mokeshmokesh777it@gmail.com" class="d-block mt-3">
              <i class="fa-solid fa-envelope me-2"></i> mokeshmokesh777it@gmail.com
            </a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d471.89685675426966!2d79.35538226456946!3d13.112112851454821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1751642886143!5m2!1sen!2sin" width="100%" height="160" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-label="Google Map Location"></iframe>
          </div>

          <!-- Social Media Section -->
          <div class="col-12 col-md-4 px-3 px-md-4">
            <h4>Social Media</h4>
            <div class="social-icons mt-4">
              <a href="#" aria-label="Google" title="Google"><i class="fa-brands fa-google fa-2x"></i></a>
              <a href="https://www.facebook.com/profile.php?id=61550823523326" target="_blank" rel="noopener noreferrer" aria-label="Facebook" title="Facebook"><i class="fa-brands fa-facebook fa-2x"></i></a>
              <a href="https://wa.me/919786379774" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" title="WhatsApp"><i class="fa-brands fa-whatsapp fa-2x"></i></a>
              <a href="https://x.com/Mokesh777it" target="_blank" rel="noopener noreferrer" aria-label="Twitter" title="Twitter"><i class="fa-brands fa-twitter fa-2x"></i></a>
              <a href="https://www.linkedin.com/in/v-mokesh-7351a3345/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" title="LinkedIn"><i class="fa-brands fa-linkedin fa-2x"></i></a>
              <a href="https://github.com/mokeshmokes" target="_blank" rel="noopener noreferrer" aria-label="GitHub" title="GitHub"><i class="fa-brands fa-github fa-2x"></i></a>
            </div>
          </div>
        </div>
        <div class="footer-bottom mt-4 text-center text-muted" style="font-size: 14px;letter-spacing: 0.5px;">
          © 2025 Student_Friendly | All Rights Reserved
        </div>
      </div>
    </footer>
</body>
</html>
<br><br>


</body>