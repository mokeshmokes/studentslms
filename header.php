<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <link rel="stylesheet" href="bootstrap.css">
  <style>
    .header {
      position: relative;
      width: 100%;
      background-color: ghostwhite;
    }
    .brand-title {
      color: rgba(121, 69, 65, 0.7);
      font-weight: bold;
    }
    .header-btn {
      font-size: 20px;
      font-weight: bold;
      border-radius: 5px;
      padding: 5px 15px;
    }
  </style>
</head>
<body>
  <div class="header">
    <header>
      <div class="container-fluid py-2">
        <div class="row align-items-center text-center">
          <div class="col-12 col-md-2 mb-2 mb-md-0">
            <img src="image/graduated-removebg-preview.png" alt="logo" height="100" width="100">
          </div>
          <div class="col-12 col-md-4">
            <h1 class="brand-title">Student_Friendly</h1>
          </div>
          <div class="col-6 col-md-3 mb-2 mb-md-0">
            <a href="login.php">
              <button class="header-btn" style="background-color: aqua; border: none;">Login</button>
            </a>
          </div>
          <div class="col-6 col-md-3">
            <a href="register.php">
              <button class="header-btn" style="background-color: red; border: none; color: white;">Register</button>
            </a>
          </div>
        </div>
      </div>
    </header>
  </div>
</body>
</html>
