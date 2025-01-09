<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$correct_email = "admin@gmail.com";
$correct_password = "123456789";

$login_message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitted_email = $_POST["email"];
    $submitted_password = $_POST["password"];
    
    if ($submitted_email === $correct_email && $submitted_password === $correct_password) {
        $login_message = "<h1>Welcome " . htmlspecialchars($submitted_email) . "</h1><p>Login successful</p>";
    } else {
        $login_message = "<h1>Login failed</h1><p>Incorrect email or password</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <style>
        label, a {
            display: block;
            padding: 5px;
        }
        input {
            height: 40px;
            width: 100%;
            color: gray;
            border-radius: 10px;
            border-color: black;
        }
        form {
            margin: 20px;
            padding: 15px;
        }
        h3 {
            margin: 5px;
            color: darkblue;
        }
        button {
            width: 100%;
            border: 2px solid;
            border-radius: 10px;
            background-color: red;
            color: white;
            height: 50px;
        }
        .btn {
            margin: 20px;
            padding: 15px;
        }
    </style>
</head>
<body>
    <h3>SIGN IN</h3>
    <?php
    echo $login_message
    ?>
    <form method="POST" action="">
        <label><i class="fa-solid fa-envelope"></i>Email</label>
        <input type="text" id="email" placeholder="email" name="email" required>
        <label><i class="fa-solid fa-lock"></i>Password</label>
        <input type="password" id="password" placeholder="password" name="password" required>
        <div class="btn">
            <button type="submit">Login</button>
        </div>
        <a href="ad funds forgottenp.html">Forgotten password</a>
    </form>
    <!-- Display login message here -->
    <?php echo $login_message; ?>
</body>
</html>
