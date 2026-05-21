<?php
session_start(); // ✅ Must be at the top
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student_Friendly / Notice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" />
    <style>
        body {
            background-image: url(/image/WhatsApp\ Image\ 2025-09-13\ at\ 13.54.06_7e5f1635.jpg);
            background-size: cover;
            background-position: center;
            font-family: "Lato", sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card1 {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.15);
            width: 420px;
            padding: 40px 30px 50px;
            box-sizing: border-box;
            text-align: center;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .header i {
            color: #006ceb;
            font-size: 2.5rem;
        }

        .header h1 {
            font-family: "Lato", sans-serif;
            font-weight: 900;
            font-size: 2.5rem;
            color: #006ceb;
            margin: 0;
            user-select: none;
        }

        .btn1 {
            background-color: #006ceb;
            color: white;
            border-radius: 30px;
            border: none;
            padding: 10px 28px;
            font-weight: 700;
            font-size: 1rem;
            user-select: none;
            cursor: none;
        }
        
        p.notice-text {
            font-size: 1.125rem;
            color: #333;
            line-height: 1.6;
            margin: 0 0 40px;
            user-select: text;
        }

        .feedback-btn {
            background-color: #006ceb;
            border: none;
            border-radius: 30px;
            padding: 12px 40px;
            font-size: 1.125rem;
            font-weight: 700;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            user-select: none;
            margin-bottom: 20px;
        }

        .feedback-btn:hover,
        .feedback-btn:focus {
            background-color: #0051b8;
            box-shadow: 0 8px 20px rgba(0, 99, 235, 0.4);
            outline: none;
        }

        @media (max-width: 480px) {
            .card1 {
                width: 90%;
                padding: 30px 20px 40px;
            }

            .header h1 {
                font-size: 2rem;
            }

            p.notice-text {
                font-size: 1rem;
            }

            
            .feedback-btn {
                font-size: 1rem;
                padding: 10px 30px;
            }
        }
    </style>
</head>

<body>
    <div class="card1">
        <div class="header">
            <i class="fa-solid fa-bullhorn"></i>
            <h1>Notice</h1>
            <button class="btn1" type="button" aria-label="Academic Notices">Academic</button>
        </div>

        <p class="notice-text">
            If you face any issues while using this website, kindly send us your feedback.
            We will review your suggestions and make improvements as needed. 📧<br /><br />
            Please message your feedback to our email. Thank you for your support!
        </p>

        <a href="feedback.php"><button class="feedback-btn" type="button" aria-label="Open Feedback Form">Feedback Form</button></a>
        <a href="allicon.php"><button class="feedback-btn" style="background-color: red;" type="button" aria-label="Open Feedback Form">Back</button></a>
    </div>
</body>

</html>