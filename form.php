<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Virtual ID Card</title>
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
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .container input[type="text"],
        .container input[type="tel"],
        .container input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
        }
        .input-btn{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Your Virtual ID Card</h1>
        <form action="id.php" method="post">
            <label for="std_name">Name *</label>
            <input type="text" id="std_name" name="std_name" placeholder="Jane Doe" required>

            <label for="std_phone">Phone *</label>
            <input type="tel" id="std_phone" name="std_phone" placeholder="(234) 234-2342" required>

            <label for="std_email">Email *</label>
            <input type="email" id="std_email" name="std_email" placeholder="somebody@me.com" required>

            <label for="std_course">Course *</label>
            <input type="text" id="std_course" name="std_course" placeholder="Name of Your Course" required>

            <label for="std_batch">Batch No *</label>
            <input type="text" id="std_batch" name="std_batch" placeholder="Your Batch No" required>

            <input name="generate_btn" type="submit" value="Generate ID" class="input-btn">
        </form>
    </div>
</body>
</html>
