<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <link rel="stylesheet" href="bootstrap.css" />
  <style>
    body {
       background-image: url(./image/WhatsApp\ Image\ 2025-09-28\ at\ 09.29.23_ec17aabb.jpg);
      background: #f8fafc;
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden; /* 🔧 Prevents horizontal scroll */
    }
    .contact-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0px 6px 20px rgba(0,0,0,0.1);
    }
    .contact-card h2 {
      font-weight: 600;
      margin-bottom: 20px;
    }
    .form-control {
      border-radius: 8px;
      padding: 10px 14px;
      border: 1px solid #d0d7de;
      transition: 0.3s ease;
    }
    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 6px rgba(13,110,253,0.4);
    }
    .btn-send {
      background: linear-gradient(135deg, #00c6ff, #0072ff);
      color: #fff;
      border: none;
      padding: 10px 25px;
      border-radius: 8px;
      transition: 0.3s ease;
    }
    .btn-send:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #0072ff, #0056d2);
    }
  </style>
</head>
<body>
  <br><br>
  <div class="container" style="max-width: 600px;">
    <div class="contact-card">
      <h2 class="text-center">Contact Us</h2>
      <form action="cdb.php" method="POST">
        
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control mb-3" placeholder="Enter your name" required name="cname">

        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control mb-3" placeholder="example@gmail.com" required name="cemail">

        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control mb-3" required name="csubject">

        <label for="message" class="form-label">Message</label>
        <textarea id="message" class="form-control mb-3" rows="5" placeholder="Write your message here..." name="cmessage"></textarea>

        <div class="text-center">
          <button type="submit" class="btn-send">Send Message</button>
        </div>
      </form>
    </div>
  </div>
  <br><br>
</body>
</html>
<?php
include('footer.php');
?>
