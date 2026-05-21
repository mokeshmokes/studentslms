<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Header - Students_Friend</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f0f4ff;
    }
    nav.navbar {
      background-color: #006ceb;
      box-shadow: 0 4px 12px rgba(0, 108, 235, 0.6);
      padding: 0.6rem 1rem;
    }
    .navbar-brand {
      color: white;
      font-weight: 700;
      font-size: 1.7rem;
      user-select: none;
      display: flex;
      align-items: center;
      gap: 0.6rem;
      transition: color 0.3s ease;
    }
    .navbar-brand:hover {
      color: #cce4ff;
      text-decoration: none;
    }
    .navbar-brand img {
      height: 45px;
      width: 45px;
      object-fit: contain;
      user-select: none;
    }
    .btn-custom-login,
    .btn-custom-register {
      background-color: white;
      border: none;
      font-weight: 600;
      padding: 0.43rem 1.2rem;
      font-size: 1rem;
      border-radius: 25px;
      color: #006ceb;
      box-shadow: 0 1.5px 5px rgba(0, 108, 235, 0.25);
      transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
    }
    .btn-custom-login:hover{
      color: white;
      background-color: red;
      box-shadow: 0 5px 15px rgba(0, 74, 153, 0.5);
    }
    .btn-custom-register:hover {
      color: white;
      background-color: green;
      box-shadow: 0 5px 15px rgba(0, 74, 153, 0.5);
    }
    @media (max-width: 576px) {
      .navbar-brand {
        font-size: 1.4rem;
      }
      .btn-custom-login,
      .btn-custom-register {
        font-size: 0.9rem;
        padding: 0.35rem 1rem;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="image/graduated-removebg-preview.png" alt="Logo" />
        <span>Students_Friend</span>
      </a>
      <div class="ms-auto d-flex gap-2">
        <a href="login.php" class="btn btn-custom-login">Login</a>
        <a href="register.php" class="btn btn-custom-register">Register</a>
      </div>
    </div>
  </nav>
</body>
</html>