<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student_Friend / Forgetpassword</title>
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
      margin-top: 10%;
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
    #bar {
      height: 8px;
      border-radius: 5px;
      margin-top: 5px;
      background-color: #e0e0e0;
    }

    #bar .barfill {
      height: 100%;
      width: 0%;
      border-radius: 5px;
      transition: width 0.5s ease-in-out;
    }

    #word {
      margin-top: 5px;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <div class="card1">
    <h2>FORGET PASSWORD</h2>
    <form action="fodb.php" method="POST">
      <div class="mb-3">
        <label>Email :</label>
        <div class="input-group">
          <input type="email" name="femail" class="form-control" placeholder="Enter your Email address..." required>
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        </div>
      </div>

      <div class="mb-3">
        <label> New Password :</label>
        <div class="input-group">
          <input type="password" id="password" class="form-control" placeholder="Enter your New Password..." required>
          <span class="input-group-text" onclick="togglePassword()">
            <i class="fa-solid fa-eye-slash" id="eyeIcon"></i>
          </span>
        </div>
      </div>
      <p style="color: red;" id="cl">Password must be at least 8 characters long and include one uppercase letter, one number, and one special
        character.</p>
      <div id="bar">
        <div class="barfill"></div>
      </div>
      <div id="word"></div>

      <div class="mb-3">
        <label> Confirm Password :</label>
        <div class="input-group">
          <input type="password" name="fpassword" id="password1" oninput="check()" class="form-control" placeholder="Enter your Confirm Password..." required>
          <span class="input-group-text" onclick="togglePassword1()">
            <i class="fa-solid fa-eye-slash" id="eyeIcon1"></i>
          </span>
        </div>
      </div>
      <p id ="say"></p>

      <div class="d-grid mb-3">
        <button type="submit" id="mess" onclick="mess()" class="btn btn-primary">Reset</button>
      </div>
       </form>
      <div class="d-grid ">
        <button onclick="location.href='login.php'" class="btn btn-danger">Back</button>
      </div>
   
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

    function togglePassword1() {
      const passwordField = document.getElementById("password1");
      const eyeIcon = document.getElementById("eyeIcon1");

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
    
    document.getElementById("password").addEventListener("input", function () {
      const password = this.value;
      const barfill = document.querySelector("#bar .barfill");
      const word = document.getElementById("word");
      const cl = document.getElementById("cl")
      let i = 0;
      if (password.length >= 8) i++;
      if (/[A-z]/.test(password)) i++;
      if (/[0-9]/.test(password)) i++;
      if (/[!@#$%^&*]/.test(password)) i++;

      switch (i) {
        case 0:
          barfill.width = "0%";
          barfill.style.background = "transparent";
          word.textContent = "";
          cl.style.color="red"
          break;

        case 1:
          barfill.style.width = "25%";
          barfill.style.backgroundColor = "red";
          word.textContent = "Week";
          word.style.color = "red";
          cl.style.color="red"
          break;

        case 2:
          barfill.style.width = "50%";
          barfill.style.backgroundColor = "orange";
          word.textContent = "Medium";
          word.style.color = "orange";
          cl.style.color="red"
          break;

        case 3:
          barfill.style.width = "75%";
          barfill.style.backgroundColor = "blue";
          word.textContent = "Good";
          word.style.color = "blue";
          cl.style.color="red"
          break;

        case 4:
          barfill.style.width = "100%";
          barfill.style.backgroundColor = "green";
          word.textContent = "Strong";
          word.style.color = "green";
          cl.style.color="green";
          break;
      }

    });

   var pass1=document.getElementById("password");
   var pass2=document.getElementById("password1");
   var say=document.getElementById("say");

   function check(){
    if(pass1.value==pass2.value){
        say.textContent="";
    }
    else{
        say.textContent="Incorrect";
        say.style.color="red";
    }
   }
  </script>

</body>

</html>