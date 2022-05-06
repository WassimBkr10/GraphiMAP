<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />

  <title>Download files</title>
</head>
 <style>
  form {
  width: 30%;
  margin: 100px auto;
  padding: 30px;
  border: 1px solid #555;
}
input {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 5px 10px;
}
button {
  border: none;
  padding: 10px;
  border-radius: 5px;
}
table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
}
  </style>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>Download</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['file_name']; ?></td>
      <td><a href="downloads.php?id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>