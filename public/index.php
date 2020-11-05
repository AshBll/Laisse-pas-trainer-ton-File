<?php
require_once "../src/views/upload.php";

$filePath = "uploads/";
// si le formulaire est soumis alors
if(isset($_POST["submit"])) {
    // si le nombre total de fichier est supérieur a 0 alors
    if(count($_FILES["fichier"]["name"]) > 0) {
        // boucle autant de fois que le nombre de fichier
        for($i=0;$i < count($_FILES["fichier"]["name"]); $i++) {
            $tempFileName = $_FILES["fichier"]["tmp_name"][$i];
            $extension = pathinfo($_FILES["fichier"]["name"][$i], PATHINFO_EXTENSION);
            $fileName = uniqid() . "." .$extension;
            // Si le fichier est inferieur ou egale a 1000000 alors
            if(filesize($_FILES["fichier"]["tmp_name"][$i]) <= 1000000) {
                if(mime_content_type($tempFileName) === "image/gif"
                    || mime_content_type($tempFileName) === "image/png"
                    || mime_content_type($tempFileName) === "image/.jpg"
                    || mime_content_type($tempFileName) === "image/.jpeg") {
                    $uploadFile = $filePath . $fileName;
                    if(move_uploaded_file($_FILES["fichier"]["tmp_name"][$i] , $uploadFile)) {
                        $fichiers[] = $fileName;
                    }
                } 
            }
        }
    }
    echo "<h1>Uploaded:</h1>";    
        for($j=0;$j < count($fichiers); $j++){
        echo "<figure>";
            echo "<img src='uploads/$fichiers[$j]' style='width:25%'>";
            echo "<figcaption>" . $fichiers[$j] . "</figcaption>";
        echo "</figure>";
        echo "<br>";
        }
}



