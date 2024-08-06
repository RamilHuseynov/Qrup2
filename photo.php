<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Photo</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select photo to upload:<br><br>
        <input type="file" name="photo" id="file"><br><br>
        <input type="submit" value="Upload Photo" name="submit">
    </form>
</body>
</html>
