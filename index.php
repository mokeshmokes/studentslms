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
      background: #f7faff;
      font-family: 'Segoe UI', 'Lato', Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .main-bg {
      background: #fff;
      border-radius: 26px;
      margin: 36px auto 40px auto;
      box-shadow: 0 4px 32px #006ceb17;
      max-width: 950px;
      padding-bottom: 30px;
    }
    .navbar {
      border-radius: 26px 26px 0 0;
      background: #fff;
      box-shadow: 0 4px 18px #006ceb12;
      padding: 12px 0;
    }
    .navbar-brand, .nav-link {
      color: #006ceb !important;
      font-weight: 600;
    }
    .nav-link.active, .nav-link:hover {
      background: #e5eefc;
      border-radius: 18px;
    }
    .navbar-brand {
      font-weight: 700;
      font-size: 1.45rem;
    }
    .btn-login, .btn-register {
      border-radius: 25px;
      font-weight: 600;
      padding: 8px 22px;
      margin-left: 10px;
      font-size: 1rem;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 1px 8px #006ceb30;
      border: none;
      color: white;
    }
    .btn-login {
      color: white;
      background-color: #006ceb;
    }
    .btn-login:hover {
     background-color: red;
      color: white;
    }
    .btn-register {
      color: white;
      background-color: #006ceb;
    }
    .btn-register:hover {
      background-color: green;
      color: white;
    }
    .hero-title {
      color: #006ceb;
      font-weight: 700;
      font-size: 2.2rem;
      margin-top: 40px;
      text-align: center;
    }
    .hero-subtitle {
      color: #455;
      font-size: 1.1rem;
      margin-bottom: 20px;
      text-align: center;
      max-width: 520px;
      margin-left: auto;
      margin-right: auto;
    }
    .btn-getstarted {
      background: #006ceb;
      color: #fff;
      border-radius: 24px;
      font-size: 1.1rem;
      font-weight: 600;
      padding: 11px 36px;
      margin-bottom: 34px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0 3px 16px #006ceb80;
      transition: background-color 0.25s ease;
    }
    .btn-getstarted:hover {
      background-color: #004a9f;
      box-shadow: 0 7px 26px #004a9faa;
    }
    .feature-card {
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 2px 20px #006ceb15;
      padding: 22px 18px;
      text-align: center;
      min-height: 144px;
    }
    .feature-icon {
      background: #eaf5ff;
      color: #006ceb;
      font-size: 2.3rem;
      border-radius: 14px;
      padding: 12px;
      margin-bottom: 13px;
      box-shadow: 0 2px 12px #006ceb30;
    }
    .feature-title {
      color: #006ceb;
      font-weight: 600;
      margin-bottom: 7px;
    }
    .feature-desc {
      color: #4d4d4d;
      font-size: 1rem;
    }
    .popular-title {
      color: #006ceb;
      font-weight: 700;
      margin: 40px 0 18px 0;
      text-align: center;
    }
    .course-card {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 1px 10px #006ceb14;
      padding: 14px 18px;
      min-height: 95px;
      text-align: left;
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .course-thumb {
      width: 44px;
      height: 44px;
      background: #eaf5ff;
      border-radius: 11px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      color: #006ceb;
      box-shadow: 0 2px 8px #006ceb40;
    }
    .course-title {
      font-weight: 600;
      color: #006ceb;
      margin-bottom: 2px;
    }
    .course-desc {
      color: #888;
      font-size: 0.96rem;
      margin-bottom: 0;
    }
    .ready-section {
      text-align: center;
      margin-top: 40px;
      margin-bottom: 20px;
    }
    .ready-bg {
      background: #006ceb;
      color: #fff;
      border-radius: 36px;
      padding: 30px 20px;
      box-shadow: 0 10px 42px #c1dfff;
      max-width: 480px;
      margin: auto;
    }
    .ready-bg > div:first-child {
      font-size: 1.25rem;
      font-weight: 700;
      margin-bottom: 10px;
    }
    .ready-bg > div:nth-child(2) {
      margin-bottom: 18px;
      font-size: 1rem;
    }
    .ready-bg .btn {
      background: white;
      color: #006ceb;
      font-weight: 600;
      border-radius: 24px;
      padding: 8px 36px;
      box-shadow: 0 2px 14px #004a9f7a;
      transition: background-color 0.25s ease;
      border: none;
      font-size: 1rem;
    }
    .ready-bg .btn:hover {
      background-color: #eaf5ff;
      box-shadow: 0 8px 26px #004a9f8f;
      color: #004a9f;
    }

    /* Footer styles */
    footer {
      background: #f0f4ff;
      color: #004aad;
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
      color: #0075ff;
      opacity: 0.9;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    footer a:hover {
      color: #ffd700;
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
      color: #ffd700;
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
      color: #004aad;
      user-select: none;
    }

    /* Responsive */
    @media (max-width: 991px) {
      footer h4 {
        font-size: 24px;
      }
    }

    @media (max-width: 575px) {
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
  <div class="main-bg">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="image/graduated-removebg-preview.png" alt="Logo" width="40" height="40" class="me-2" />
          Students_Friend
        </a>
        <div class="d-flex ms-auto gap-3 align-items-center">
          <a href="login.php" class="btn btn-login">Login</a>
          <a href="register.php" class="btn btn-register">Register</a>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="text-center px-4">
      <div class="hero-title">Your Academic Journey Starts Here</div>
      <div class="hero-subtitle">Empower yourself with flexible learning, comprehensive resources, and personalized progress tracking.</div>
      <a href="#" class="btn btn-getstarted">Get Started</a>
    </div>

    <!-- Features -->
    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-clock"></i></div>
            <div class="feature-title">Learn at Your Pace</div>
            <div class="feature-desc">Flexible modules adapt to your schedule.</div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="feature-card">
            <div class="feature-icon"><i class="fas fa-book"></i></div>
            <div class="feature-title">Access Resources</div>
            <div class="feature-desc">Explore a vast library of study materials.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="syllabus">
      <div class="popular-title">TN Syllabus</div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="course-card">
            <div class="course-thumb"><i class="fas fa-robot chatbot-icon"></i></div>
            <div>
              <div class="course-title">Chatbot</div>
              <div class="course-desc">For Clearing your Doubts.</div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="course-card">
            <div class="course-thumb"><i class="fa-solid fa-video"></i></div>
            <div>
              <div class="course-title">Videos</div>
              <div class="course-desc">For Better Understanding</div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="course-card">
            <div class="course-thumb"><i class="fa-solid fa-book-open"></i></div>
            <div>
              <div class="course-title">Books &amp; Guides</div>
              <div class="course-desc">For learning manually</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Registration Banner -->
    <div class="ready-section">
      <div class="ready-bg">
        <div>Ready to Begin?</div>
        <div>Join thousand of students achieving dreams.</div>
        <a href="register.php" class="btn">Register Now</a>
      </div>
    </div>

    <!-- Footer -->
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

  </div>
</body>
</html>