<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Footer - Student_Friendly Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f9fafb;
      margin: 0;
    }

    .glass {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(13px);
      border-radius: 20px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
    }

    footer {
      background: #f0f4ff;
      color: #003d99;
      padding: 50px 20px 30px;
      box-shadow: 0 8px 30px rgba(0, 110, 255, 0.2);
      user-select: none;
      border-radius: 24px;
    }

    footer h4 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 20px;
      border-bottom: 3px solid #006ceb;
      display: inline-block;
      padding-bottom: 6px;
      letter-spacing: 1px;
      user-select: none;
      color: #004aad;
    }

    .footer-text {
      font-size: 16px;
      line-height: 1.7;
      opacity: 0.9;
      margin-top: 10px;
      color: #004aad;
      user-select: text;
    }

    .contactusnumber,
    footer a {
      transition: color 0.3s ease;
      font-weight: 500;
      color: #006ceb;
      user-select: text;
      text-decoration: none;
    }

    footer a:hover {
      color: #ffbf00 !important;
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
      color: #ffbf00 !important;
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
      user-select: none;
      letter-spacing: 0.5px;
      color: #004aad;
    }

    /* Responsive */
    @media (max-width: 992px) {
      footer h4 {
        font-size: 24px;
      }

      .footer-text {
        font-size: 15px;
      }
    }

    @media (max-width: 576px) {
      footer {
        padding: 40px 15px 25px;
      }

      .social-icons a {
        margin: 0 8px;
      }

      footer h4 {
        font-size: 20px;
      }

      .footer-text {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>
  <footer class="glass">
    <div class="container">
      <div class="row text-center text-md-start">
        <!-- About Section -->
        <div class="col-12 col-md-4 mb-5 mb-md-0 px-3 px-md-4">
          <h4>About</h4>
          <p class="footer-text">
            Student_Friendly is a smart web portal made for students to easily access study materials.
            It provides notes, practice questions, previous year papers, and learning videos.
            The platform helps students prepare better and stay organized.
            Its responsive design works well on both mobile and desktop.
          </p>
        </div>

        <!-- Contact Section -->
        <div class="col-12 col-md-4 mb-5 mb-md-0 px-3 px-md-4">
          <h4>Contact Us</h4>
          <a href="tel:+919786379774" class="d-block footer-text mt-3">
            <i class="fa-solid fa-phone me-2"></i> +91 9786379774
          </a>
          <a href="mailto:mokeshmokesh777it@gmail.com" class="d-block footer-text mt-3">
            <i class="fa-solid fa-envelope me-2"></i> mokeshmokesh777it@gmail.com
          </a>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d471.89685675426966!2d79.35538226456946!3d13.112112851454821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1751642886143!5m2!1sen!2sin"
            width="100%" height="160" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            aria-label="Google Map Location"></iframe>
        </div>

        <!-- Social Media Section -->
        <div class="col-12 col-md-4 px-3 px-md-4">
          <h4>Social Media</h4>
          <div class="social-icons mt-4">
            <a href="#" aria-label="Google" title="Google"><i class="fa-brands fa-google fa-2x"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61550823523326" target="_blank" rel="noopener noreferrer"
              aria-label="Facebook" title="Facebook"><i class="fa-brands fa-facebook fa-2x"></i></a>
            <a href="https://wa.me/919786379774" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
              title="WhatsApp"><i class="fa-brands fa-whatsapp fa-2x"></i></a>
            <a href="https://x.com/Mokesh777it" target="_blank" rel="noopener noreferrer" aria-label="Twitter"
              title="Twitter"><i class="fa-brands fa-twitter fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/v-mokesh-7351a3345/" target="_blank" rel="noopener noreferrer"
              aria-label="LinkedIn" title="LinkedIn"><i class="fa-brands fa-linkedin fa-2x"></i></a>
            <a href="https://github.com/mokeshmokes" target="_blank" rel="noopener noreferrer" aria-label="GitHub"
              title="GitHub"><i class="fa-brands fa-github fa-2x"></i></a>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        © 2025 Student_Friendly | All Rights Reserved
      </div>
    </div>
  </footer>
</body>

</html>