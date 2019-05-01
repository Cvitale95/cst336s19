<?php 
// http://php.net/manual/en/features.file-upload.multiple.php


    $file_ary = reArrayFiles($_FILES['fileName']);

    foreach ($file_ary as $file) {
        if ($file["error"] > 0) {
          echo "Error: " . $file["error"] . "<br>";
        }
        else {
    $fileName = $_FILES["fileName"]["name"];
    $fileType = $_FILES["fileName"]["type"];
    $fileContents = file_get_contents($_FILES["fileName"]["tmp_name"]);
    include 'dbConn.php';
      $conn = getDatabaseConnection("imgUpload");
     
      $sql = "INSERT INTO `imgTable` (`fileName`,`fileType`, `fileData` ) " .
            "  VALUES ('$fileName','$fileType' ,'$fileContents' ); ";
      $conn->query($sql);
      function createThumbnail(){
    $sourcefile = imagecreatefromstring(file_get_contents($_FILES["fileName"]["tmp_name"]));
    $newx = 150; $newy = 150;  //new size
    $thumb = imagecreatetruecolor($newx,$newy);
    imagecopyresampled($thumb, $sourcefile, 0,0, 0,0, $newx, $newy,     
     imagesx($sourcefile), imagesy($sourcefile));
    imagejpeg($thumb,"thumb.jpg"); //creates jpg image file called "thumb.jpg"
    echo "<img src='thumb.jpg'/>";
}
createThumbnail();
        }  
        
    }
    

function reArrayFiles(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}
?>
