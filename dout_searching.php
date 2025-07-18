<?php
session_start(); // ✅ Must be at the top
?>
<?php 
include('headericon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dout Searching</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container" style="width: 50%;top: 20px; position: relative; margin-left: 25%;">
        <p style="text-align: center;font-size: 30px;color: aqua;" class="mt-3">Dout Searching</p>
<script async src="https://cse.google.com/cse.js?cx=137e9384838bb46cb" class="mt-5">
</script>
<div class="gcse-search"></div>
</div>
<br><br><br>
</body>
</html>
<br><br>
<?php
include('footer.php');
?>