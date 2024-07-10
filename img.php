<?php 
if(isset($_POST['submit'])){
   $img_name = basename($_FILES['upload_img']['name']); // Using basename for security
   $tmp_name = $_FILES['upload_img']['tmp_name'];
   
   $upload_dir = "upload/";
   if (!is_dir($upload_dir)) {
       mkdir($upload_dir, 0777, true); // Create the directory if it doesn't exist
   }

   $upload_file = $upload_dir . $img_name;
   if (move_uploaded_file($tmp_name, $upload_file)) {
       echo "File is valid, and was successfully uploaded.\n";
   } else {
       echo "File upload failed!\n";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
</head>
<body>
    <form action="img.php" method="post" enctype="multipart/form-data">
        <input type="file" name="upload_img"> <br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <div>
        <?php if(isset($_POST['submit']) && isset($img_name)): ?>
            <img src="upload/<?php echo htmlspecialchars($img_name); ?>" alt="Uploaded Image">
        <?php endif; ?>
    </div>
</body>
</html>
