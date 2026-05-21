<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // ✅ Safe session start
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Friendly / Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" />
    <style>
        body {
            background-image: url(bg2.jpeg);
            background-position: center;
            background-size: cover;
            font-family: 'Lato', sans-serif;
        }

        .card1 {
            background-color: white;
            border-radius: 30px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            margin: 2rem auto;
            padding-bottom: 2rem;
            max-width: 900px;
        }

        .card2 {
            background-color: #006ceb;
            border-radius: 30px 30px 0 0;
            padding: 1rem;
            color: white;
        }

        .thick-hr {
            height: 4px;
            background-color: #006ceb;
            border: none;
            margin: 1rem 0;
            display: block;
        }

        .image-card {
            background-color: transparent;
            border: 2px solid #006ceb;
            border-radius: 100%;
            box-shadow: 0px 8px 16px 0px #006ceb;
            background-image: url(graduated-removebg-preview.png);
            background-size: cover;
            background-position: center;
            width: 100px;
            height: 100px;
            margin: auto;
        }

        button {
            border-radius: 10px;
            background-color: white;
            color: #006ceb;
            border: #006ceb solid;
            padding-left: 15px;
            padding-right: 15px;
        }

        .input-group-text {
            background-color: transparent;
            color: #006ceb;
        }

        .edit:hover {
            background-color: #006ceb;
            color: white;
            transform: scale(1.05);
            transition: 0.2s ease-in-out;
        }
        .btn{
            margin-right: 10px;
        }
        @media (max-width :750px){
            .btn{
                margin-left: -150px;
                margin-right: -90px;

            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card1">

            <div class="card2">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                        <i class="fa-solid fa-graduation-cap fa-2x me-2"></i>
                        <span style="font-size: 25px;">Student_Friendly</span>
                    </div>
                    <div class="col-12 col-md-6 text-md-end">
                        <a href="allicon.php" class="text-white" style="cursor: pointer;">Back to dashboard</a>
                    </div>
                </div>
            </div>


            <hr class="thick-hr">


            <div class="container">
                <div class="row align-items-center mb-4 text-center text-md-start">
                    <div class="col-12 col-md-3">
                        <div class="image-card"></div>
                    </div>
                    <div class="col-12 col-md-5 mt-3 mt-md-0">
                        <h3><?php echo isset($_SESSION['username0']) ? $_SESSION['username0'] : 'Guest0'; ?><?php echo isset($_SESSION['username1']) ? $_SESSION['username1'] : 'Guest1'; ?></h3>
                    </div>
                    <div class="col-12 col-md-4 mt-3 mt-md-0 text-md-end">
                        <button class="edit">Edit</button>
                    </div>
                </div>


                <div class="mb-3">
                    <label>Email :</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Available'; ?>" disabled >
                    </div>
                </div>


                <div class="mb-3">
                    <label>Mobile No :</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="tel" class="form-control" value="<?php echo isset($_SESSION['mobileno']) ? $_SESSION['mobileno'] : '+91 1234567890'; ?>" disabled>
                    </div>
                </div>


                <div class="mb-3">
                    <label>School Name :</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-school"></i></span>
                        <input type="text" class="form-control" value="<?php echo isset($_SESSION['school']) ? $_SESSION['school'] : 'himayam school'; ?>" disabled>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Student Id:</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-id-badge"></i></span>
                        <input type="text" class="form-control" value="<?php echo isset($_SESSION['student_id']) ? $_SESSION['student_id'] : 'himayam school'; ?>" disabled>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>City/Town:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-city"></i></span>
                            <input type="text" class="form-control" value="<?php echo isset($_SESSION['place']) ? $_SESSION['place'] : 'himayam school'; ?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>State :</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="<?php echo isset($_SESSION['state']) ? $_SESSION['state'] : 'himayam school'; ?>" disabled>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>DOB :</label>
                        <input type="text" class="form-control" value="<?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : 'himayam school'; ?>" disabled>
                    </div>
                </div>

                <div style="margin-left: 320px;">
                    <a href="Forgetpassword.php"><button class="btn btn-primary mt-4" >Change Password</button></a>
                    <a href="login.php"><button class="btn btn-danger mt-4">Logout</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>