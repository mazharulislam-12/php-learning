<?php
if(isset($_POST['generate_btn'])){
    $name = htmlspecialchars($_POST['std_name']);
    $phone = htmlspecialchars($_POST['std_phone']);
    $email = htmlspecialchars($_POST['std_email']);
    $course = htmlspecialchars($_POST['std_course']);
    $batch = htmlspecialchars($_POST['std_batch']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .id-card {
            background-color: #fff;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        .id-card header {
            background-color: #ef5350;
            color: #fff;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            font-size: 24px;
            font-weight: bold;
        }
        .id-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 15px 0;
        }
        .id-card .details {
            text-align: left;
            margin-top: 15px;
        }
        .id-card .details p {
            margin: 5px 0;
        }
        .id-card .details p span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="id-card">
        <header>DarunIT SID</header>
        <img src="<?php echo $image; ?>" alt="Profile Image">
        <div class="details">
            <p><span>Name:</span> <?php if(isset($name)) { echo $name; } ?></p>
            <p><span>Course:</span> <?php if(isset($course)) { echo $course; } ?></p>
            <p><span>Phone:</span> <?php if(isset($phone)) { echo $phone; } ?></p>
            <p><span>Email:</span> <?php if(isset($email)) { echo $email; } ?></p>
            <p><span>Batch No:</span> <?php if(isset($batch)) { echo $batch; } ?></p>
        </div>
    </div>
</body>
</html>
