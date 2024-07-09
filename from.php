<?php
    $userName = $email = $password = "";

    if(isset($_POST['btn'])){
        $userName = $_POST['user-name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
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

    <h2>User Name: <?php echo htmlspecialchars($userName); ?></h2>
    <h3>Email: <?php echo htmlspecialchars($email); ?></h3>
    <p>Password: <?php echo htmlspecialchars($password); ?></p>

    <form action="contact.php" method="POST">
        <label>User Name</label>
        <input type="text" name="user-name" required> <br>
        <label>User Email</label>
        <input type="email" name="email" required><br>
        <label>Password</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Submit" name="btn">
    </form>

</body>
</html>
