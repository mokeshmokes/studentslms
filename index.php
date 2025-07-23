<?php 
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <title>Home</title>
</head>
<body style="background-color: antiquewhite;">
  <br />
  <div class="container">
    <p class="text-center display-4">Welcome to Student Knowledge Hub</p>
    <p class="text-center h5">
      Empowering students with essential knowledge, practical tools, and learning resources to build a successful academic and professional future.
      Learn at your own pace, anytime, anywhere.
    </p>
    <br /><br />
    <div class="row text-center">
      <div class="col-md-4 col-sm-12 mb-4">
        <p class="h3">
          <i class="fas fa-book mx-2" style="color: orange;"></i>Learn
        </p>
        <p>
          Set clear goals and study regularly to stay on track with your learning.
          Use visuals and practice through quizzes or hands-on tasks to boost understanding.
          Teach others and take short breaks to improve memory and stay focused.
        </p>
      </div>
      <div class="col-md-4 col-sm-12 mb-4">
        <p class="h3">
          <i class="fas fa-brain mx-2" style="color: pink;"></i>Practice
        </p>
        <p>
          Practice daily and focus on building a strong foundation before tackling advanced topics.
          Apply your knowledge to real-world problems and track your progress regularly.
          Use a timer during practice to improve speed, accuracy, and exam readiness.
        </p>
      </div>
      <div class="col-md-4 col-sm-12 mb-4">
        <p class="h3">
          <i class="fas fa-bullseye mx-2" style="color: red;"></i>Achieve
        </p>
        <p>
          Set goals and track your learning progress through milestones and challenges.
          Earn certificates and badges as proof of your dedication and improvement.
          Stay motivated by celebrating small wins and preparing for real-world success.
        </p>
      </div>
    </div>
  </div>
  <br /><br />
  <div class="container-fluid py-4" style="background-color: aqua;">
    <p class="text-center display-5">Key Features</p>
    <div class="row text-center">
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <p class="h4">
          <i class="fas fa-book-open mx-2" style="color: greenyellow;"></i>Easy Learning
        </p>
        <p>Simple explanations and step-by-step guidance make learning easy for everyone.</p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <p class="h4">
          <i class="fas fa-vial mx-2" style="color: deepskyblue;"></i>Hands-On Practice
        </p>
        <p>Boost your skills by actively applying concepts through fun and practical exercises.</p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <p class="h4">
          <i class="fas fa-chart-line mx-2" style="color: red;"></i>Progress Tracking
        </p>
        <p>Monitor your learning journey with real-time progress tracking and achievements.</p>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <p class="h4">
          <i class="fas fa-globe mx-2" style="color: whitesmoke;"></i>24/7 Access
        </p>
        <p>Enjoy 24/7 access to learning materials anytime you need them.</p>
      </div>
    </div>
  </div>
  <br />
  <div class="container text-center">
    <p class="h2">Have a Question?</p>
    <p class="h5">We are here to help you. Contact us for support, feedback, or collaboration ideas.</p>
    <a href="contact_us.php">
      <button class="btn btn-info">Contact Us</button>
    </a>
  </div>
  <br />
</body>
</html>
<?php
include('footer.php');
?>
