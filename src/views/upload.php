<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laisse pas traîner ton File</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="imageUpload">Upload an profile image</label>    
            <input type="file" multiple="multiple" name="fichier[]" id="imageUpload" />
            <input type="submit" value="Send !" name="submit" class="button">
        </form>
        <img src="assets/images/cat.gif" alt="cat">
        <br>
    </body>
</html>

