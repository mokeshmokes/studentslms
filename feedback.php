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
            width: 70%;
            margin: 5% auto;
            margin-top: 8%;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 16px 25px rgba(0, 0, 0, 0.2);
        }

        h1 {
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
            .card1 {
                margin-top: 25%;
            }
        }
    </style>
</head>

<body>
    <div class="card1">
        <h1>Feedback Form</h1>
        <form action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="47da1a2b-75f2-4866-a5bc-4260e058b028">
            <div class="mb-3">
                <label>Name :</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control" name="name1" placeholder="Enter your Name..." required>
                </div>
            </div>
            <div class="mb-3">
                <label>Email :</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email address..." required>
                </div>
            </div>
            <div class="mb-3">
                <label>Subject :</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-note-sticky"></i></span>
                    <input type="text" class="form-control" name="subject" placeholder="Enter your Subject..." required>
                </div>
            </div>
            <div class="mb-3">
                <label>Message:</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-message"></i></span>
                    <textarea row="5" class="form-control" name="Message" placeholder="Enter your Message here..." required></textarea>
                </div>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <div class="d-grid">
            <button type="submit" class="btn btn-danger" onclick="location.href='notice.php'">Back</button>
        </div>

</body>

</html>