<html>
  <head>
    <title>画像アップロードテスト</title>
  </head>
  <body>
    <h1>画像アップロードテスト</h1>
    <form name="imageUploadForm" action="/vsnscouter/measure.php" enctype="multipart/form-data" method="POST">
      <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
      <input type="file" name="imageFile" />
      <input type="submit" value="送信" />
  </body>
</html>  
