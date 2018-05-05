<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        
    <title>Result</title>
    <style type="text/css">
        .correct{
            background-color: #7ae062e0!important
        }
        .wrong{
           background-color: #e28252e0!important
        }
    </style>
  </head>
  <body>
    <div class="container">
        <h1 style="text-align: center;">Bang Cham Bai</h1>
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Test</th>
              <th scope="col">Your answer</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
        <tbody>
<?php
require_once '../exec.php';
require_once 'file.php';
require_once 'result/result.php';
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $messs "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}*/
// Check file size
$uploadOk = 1;
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $mess =  "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "cpp" && $imageFileType != "c") {
    $mess =  "Sorry, File type is not allow";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $mess =  $mess ."</br>Your file was not uploaded.";
// if everything is ok, try to upload file
} else 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $mess = 
        "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }; 

?>
<?php
// Xu li file

$file_name =explode('.',$_FILES["fileToUpload"]["name"])[0];
$file_name = $target_dir.$file_name;
$ex = new file_exec($target_file,$file_name);
$path = $_FILES["fileToUpload"]["name"];
$f = new file($path);
$f->xuli();
if ($uploadOk == 1){
    $status = 0;
    for ($i = 0; $i < count($result); $i++){
        file_put_contents("result/input.txt", $result[$i]["input"]);
        $arr = $ex->make_exec();
        if ($arr[0] == $result[$i]["output"]){
            echo 
                "<tr class='correct'>
                  <th scope='row'>$i</th>
                  <td>$arr[0]</td>
                  <td>Correct</td>
                </tr>";
                $status++;
        }else echo 
        "<tr class='wrong'>
          <th scope='row'>$i</th>
          <td>$arr[0]</td>
          <td>Wrong</td>
        </tr>";
        
    } ;
	
	if ($status == count($result)){
        echo "<div class='alert alert-success' role='alert'>
            <strong>Congrat!</strong> Your code pass the test
        </div>";
    }else
        echo "<div class='alert alert-danger' role='alert'>
            <strong>Wrong!</strong> Check it again!
        </div>";
	
}else
echo $mess;

?>


    	   
    	  </tbody>
    	</table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>