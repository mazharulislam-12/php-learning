<?php
    $userName = $email = $password = "";

    if(isset($_POST['btn'])){
        $userName = $_POST['user-name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
?>


<h2>User Name: <?php echo htmlspecialchars($userName); ?></h2>
    <h3>Email: <?php echo htmlspecialchars($email); ?></h3>
    <p>Password: <?php echo htmlspecialchars($password); ?></p>