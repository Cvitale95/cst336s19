<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <style>
   html{
  font-family: roboto;
  font-size: 20px;
  
   }
   
   input[type=submit],input[type=file] {
     
     background-color: white;
            border: none;
            color: #00b8e6;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 30px;
            border: 4px solid #00b8e6;
   }
   
   input:hover{
     background-color: #00b8e6;
            color: white;
   }
   
   html{
       color: blue;
       background-color:  rgb(208,253,255) ;
   }
   
   #myImg{
       transition: transform .8s;
   }
   #myImg:hover{
  transform: scale(2.4);  
   }
  </style>
</head>
<title> Project 5: File Upload</title>
<body>
  <center>
      
 You can upload images below. Only under 1 kb
      
      
      
<form method="POST" enctype="multipart/form-data">
  Select file: <input type="file" name="fileName" /> <br />
  <input type="submit"  name="uploadForm" value="Upload File" />
</form>


<script>
  $(document).ready(function(){
    var sum = "";
    $.ajax({
                    type: "GET",
                    url: "download.php",
                    dataType: "json",
                    success: function(data, status){
                        data.forEach(function(key){
                            sum = sum + "<br>" + key.fileName
                            $("#here").html(sum);
                        });
                    }
                });
 
 
  });
</script>

<?php

if (isset($_POST['uploadForm'])) {
    
     if (empty($filterError)) {
    if ($_FILES["fileName"]["error"] > 0) {
      echo "Error: " . $_FILES["fileName"]["error"] . "<br>";
    }
    else {
      $fileName = $_FILES["fileName"]["name"];
      $fileType = $_FILES["fileName"]["type"];
      $fileContents = file_get_contents($_FILES["fileName"]["tmp_name"]);
      /*Insert into Database*/
      include 'dbConn.php';
      $conn = getDatabaseConnection("heroku_e668be4425805cc");
      $binaryData = file_get_contents($_FILES["fileName"]["tmp_name"]);
      $sql = "INSERT INTO `imgtable` (`fileName`,`fileType`, `fileData` ) " .
            "  VALUES ('$fileName','$fileType' ,'$fileContents' ); ";
      $conn->query($sql);
      echo "Here is the image you just uploaded into the database!(hover over the image)<br>";
    
    function createThumbnail(){
    $sourcefile = imagecreatefromstring(file_get_contents($_FILES["fileName"]["tmp_name"]));
    $newx = 150; $newy = 150;  //new size
    $thumb = imagecreatetruecolor($newx,$newy);
    imagecopyresampled($thumb, $sourcefile, 0,0, 0,0, $newx, $newy,     
     imagesx($sourcefile), imagesy($sourcefile));
    imagejpeg($thumb,"thumb.jpg"); //creates jpg image file called "thumb.jpg"
    echo "<img src='thumb.jpg' id='myImg'/>";
}
createThumbnail();
    }
}
}

?>
<br>
<b> Below are the list of all the images names that are in the database</b>
<div id="here">
  
</div>
</center>
</body>

