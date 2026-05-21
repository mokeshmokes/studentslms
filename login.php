<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student_Friend / Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" />
  <style>
    body {
       background-image: url(./image/WhatsApp\ Image\ 2025-09-28\ at\ 09.29.23_ec17aabb.jpg);
      background-size: cover;
      background-position: center;
      font-family: "Lato", sans-serif;
    }

    .card1 {
      background-color: white;
      max-width: 500px;
      margin: 5% auto;
      margin-top: 8%;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0px 16px 25px rgba(0, 0, 0, 0.2);
    }

    h2 {
      color: #006ceb;
      font-weight: 900;
      text-align: center;
      margin-bottom: 30px;
    }

    .btn {
      border-radius: 10px;
      width: 100%;
    }

    .btn:hover {
      transform: scale(1.05);
      box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
      transition: 0.2s ease-in-out;
    }

    .input-group-text {
      background: transparent;
      border: none;
      color: #006ceb;
      cursor: pointer;
    }

    label {
      font-weight: 700;
      margin-bottom: 5px;
    }
    @media (max-width: 700px) {
      .card1{
        margin-top: 35%;
      }
    }
  </style>
</head>

<body>
  <div class="card1">
    <h2>STUDENT LOGIN</h2>
    <form action="ldb.php" method="POST" >
      <div class="mb-3">
        <label>Email :</label>
        <div class="input-group">
          <input type="email" name="lemail" class="form-control" placeholder="Enter your Email address..." required>
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
      </div>

      <div class="mb-3">
        <label>Password :</label>
        <div class="input-group">
          <input type="password" name="lpassword" id="password" class="form-control" placeholder="Enter your Password..." required>
          <span class="input-group-text" onclick="togglePassword()">
            <i class="fa-solid fa-eye-slash" id="eyeIcon"></i>
          </span>
        </div>
      </div>

      <div class="mb-3">
        <div class="input-group">
          <input type="checkbox" style="margin-top: 2px;" ><span style="margin-left:8px;"> Remember me</span>      
        </div>
      </div>

      <div class="d-grid mb-3">
        <button type="submit" id="mess" class="btn btn-primary">Login</button>
      </div>

    </form>
    <div class="d-grid">
      <button type="submit" class="btn btn-danger" onclick="location.href='index.php'">Back</button>
    </div>
    <p class="text-center mt-3"><a href="Forgetpassword.php" style="color:#006ceb; cursor: pointer;"><u>Forget
          Password</u></a></p>

    <p class="text-center mt-3">Dont have an account? <a href="register.php" style="color:#006ceb; cursor: pointer;"><u>Register
          here</u></a></p>
  </div>


  <script>
    function togglePassword() {
      const passwordField = document.getElementById("password");
      const eyeIcon = document.getElementById("eyeIcon");

      if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
      } else {
        passwordField.type = "password";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
      }
    }

    var mess = document.getElementById("mess");
  </script>

</body>

</html>