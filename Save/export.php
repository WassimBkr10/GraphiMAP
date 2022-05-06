

<?php
include_once("filesLogic.php");
$id=$_GET["id"];
$sql = "select * from images where id=$id "; // 1
$res = $db->query($sql);
while($row = $res->fetch_assoc())
 { 
 $name = $row['file_name']; 
 $size =  $row['size'];
 $type = $row['extension'];
 $image = $row['image'];
 }

  header("Content-type: ".$type);
  header('Content-Disposition: attachment; filename="'.$name.'"');
  header("Content-Transfer-Encoding: binary"); 
  header('Expires: 0');
  header('Pragma: no-cache');
  header("Content-Length: ".$size);

  echo $image;
  exit();  


  
   ?>
   
   <?php
   // include_once("dbConfig.php");
   // if (isset($_GET['id'])) {
    // $id = $_GET['id'];

    
    // $sql = "SELECT * FROM images WHERE id=$id";
    // $result = mysqli_query($db, $sql);

    // $file = mysqli_fetch_assoc($result);
    // $filepath = 'uploads/' . $file['file_name'];

    // if (file_exists($filepath)) {
        // header('Content-Description: File Transfer');
        // header('Content-Type: application/octet-stream');
        // header('Content-Disposition: attachment; filename=' . basename($filepath));
        // header('Expires: 0');
        // header('Cache-Control: must-revalidate');
        // header('Pragma: public');
        // header('Content-Length: ' . filesize('uploads/' . $file['file_name']));
        // readfile('uploads/' . $file['file_name']);

       
        // $newCount = $file['downloads'] + 1;
        // $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        // mysqli_query($db, $updateQuery);
        // exit;
    // }

// }


  ?>