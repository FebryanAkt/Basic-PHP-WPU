<?php
    // submit itu nama tombolnya apa
    if (isset($_POST["submit"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            header("Location: admin.php");
            exit;
        }else{
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login admin</h1>

    <?php if (isset($error)): ?>
        <p style="color: red; font-style: italic;">Username atau password salah</p>
    <?php endif; ?>
    
    <ul>
        <form action="" method="post">
            <li>
                <label for="uname">Username :</label>
                <input type="text" name="username" id="uname">
            </li>
            <li>
                <label for="pw">Password :</label>
                <input type="password" name="password" id="pw">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>