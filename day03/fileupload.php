<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <h1>Please choose your file </h1>
  <label>File </label>
  <input type="file" name="abbas" />
  <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
  <input type="text" name="description"/>
  <input type="submit"/>
</form>
</body>
</html>


<?php
require 'strings.php'; ?>
